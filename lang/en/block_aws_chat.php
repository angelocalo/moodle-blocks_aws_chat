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
 * Languages configuration for the block_AWS_chat plugin.
 *
 * @package   block_AWS_chat
 * @copyright 2024, Angelo Calò <angelo.calo@unipd.it>, Davide Ferro <davide.ferro@unipd.it>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */




$string['pluginname'] = 'AWS Chat Block';
$string['block_aws_chat'] = 'AWS Chat';
$string['aws_chat'] = 'AWS Chat';
$string['aws_chat:addinstance'] = 'Add a new AWS Chat block';
$string['aws_chat:myaddinstance'] = 'Add a new AWS Chat block to the My Moodle page';
$string['privacy:metadata'] = 'The AWS Chat block stores ..........';
$string['res'] = 'Hi {$a->name}, I\'m <B>{$a->assistantname},</B> your assistant for Moodle. Enter your question and click ';
$string['res_no_user'] = 'Hi, I\'m <B>{$a->assistantname},</B> your assistant for Moodle. Enter your question and click ';
$string['button_text'] = 'Submit';
$string['button_textdesc'] = 'Insert the text that you want on Button';
$string['prompt2'] = 'Example question: What is the database activity for?';
$string['placeholder'] = 'Your&nbsp;question';
$string['title'] = 'Block title';
$string['titledesc'] = 'The Block title that you want to see in moodle';
$string['restrictusage'] = 'Restrict chat usage to logged-in users';
$string['restrictusagedesc'] = 'If this box is checked, only logged-in users will be able to use the chat box.';
$string['apikey'] = 'AWS API Key';
$string['apikeydesc'] = 'The API Key for your AWS account';
$string['region'] = 'Region';
$string['regiondesc'] = 'The AWS Region';
$string['assistant'] = 'Assistant';
$string['assistantdesc'] = 'The default assistant attached to your AWS account that you would like to use for the response';
$string['assistantname'] = 'Assistant name';
$string['assistantnamedesc'] = 'The name that the AI will use for itself internally. It is also used for the UI headings in the chat window.';
$string['secret'] = 'Secret';
$string['secretdesc'] = 'Secret key that the AI will use for the user internally. ';
$string['prompt'] = 'Completion prompt';
$string['promptdesc'] = 'The prompt the AI will be given before the conversation transcript';
$string['sourceoftruth'] = 'Source of truth';
$string['sourceoftruthdesc'] = 'Although the AI is very capable out-of-the-box, if it doesn\'t know the answer to a question, it is more likely to give incorrect information confidently than to refuse to answer. In this textbox, you can add common questions and their answers for the AI to pull from. Please put questions and answers in the following format: <pre>Q: Question 1<br />A: Answer 1<br /><br />Q: Question 2<br />A: Answer 2</pre>';
$string['advanced'] = 'Advanced';
$string['advanceddesc'] = 'Advanced arguments sent to AWS. Don\'t touch unless you know what you\'re doing!';
$string['savedquestions'] = 'Saved Questions';
$string['savedquestionsdesc'] = 'Number of questions to save as context';
$string['temperature'] = 'Temperature';
$string['temperaturedesc'] = 'Controls randomness: Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.';
$string['temperature_student'] = 'Temperaturefor student user';
$string['temperature_studentdesc'] = 'Controls randomness for student user: Lowering results in less random completions. As the temperature approaches zero, the model will become deterministic and repetitive.';
$string['maxlength_student'] = 'Maximum length for student user';
$string['maxlength_studentdesc'] = 'The maximum number of token to generate for student user. Requests can use up to 2,048 tokens shared between prompt and completion. The exact limit varies by model. (One token is roughly 4 characters for normal English text)';
$string['maxlength'] = 'Maximum length';
$string['maxlengthdesc'] = 'The maximum number of token to generate. Requests can use up to 2,048 tokens shared between prompt and completion. The exact limit varies by model. (One token is roughly 4 characters for normal English text)';
$string['configtitle'] = 'Title';
$string['enablecollaps'] = 'Allow the user to collapse this block';
$string['enabledock'] = 'Allow the user to dock this block';
$string['filter'] = 'User filter';
$string['shown'] = 'Shown';
$string['hidden'] = 'Hidden';
$string['nouserfilterset'] = 'No user filter set';
$string['ifuserprofilefield'] = 'if user profile field';
$string['config_sourceoftruth'] = 'Source of truth';
$string['config_sourceoftruth_help'] = "You can add information here that the AI will pull from when answering questions. The information should be in question and answer format exactly like the following:\n\nQ: When is section 3 due?<br />A: Thursday, March 16.\n\nQ: When are office hours?<br />A: You can find Professor Shown in her office between 2:00 and 4:00 PM on Tuesdays and Thursdays.";
$string['problem_vote'] = "Some problem occured, please try again.";
$string['vote_ok'] = "Your vote is saved.";
