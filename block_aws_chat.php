<?php
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
 * Block definition class for the block_aws_chat plugin.
 *
 * @package   block_aws_chat
 * @copyright 2024, Angelo Calò <angelo.calo@unipd.it>, Davide Ferro <davide.ferro@unipd.it>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 //namespace block_aws_chat;


global $CFG;
defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/moodlelib.php');


class block_aws_chat extends block_base {
    
    /**
     * Initialises the block.
     *
     * @return void
     */
    public function init() {
        
        $this->title = get_config("block_aws_chat", "title");

    }
   
    function has_config() {
        return true;
    }

   

 public function instance_allow_multiple() {
       return false;
  }

    public function instance_can_be_collapsed() {
      return (parent::instance_can_be_collapsed() && (empty($this->config->enablecollaps) || $this->config->enablecollaps=='yes'));
  }

  public function instance_can_be_docked() {
      return (parent::instance_can_be_docked() && (empty($this->config->enabledock) || $this->config->enabledock=='yes'));
  }

    /**
     * Gets the block contents.
     *
     * @return string The block HTML.
     */
    public function get_content() {
        global $OUTPUT;global $USER;

        if ($this->content !== null) {
            return $this->content;
        }
       

      $this->content = new stdClass;
      $this->content->items = array();
      $this->content->footer = '';

      if (!isloggedin() || isguestuser()||!($this->enabled_user())) {
         return $this->content;
      }

        $this->content = new stdClass;

        $this->content->text = '';
        $course = $this->page->course;    
         
        $message = get_string('res', 'block_aws_chat',['name' => $USER->firstname." ".$USER->lastname, 'assistantname' => get_config("block_aws_chat", "assistantname")]);
        $message_no_user = get_string('res_no_user', 'block_aws_chat',['assistantname' => get_config("block_aws_chat", "assistantname")]);

        if($USER)
            $res = $message." <b>".get_string("button_text","block_aws_chat")."</b>";
        else
            $res = $message_no_user." <b>".get_string("button_text","block_aws_chat")."</b>";

        $prompt2 = "\n " . get_string('prompt2', 'block_aws_chat');
      
        $this->content->text = $this->content->text. '<div class="pre">'.$res.'<br><br>'.$prompt2.'</div>';

        $this->page->requires->js( '/blocks/aws_chat/res/jquery.min.js');
        $this->page->requires->js( '/blocks/aws_chat/res/popper.js');
        $this->page->requires->js( '/blocks/aws_chat/res/bootstrap.min.js');
        $this->page->requires->js( '/blocks/aws_chat/res/main.js');
        $this->page->requires->js( '/blocks/aws_chat/lib.js');
        $placeholder = get_string('placeholder', 'block_aws_chat');

        $this->content->text = $this->content->text.'
            <form id="runbedrock" method="post" enctype="multipart/form-data" style="margin-top: 5px">
            <input type="hidden" id="nm_sess" value="'.sesskey().'">
            <input type="hidden" id="courseid" value="'.$course->id.'">
                <div class="form-group">
                  <textarea class="form-control" name="question" id="question" rows="3" placeholder='.$placeholder.'></textarea>
                </div>
                <button type="submit" id="run" class="btn btn-primary">'.get_string("button_text","block_aws_chat").'</button>
            </form>


            <div id="conversation" >
            </div></br>
           ';

            
    
        return $this->content;
        
    }


    /**
     * Defines in which pages this block can be added.
     *
     * @return array of the pages where the block can be added.
     */
    public function applicable_formats() {
      return [
          'admin' => false,
          'site-index' => true,
          'course-view' => false,
          'mod' => false,
          'my' => false
      ];
  }

  private function enabled_user() {
    global $USER, $DB;

    $enabled = false;
    $filterconfigured = (isset($this->config->userfield) && !empty($this->config->userfield));
    if ($filterconfigured ) {

        if (isset($this->config->matchvalue) && !empty($this->config->matchvalue)) {
          
            $userfieldvalue = '';
            $customfields = $DB->get_records('user_info_field');
            if (!empty($customfields)) {
              
                foreach($customfields as $customfield) {
                    if ($customfield->shortname == $this->config->userfield) {
                        if (isset($USER->profile[$customfield->shortname]) && !empty($USER->profile[$customfield->shortname])) {
                            $userfieldvalue = $USER->profile[$customfield->shortname];
                        }
                    }
                }
            }
            if (empty($userfieldvalue)) {
              
                if (isset($USER->{$this->config->userfield})) {
                  
                    $userfieldvalue = $USER->{$this->config->userfield};
                }
            }

            switch ($this->config->operator) {
                case 'contains':
                    if (mb_strpos($userfieldvalue, $this->config->matchvalue) !== false) {
                        $enabled = true;
                    }
                break;
                case 'doesnotcontains':
                    if (mb_strpos($userfieldvalue, $this->config->matchvalue) === false) {
                        $enabled = true;
                    }
                break;
                case 'isequalto':
                    if ($this->config->matchvalue == $userfieldvalue) {
                        $enabled = true;
                    }
                break;
                case 'isnotequalto':
                    if ($this->config->matchvalue != $userfieldvalue) {
                        $enabled = true;
                    }
                break;
                case 'startswith':
                    if (mb_ereg_match('^'.$this->config->matchvalue, $userfieldvalue) !== false) {
                        $enabled = true;
                    }
                break;
                case 'endswith':
                    if (mb_ereg($this->config->matchvalue.'$', $userfieldvalue) !== false) {
                        $enabled = true;
                    }
                break;
            }
            if (isset($this->config->display) && ($this->config->display == 'hidden')) {
                $enabled = !$enabled;
            }
        }
    } else {
        $enabled = true;
    }
    return $enabled;
}

    
}
