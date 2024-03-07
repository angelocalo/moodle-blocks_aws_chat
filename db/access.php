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
 * Define capabilities
 *
 * @package    block_aws_chat
 * @copyright 2024, Angelo Calò <angelo.calo@unipd.it>, Davide Ferro <davide.ferro@unipd.it>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(


    'block/aws_chat:addinstance' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
        'teacher'        => CAP_PROHIBIT,
        'editingteacher' => CAP_PROHIBIT,
        'manager'          => CAP_PROHIBIT,
        'coursecreator'          => CAP_PROHIBIT,
        ),
    ),
    'block/aws_chat:view' => array(
        'riskbitmask' => RISK_SPAM | RISK_XSS,
        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'admin' => CAP_ALLOW,
        'teacher'        => CAP_ALLOW,
        'editingteacher' => CAP_ALLOW,
        'manager'          => CAP_ALLOW,
        'coursecreator'  => CAP_ALLOW,
        'student'        => CAP_PROHIBIT,
        ),
    ),
);
