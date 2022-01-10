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
 * Empty Plugin for testing
 *
 * @package     local_emptyplugin
 * @author      Sumaiya Javed <info@sumaiyajaved.com>
 */

require_once(dirname(dirname(dirname(__FILE__))) . '/config.php');

require_login();

$context = context_system::instance();

$id = required_param('id', PARAM_INT);

$PAGE->set_url('/local/audience_enrolment/test.php', array('id' => $id));
$PAGE->set_context($context);
$PAGE->set_title('The test page');



$PAGE->set_heading('The test page');


echo $OUTPUT->header();
echo $OUTPUT->heading('The test page');

echo "Page content";
echo $OUTPUT->footer();
