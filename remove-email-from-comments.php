<?php
/**
 * Plugin Name: Remove Email from Comments
 * Plugin URI: http://programarivm.com
 * Description: Removes the email field from WordPress comment form
 * Version: 1.0
 * Author: Jordi Bassagañas Galisteo
 * Author URI: http://programarivm.com
 * License: GPLv2 or later
 */

/*   © Copyright 2014  Jordi Bassagañas Galisteo (info@programarivm.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/**
 * Unsets the email field from the comments form
 * @param array $fields
 * @return array
 */
function remove_email($fields)
{
    unset($fields['email']);
    return $fields;
}

/**
 * Unsets the email notice from the default messages
 * @param array $defaults
 * @return array
 */
function remove_email_message($defaults)
{
    $defaults['comment_notes_before'] = '';
    return $defaults;
}

add_filter('comment_form_default_fields', 'remove_email');
add_filter('comment_form_defaults', 'remove_email_message');
