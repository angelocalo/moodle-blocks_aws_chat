// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * API endpoint to invoke Bedrock
 *
 * @package   block_aws_chat
 * @copyright 2024, Angelo Calò <angelo.calo@unipd.it>, Davide Ferro <davide.ferro@unipd.it>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$(document).ready(function(){
    const path = M.cfg.wwwroot + "/blocks/aws_chat/";
    const invoker = path + "moodle_assistant_invoke.php";
    const dots = path + "res/typing-dots.gif";
    var currentcourse_sess = $("#nm_sess").val();
    var currentcourse_id = $("#courseid").val();

    $('#runbedrock').submit(function(event){
        var quest = ($("#question").val()).trim();
        if (quest == "") {
            return false;
        }
        $('form #run').attr('disabled', 'disabled');

        event.preventDefault();

        console.log("H: " + quest); //logging

        var convo_content = $("#conversation").html();
        $( "#conversation" ).append( "<p class=\"human\">"+quest+"</p>" );
        $( "#conversation" ).append( "<p id=\"typing\"><img src=\""+dots+"\" width=\"60\"></p>" );

        var form = $(this);
        var inputs = form.find("input, select, button, textarea");
        
        inputs.prop("disabled", true);
        
        request = $.ajax({
            url: invoker+"?sesskey="+currentcourse_sess,
                type: "post",
                data: {
                    question: quest,
                    convo: convo_content,
                    course_id: currentcourse_id,
                    'courseid': currentcourse_id
                } 
        });

        request.done(function (response, textStatus, jqXHR){
            // Log a message to the console
            console.log(response);
            $( "#typing" ).remove();
            resp = response.replaceAll("\n", "<br>");
            $( "#conversation" ).append( "<p class=\"assistant\">"+resp+"</p>" );
            inputs.prop("disabled", false);
            $("#question").val("");
            $('form #run').removeAttr("disabled");
            $('#question').focus();
        });

    });
})

