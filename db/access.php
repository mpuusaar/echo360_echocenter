<?php

// This file is part of the Echo360 Moodle Plugin - http://moodle.org/
//
// The Echo360 Moodle Plugin is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// The Echo360 Moodle Plugin is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with the Echo360 Moodle Plugin.  If not, see <http://www.gnu.org/licenses/>.
 
/**
 * This file defines the capabilities of the echo360_echocenter block
 *
 * @package    block
 * @subpackage echo360_echocenter
 * @copyright  2011 Echo360 Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later 
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(
        'block/echo360_echocenter:addinstance' => array(
                'riskbitmask'  => RISK_PERSONAL,
                'captype'      => 'read',
                'contextlevel' => CONTEXT_BLOCK,
                'archetypes'   => array(
//                	'user' => CAP_ALLOW,
                    'editingteacher' => CAP_ALLOW,
                    'manager' => CAP_ALLOW,
                ),
                'clonepermissionsfrom' => 'moodle/site:manageblocks'
        ),
        'block/echo360_echocenter:myaddinstance' => array(
                'riskbitmask'  => RISK_PERSONAL,
                'captype'      => 'read',
                'contextlevel' => CONTEXT_SYSTEM,
                'archetypes'   => array(
//                  'user' => CAP_ALLOW,
                    'editingteacher' => CAP_ALLOW,
                    'manager' => CAP_ALLOW,
                ),
                'clonepermissionsfrom' => 'moodle/my:manageblocks'
        ),
);
