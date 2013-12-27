<?php
/**
 * Elgg page header
 * (c) vikram chandran (v06)
 */

// link back to main site.
echo elgg_view('page/elements/header_logo', $vars);

// drop-down login
//echo elgg_view('core/account/login_dropdown');

// insert site-wide navigation
if (elgg_is_logged_in()) {
	echo elgg_view_menu('site');
}
