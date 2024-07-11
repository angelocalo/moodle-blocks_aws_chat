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
 * Plugin settings
 *
 * @package    block_aws_chat
 * @copyright 2024, Angelo Calò <angelo.calo@unipd.it>, Davide Ferro <davide.ferro@unipd.it>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$settings->add(new admin_setting_configtext(
    'block_aws_chat/title',
    get_string('title', 'block_aws_chat'),
    get_string('titledesc', 'block_aws_chat'),
    get_string('pluginname', 'block_aws_chat'),'',
    PARAM_TEXT
));


$settings->add(new admin_setting_configcheckbox(
    'block_aws_chat/restrictusage',
    get_string('restrictusage', 'block_aws_chat'),
    get_string('restrictusagedesc', 'block_aws_chat'),
    1
));

$settings->add(new admin_setting_configtext(
    'block_aws_chat/apikey',
    get_string('apikey', 'block_aws_chat'),
    get_string('apikeydesc', 'block_aws_chat'),
    '',
    PARAM_TEXT
));

$settings->add(new admin_setting_configpasswordunmask(
    'block_aws_chat/secret',
    get_string('secret', 'block_aws_chat'),
    get_string('secretdesc', 'block_aws_chat'),
    '',
    PARAM_TEXT
));

$settings->add(new admin_setting_configtextarea(
    'block_aws_chat/prompt',
    get_string('prompt', 'block_aws_chat'),
    get_string('promptdesc', 'block_aws_chat'),
    "Below is a conversation between a user and a support assistant for a Moodle site, where users go for online learning.",
    PARAM_TEXT
));
$settings->add(new admin_setting_configtextarea(
    'block_aws_chat/moodle_prompt',
    get_string('moodle_prompt', 'block_aws_chat'),
    get_string('moodle_promptdesc', 'block_aws_chat'),
    "Below is a conversation between a user and a support assistant for a Moodle site, where users go for online learning.",
    PARAM_TEXT
));

$settings->add(new admin_setting_configtext(
    'block_aws_chat/assistantname',
    get_string('assistantname', 'block_aws_chat'),
    get_string('assistantnamedesc', 'block_aws_chat'),
    'Assistant',
    PARAM_TEXT
));

$settings->add(new admin_setting_configtextarea(
    'block_aws_chat/welcome_message',
    get_string('res_set', 'block_aws_chat'),
    get_string('resdesc', 'block_aws_chat'),
    get_string('res2', 'block_aws_chat'),
    PARAM_TEXT
));

$settings->add(new admin_setting_configtextarea(
    'block_aws_chat/demo_question',
    get_string('demo_question', 'block_aws_chat'),
    get_string('demo_questiondesc', 'block_aws_chat'),
    get_string('prompt2', 'block_aws_chat'),
    PARAM_TEXT
));

$settings->add(new admin_setting_configselect(
    'block_aws_chat/region',
    get_string('region', 'block_aws_chat'),
    get_string('regiondesc', 'block_aws_chat'),
    'eu-central-1',
    [
        'eu-central-1' => 'eu-central-1',   //Frankfurt
        'eu-west-1' => 'eu-west-1',         //Ireland
        'eu-west-3' => 'eu-west-3',         //Paris
        'us-east-1' => 'us-east-1',         //N.Virginia
        'us-west-2' => 'us-west-2',         //Oregon
        'ap-northeast-1' => 'ap-northeast-1',//Tokyo
        'ap-southeast-1' => 'ap-southeast-1',//Singapore
        'ap-southeast-2' => 'ap-southeast-2'//Sydney
    ]
));

// Advanced Settings //

$settings->add(new admin_setting_heading(
    'block_aws_chat/advanced', 
    get_string('advanced', 'block_aws_chat'),
    get_string('advanceddesc', 'block_aws_chat'),
));

$settings->add(new admin_setting_configcheckbox(
    'block_aws_chat/allowinstancesettings',
    get_string('allowinstancesettings', 'block_aws_chat'),
    get_string('allowinstancesettingsdesc', 'block_aws_chat'),
    0
));


$settings->add(new admin_setting_configtext(
    'block_aws_chat/temperature',
    get_string('temperature', 'block_aws_chat'),
    get_string('temperaturedesc', 'block_aws_chat'),
    0.5,
    PARAM_FLOAT
));

$settings->add(new admin_setting_configtext(
    'block_aws_chat/maxlength',
    get_string('maxlength', 'block_aws_chat'),
    get_string('maxlengthdesc', 'block_aws_chat'),
    500,
    PARAM_INT
));
$settings->add(new admin_setting_configtext(
    'block_aws_chat/temperature_student',
    get_string('temperature_student', 'block_aws_chat'),
    get_string('temperature_studentdesc', 'block_aws_chat'),
    0.5,
    PARAM_FLOAT
));

$settings->add(new admin_setting_configtext(
    'block_aws_chat/maxlength_student',
    get_string('maxlength_student', 'block_aws_chat'),
    get_string('maxlength_studentdesc', 'block_aws_chat'),
    500,
    PARAM_INT
));
