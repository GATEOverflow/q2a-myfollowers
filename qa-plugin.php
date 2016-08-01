<?php
/*
	Question2Answer (c) Gideon Greenspan

	http://www.question2answer.org/
	
	File: qa-plugin/my-followers-widget/qa-plugin.php
	Version: See define()s at top of qa-include/qa-base.php
	Description: Initiates my followers widget plugin

	This program is free software; you can redistribute it and/or
	modify it under the terms of the GNU General Public License
	as published by the Free Software Foundation; either version 2
	of the License, or (at your option) any later version.
	
	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	More about this license: http://www.question2answer.org/license.php
*/

/*
	Plugin Name: My Followers Widget
	Plugin URI: 
	Plugin Description: Provides a list of my followers
	Plugin Version: 1.2.1
	Plugin Date: 2013-05-23
	Plugin Author: sama55@CMSBOX
	Plugin Author URI: http://www.cmsbox.jp/
	Plugin License: GPLv2
	Plugin Minimum Question2Answer Version: 1.5
	Plugin Update Check URI: 
*/

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

qa_register_plugin_phrases('qa-my-followers-widget-lang-*.php', 'myfollowerswidget');
qa_register_plugin_module('widget', 'qa-my-followers-widget.php', 'qa_my_followers_widget', 'My Followers Widget');
qa_register_plugin_layer('qa-my-followers-widget-layer.php', 'My Followers Widget');

/*
	Omit PHP closing tag to help avoid accidental output
*/