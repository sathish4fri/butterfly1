<?php
/**
 * Page Layout
 *
 * Contains CSS for the page shell and page layout
 *
 * Default layout: 990px wide, centered. Used in default page shell
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>

/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
<?php // the width is on the page rather than topbar to handle small viewports ?>
.elgg-page-default {
	min-width: 998px;
}
.elgg-page-default .elgg-page-header > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	height: 90px;
}
.elgg-page-default .elgg-page-body > .elgg-inner {
	width: 990px;
	margin: 0 auto;
}
.elgg-page-default .elgg-page-footer > .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.elgg-page-topbar {
	background:  #1C7E96 ;
	border-bottom: 1px solid #1C7E96;
	position: relative;
	height: 24px;
	z-index: 9000;
	
}
.elgg-page-topbar > .elgg-inner {
	padding: 1px 20px;
}

/***** PAGE MESSAGES ******/
.elgg-system-messages {
	position: fixed;
	top: 24px;
	right: 20px;
	max-width: 500px;
	z-index: 2000;
}
.elgg-system-messages li {
	margin-top: 10px;
}
.elgg-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.elgg-page-header {
	position: relative;
background: -moz-linear-gradient(top, rgba(28,126,150,1) 0%, rgba(28,126,150,0.96) 12%, rgba(117,189,209,0.88) 40%, rgba(107,166,206,0.86) 47%, rgba(76,98,196,0.86) 68%, rgba(76,98,196,0.85) 89%, rgba(76,98,196,1) 100%);  url(<?php echo elgg_get_site_url(); ?>_graphics/header_shadow.png) repeat-x bottom left;
}
.elgg-page-header > .elgg-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.elgg-layout {
	min-height: 360px;
}
.elgg-layout-one-sidebar {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/sidebar_background.gif) repeat-y right top;
}
.elgg-layout-two-sidebar {
	background: transparent url(<?php echo elgg_get_site_url();  ?>/mod/butterfly/images/colbg.png) repeat-y left top; 
	}
.elgg-layout-error {
	margin-top: 20px;
}
.elgg-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
}
.elgg-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.elgg-main {
	position: relative;
	min-height: 360px;
	padding: 10px;
}
.elgg-main > .elgg-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #3d9db3;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.elgg-page-footer {
	position: relative;
}
.elgg-page-footer {
	color: #999;
}
.elgg-page-footer a:hover {
	color: #666;
}