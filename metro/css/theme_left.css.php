<?php

// unplanned execution path
if (!defined('PMA_MINIMUM_COMMON')) {
	exit();
}
?>

/* general tags */

/* fonts */

@font-face {
	font-family: 'IcoMoon';
	src: local('☺');
	src: url('./themes/metro/fonts/IcoMoon.eot');
	src: url('./themes/metro/fonts/IcoMoon.eot?#iefix') format('embedded-opentype'),
		url('../themes/metro/fonts/IcoMoon.svg#IcoMoon') format('svg'),
		url('./themes/metro/fonts/IcoMoon.woff') format('woff'),
		url('./themes/metro/fonts/IcoMoon.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans';
	src: local('☺');
	src: url('./themes/metro/fonts/opensans-regular-webfont.eot');
	src: url('./themes/metro/fonts/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-regular-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-regular-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Light';
	src: local('☺');
	src: url('./themes/metro/fonts/opensans-light-webfont.eot');
	src: url('./themes/metro/fonts/opensans-light-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-light-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-light-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Bold';
	src: local('☺');
	src: url('./themes/metro/fonts/opensans-bold-webfont.eot');
	src: url('./themes/metro/fonts/opensans-bold-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-bold-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-bold-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Semibold';
	src: local('☺');
	src: url('./themes/metro/fonts/opensans-semibold-webfont.eot');
	src: url('./themes/metro/fonts/opensans-semibold-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-semibold-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-semibold-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Extrabold';
	src: local('☺');
	src: url('./themes/metro/fonts/opensans-extrabold-webfont.eot');
	src: url('./themes/metro/fonts/opensans-extrabold-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-extrabold-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-extrabold-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

*:focus /* disable Chrome's and Safari's idiot form outline effect */
{
	outline: none;
}

html
{
	font-size: 90%;
}

input, select, textarea
{
	font-size: 1em;
}

body
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	border: none;
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	margin: 0;
	padding: 0;
}

select, #recentTable
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['NaviColor']; ?> !important;
	border: 1px solid #216475 !important;
}

input[type=text]
{
	border: 1px solid #ccc;
	background: none;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

a img
{
	border: 0;
}

a:link,
a:visited,
a:active
{
	text-decoration: none;
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

ul
{
	margin: 0;
}

form
{
	margin: 0;
	padding: 0;
	display: inline;
}

select#select_server,
select#lightm_db
{
	width: 100%;
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
button
{
	display: inline;
}

/* classes */

.navi_dbName
{
	color: <?php echo $GLOBALS['cfg']['NaviDatabaseNameColor']; ?>;
}

/* specific elements */

div#pmalogo:before
{
	content: 'phpMyAdmin';
	font-size: 2em;
	line-height: 120%;
}

#imgpmalogo
{
	display: none;
}

div#recentTableList
{
	text-align: center;
	margin: 20px 10px 0px 10px;
}

div#recentTableList select
{
	width: 100%;
}

div#pmalogo
{
	border-left: 5px solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	margin-top: 1em;
	padding-left: 10px;
}

div#leftframelinks,
div#databaseList
{
	text-align: center;
	margin: 10px;
}

div#leftframelinks
{
	padding-top: 1em;
	padding-bottom: 1em;
}

ul#databaseList
{
	margin: 1em 0px;
	padding: 0;
	padding-bottom: 0.5em;
}

ul#databaseList span
{
	padding: 5px;
}

ul#databaseList a
{
	display: block;
	text-indent: 0;
	padding: 5px 5px 5px 5px;
}

ul#databaseList a:before
{
	content: "T";
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
	font-family: 'IcoMoon';
	margin-right: 10px;
}

div#navidbpageselector
{
	margin: 0.1em;
	text-align: center;
}

div#navidbpageselector a,
div#navidbpageselector select
{
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
	margin: 0.2em;
}

ul#databaseList ul
{
	margin: 0;
	padding: 0;
}

ul#databaseList li
{
	list-style: none;
	text-indent: 20px;
	margin: 0;
	padding: 0;
	padding-left: 10px;
}

ul#databaseList a:hover,
ul#databaseList li:hover
{
	background-color: <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?>;
}

ul#databaseList li.selected a
{
	background: #eee;
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

div#leftframelinks .icon
{
	padding: 0;
	margin: 0;
}

div#reloadlink a img,
div#leftframelinks a img.icon
{
	margin: 0.3em;
	margin-top: 0.7em;
	border: 0;
}

div#leftframelinks a:hover img
{
}

/* serverlist */
#body_leftFrame #list_server
{
	list-style-image: url(<?php echo $GLOBALS['cfg']['ThemePath']; ?>/original/img/s_host.png);
	list-style-position: inside;
	list-style-type: none;
	margin: 0;
	padding: 0;
}

#body_leftFrame #list_server li
{
	margin: 0;
	padding: 0;
}

div#left_tableList
{
	margin: 1em 0;
}

div#left_tableList ul
{
	list-style-type: none;
	list-style-position: outside;
	margin: 0;
	padding: 0;
}

div#left_tableList ul ul
{
	font-size: 100%;
}

div#left_tableList a
{
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
	text-decoration: none;
}

div#left_tableList a:hover
{
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
	text-decoration: none;
}

div#left_tableList li
{
	margin: 0;
	padding-top: 5px;
	padding-bottom: 5px;
	white-space: nowrap;
}

#newtable
{
	margin: 10px !important;
}

#newtable li
{
	padding: 0px !important;
}

#newtable a
{
	display: block;
	padding: 5px;
	background-color: <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#newtable li a:before
{
	display: none;
}

#newtable li:hover
{
	background: none !important;
}

#newtable a:hover
{
	background-color: <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?> !important;
}

#newtable li a:hover
{
	text-decoration: none;
}

select
{
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
	padding: 3px;
}

<?php if (!empty($GLOBALS['cfg']['BrowseMarkerColor'])) { ?>
/* marked items */

div#left_tableList > ul li.marked > a,
div#left_tableList > ul li.marked
{
	background: #216475;
	color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
}
<?php } ?>

<?php if ($GLOBALS['cfg']['LeftPointerEnable']) { ?>
div#left_tableList > ul li:hover > a,
div#left_tableList > ul li:hover
{
	background-color: <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
}
<?php } ?>

div#left_tableList img
{
	padding: 0;
	vertical-align: middle;
}

div#left_tableList ul ul
{
	margin-<?php echo $left; ?>: 0;
	padding-<?php echo $left; ?>: 25px;
	border-<?php echo $left; ?>: 1px solid #ffffff;
	padding-bottom: 0.3em;
}

/* for the servers list in navi panel */
#serverinfo .item
{
	white-space: nowrap;
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#serverinfo a:hover
{
	background: <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#reloadlink
{
	clear: both;
	float: <?php echo $right; ?>;
	display: block;
	padding: 1em;
}

#NavFilter
{
	display: none;
	margin-left: 10px;
}

#clear_fast_filter
{
	cursor: pointer;
	padding: 0;
	margin: 0;
	position: relative;
	background: none;
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
}

#fast_filter
{
	width: 80%;
	padding: 0.4em;
}

#fast_filter.gray
{
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

li a .ic_b_browse
{
	display: none;
}

div#left_tableList li a:first-child:before
{
	color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
	font-family: 'IcoMoon';
	content: "";
	margin: 10px;
}

img.ic_b_home, img.ic_s_loggoff, img.ic_b_selboard, img.ic_b_docs, img.ic_b_sqlhelp, img.ic_s_reload
{
	display: none;
}

#leftframelinks a
{
	padding: 5px;
}

#leftframelinks a:first-child:before
{
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	font-family: 'IcoMoon';
	content: "!";
	margin-right: 5px;
}

#leftframelinks a:nth-child(2):before
{
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	font-family: 'IcoMoon';
	content: "\e040";
	margin-right: 5px;
}

#leftframelinks a:nth-child(3):before
{
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	font-family: 'IcoMoon';
	content: "T";
	margin-right: 5px;
}

#leftframelinks a:nth-child(4):before
{
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	font-family: 'IcoMoon';
	content: "";
	margin-right: 5px;
}

#leftframelinks a:nth-child(5):before
{
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	font-family: 'IcoMoon';
	content: "";
	margin-right: 5px;
}

#leftframelinks a:nth-child(6):before
{
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	font-family: 'IcoMoon';
	content: "";
	margin-right: 5px;
}
