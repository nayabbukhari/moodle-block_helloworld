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
 * global settings for admin of hello world block plugin
 * @package     block
 * @subpackage  helloworld
 * @copyright   2024 Syed
 * @author      Syed Nayab <nayab@nayab.au>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 defined('MOODLE_INTERNAL') || die();
 
 if ($ADMIN->fulltree) {
     // Add a header for the configuration settings.
     $settings->add(new admin_setting_heading(
         'block_helloworld_headerconfig',
         get_string('headerconfig', 'block_helloworld'),
         get_string('descconfig', 'block_helloworld')
     ));
 
     // Add a text setting field for the custom text.
     $settings->add(new admin_setting_configtext(
         'block_helloworld/customtext', 
         get_string('customtext', 'block_helloworld'), 
         get_string('customtext_desc', 'block_helloworld'), 
         '', 
         PARAM_TEXT
     ));
 
     // Add a text setting field for the block title.
     $settings->add(new admin_setting_configtext(
         'block_helloworld/title',
         get_string('labeltitle', 'block_helloworld'),
         get_string('desctitle', 'block_helloworld'),
         get_string('defaultblocktitle', 'block_helloworld'),
         PARAM_TEXT
     ));
 }
 ?> 