<?php

// unplanned execution path
if (!defined('PMA_MINIMUM_COMMON')) {
    exit();
}
?>

/* CSS Reset */

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video
{
	margin: 0;
	padding: 0;
	border: 0;
	font-family: 'Open Sans';
}

/* HTML5 display-role reset for older browsers */

article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section
{
	display: block;
}

body
{
	line-height: 1.5;
}

ol, ul
{
	list-style: none;
}

blockquote, q
{
	quotes: none;
}

blockquote:before, blockquote:after, q:before, q:after
{
	content: '';
	content: none;
}

table
{
	border-collapse: collapse;
	border-spacing: 0;
}

/* fonts */

@font-face {
	font-family: 'IcoMoon';
	src: local('☺');
	src: url('./themes/metro/fonts/IcoMoon.eot');
	src: url('./themes/metro/fonts/IcoMoon.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/IcoMoon.svg#IcoMoon') format('svg'),
		url('./themes/metro/fonts/IcoMoon.woff') format('woff'),
		url('./themes/metro/fonts/IcoMoon.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans';
	src: local('☺'), local('Open Sans'), local('OpenSans');
	src: url('./themes/metro/fonts/opensans-regular-webfont.eot');
	src: url('./themes/metro/fonts/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-regular-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-regular-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Light';
	src: local('☺'), local('Open Sans Light'), local('OpenSans-Light');
	src: url('./themes/metro/fonts/opensans-light-webfont.eot');
	src: url('./themes/metro/fonts/opensans-light-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-light-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-light-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Bold';
	src: local('☺'), local('Open Sans Bold'), local('OpenSans-Bold');
	src: url('./themes/metro/fonts/opensans-bold-webfont.eot');
	src: url('./themes/metro/fonts/opensans-bold-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-bold-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-bold-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Semibold';
	src: local('☺'), local('Open Sans Semibold'), local('OpenSans-Semibold');
	src: url('./themes/metro/fonts/opensans-semibold-webfont.eot');
	src: url('./themes/metro/fonts/opensans-semibold-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-semibold-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-semibold-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

@font-face {
	font-family: 'Open Sans Extrabold';
	src: local('☺'), local('Open Sans Extrabold'), local('OpenSans-Extrabold');
	src: url('./themes/metro/fonts/opensans-extrabold-webfont.eot');
	src: url('./themes/metro/fonts/opensans-extrabold-webfont.eot?#iefix') format('embedded-opentype'),
		url('./themes/metro/fonts/opensans-extrabold-webfont.woff') format('woff'),
		url('./themes/metro/fonts/opensans-extrabold-webfont.ttf') format('truetype');
	font-weight: normal;
	font-style: normal;
}

*:focus /* disable Chrome's and Safari's idiot input outline effect */
{
	outline: none;
}

/* general tags */

#li_select_fontsize
{
	display: none;
}

input, select, textarea
{
	font-size: 100%;
}

body
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	font-size: 11px;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border-left: 0.5em solid <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	margin: 0px;
	padding: 1em;
}

kbd
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
}

/* Override style formats by html tags */

font[color=red], span[style="color: #FF0000"]
{
	color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?> !important;
}

strong
{
	font-weight: normal;
}

#serverVariables
{
	width: 100%;
}

#result_query
{
	margin-top: 1em;
}

#create_table_form_minimal
{
	display: block;
}

#actions_panel table td
{
	vertical-align: middle;
}

#change_column_dialog fieldset.tblFooters
{
	border: none !important;
}

textarea, tt, pre, code
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
}

h1
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	font-weight: normal;
	font-size: 3em;
	color: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	margin: 0px;
	letter-spacing: -0.5px;
}

h2
{
	font-size: 3.6em;
	font-weight: normal;
	color: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	margin-top: 10px;
	margin-bottom: 0px;
	letter-spacing: -3px;
}

/* Hiding icons in the page titles */
h2 img {display:none;}
h2 a img {display:inline;}

#tablestatistics table tr, #tablestatistics table tr .odd, #tablestatistics table tr .even, #tablestatistics table th
{
	line-height: 1em;
	border-left: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

#tablesForm .data, #tablesForm .data_full_width
{
	width: 100%;
	margin-top: 1em;
	margin-bottom: 1em;
}

.data_full_width
{
	width: 100%;
}

#table_results, #tablestructure, #tableuserrights
{
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	margin-bottom: 1em;
}

h3
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	font-size: 2em;
	font-weight: normal;
}

a, a:link,
a:visited,
a:active
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	text-decoration: none;
	color: <?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>;
	cursor: pointer;
	outline: none;
}

#initials_table
{
	background: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	margin-bottom: 10px;
}

#initials_table td
{
	padding:8px !important;
}

#initials_table a
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	padding: 4px 8px;
}

dfn:hover
{
	cursor: help;
}

th
{
	font-weight: normal;
}

.data th
{
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

th, th a
{
	text-transform: uppercase;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?> !important;
}

.data th a:hover
{
	color: #999 !important;
}

a img
{
	border: 0;
}

hr
{
	color: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border: 0;
	height: 1px;
}

form
{
	padding: 0;
	margin: 0;
	display: inline;
}

input[type=text], input[type=password], textarea
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
    padding: 5px;
    margin: 6px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}

input[type=text]:focus, input[type=password]:focus, textarea:focus
{
	border: 1px solid <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

input[type=submit], input[type=reset], input[type=button]
{
	margin-left: 14px;
	border: 1px solid <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
	padding: 4px;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	text-decoration: none;
	background-color: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover
{
	position: relative;
	cursor:pointer;
	background-color: <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;

}

input[type=submit]:active, input[type=reset]:active, input[type=button]:active
{
	position: relative;
	background-color: #333;
	border: 1px solid #333;
}

.sqlbutton, #tablefieldinsertbuttoncontainer input[type=button]
{
	margin-top: 1em;
	margin-left: 0 !important;
	margin-right: 14px !important;
}

button
{
	margin-left: 14px;
	padding: 4px;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	text-decoration: none;
	background-color: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
}

textarea
{
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
}

textarea.char
{
	height: <?php echo ceil($GLOBALS['cfg']['CharTextareaRows'] * 1.2); ?>em;
}

fieldset
{
	margin-top: 1em;
	padding: 5px;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	padding: 1.5em;
	background-color: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

fieldset fieldset
{
	margin: 1em;
	margin-bottom: 0px;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border: none;
}

fieldset legend
{
	display: none;
}

fieldset table td
{
	vertical-align: middle;
	font-family: 'Open Sans Bold';
	text-transform: uppercase;
}

/* buttons in some browsers (eg. Konqueror) are block elements, this breaks design */
button
{
	display: inline;
}

#tbl_summary_row
{
	border-top: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

table caption,
table th,
table td
{
	padding: 0.6em;
	vertical-align: top;
}

table
{
	border-collapse: collapse;
}

th
{
	text-align:left;
}

img, button
{
	vertical-align: middle;
}

select
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	padding: 4px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	margin: 5px;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	max-width: 17em;
}

select:focus
{
	border: 1px solid <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

select[multiple]
{
}

select#listTable, #textSqlquery
{
	margin-bottom: 50px;
}

.autosubmit
{
	margin-top: 1em !important;
	margin-bottom: 1em !important;
}

/* classes */

.clearfloat
{
	clear: both;
}

.floatleft
{
	float: <?php echo $left; ?>;
	margin-<?php echo $right; ?>: 1em;
}

.paddingtop
{
	padding-top: 1em;
}

.separator
{
	color: white;
}

#result_query
{
	background: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

div.tools
{
	padding: 0.2em;
	text-align: <?php echo $right; ?>;
}

div.tools a
{
	color: <?php echo $GLOBALS['cfg']['BlueHeader']; ?> !important;
}

table tr.odd td:first-child input[type="checkbox"],
table tr.even td:first-child input[type="checkbox"]
{
	opacity: 0;
	filter: alpha(opacity=0);
	margin-top: -13px;
}

#tabledatabases td:first-child:before,
#tablestructure td:first-child:before,
#table_results td:not(.grid_edit):first-child:before,
#tableuserrights td:first-child:before,
#tableslistcontainer table.data td:first-child:before
{
	font-family: 'IcoMoon';
	content: "";
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	cursor: default;
}

#tabledatabases tr.marked td:first-child:before,
#tablestructure tr.marked td:first-child:before,
#table_results tr.marked td:first-child:before,
#tableuserrights tr.marked td:first-child:before,
#tableslistcontainer table.data tr.marked td:first-child:before
{
	font-family: 'IcoMoon';
	content: "";
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	cursor: default;
}

tr.noclick td:first-child:before
{
	content: "";
}

#tabledatabases td:first-child,
#tablestructure td:first-child,
#table_results td:first-child,
#tableuserrights td:first-child,
#tableslistcontainer table.data td:first-child
{
	width: 20px;
}

fieldset.tblFooters
{
	margin-top: -54px;
	border-top: 0;
	text-align: <?php echo $right; ?>;
	float: none;
	clear: both;
}

div.null_div {
    height: 20px;
    text-align: center;
    font-style:normal;
    min-width:50px;
}

fieldset .formelement
{
	float: <?php echo $left; ?>;
	margin-<?php echo $right; ?>: 0.5em;
	/* IE */
	white-space: nowrap;
	min-height: 45px;
	line-height: 45px;
}

/* revert for Gecko */
fieldset div[class=formelement]
{
	white-space: normal;
}

button.mult_submit
{
	border: none;
	background-color: transparent;
	color: <?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>;
	margin: 0px;
}

#tableslistcontainer, #tablestructure
{
	margin-top: 3em;
}

#tbl_summary_row th
{
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?> !important;
}

/* odd items 1,3,5,7,... */
table tr.odd th,
.odd
{
	background: <?php echo $GLOBALS['cfg']['BgTwo']; ?>;
	<?php echo $_SESSION['PMA_Theme']->getCssIEClearFilter(); ?>
	border-bottom: none;
}

/* even items 2,4,6,8,... */
/* (tested on CRTs and ACLs) */
table tr.even th,
.even
{
	background: <?php echo $GLOBALS['cfg']['BgOne']; ?>;
	<?php echo $_SESSION['PMA_Theme']->getCssIEClearFilter(); ?>
	border-bottom: none;
}

/* odd table rows 1,3,5,7,... */
table tr.odd th,
table tr.odd,
table tr.even th,
table tr.even
{
	text-align: <?php echo $left; ?>;
	border-bottom: 1px solid #eee;
}

table tr.odd, table tr.even
{
	border-left: 3px solid transparent;
}

<?php if ($GLOBALS['cfg']['BrowseMarkerEnable']) { ?>
/* marked table rows */
td.marked,
table tr.marked td,
table tr.marked th,
table tr.marked
{
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

table tr.marked
{
	border-left: 3px solid #24A0DA;
}
<?php } ?>

<?php if ($GLOBALS['cfg']['BrowsePointerEnable']) { ?>
/* hovered items */
.odd:hover,
.even:hover,
.hover,
.structure_actions_dropdown
{
	background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

.structure_actions_dropdown .icon
{
	vertical-align: middle !important;
}

/* hovered table rows */
table tr.odd:hover th,
table tr.even:hover th,
table tr.hover th
{
	background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['ThPointerColor']; ?>;
}
<?php } ?>

/* marks table rows/cells if the db field is in a where condition */

.condition
{
	border-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?> !important;
}

th.condition, th.condition a
{
	border: 1px solid;
	background: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
	color: <?php echo $GLOBALS['cfg']['MainBackground']; ?> !important;
}

td.condition
{
	border: 1px solid;
}

<?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
/* for first th which must have right border set (ltr only) */

<?php } ?>

/* cells with the value NULL */

td.null
{
	font-style: italic;
	text-align: <?php echo $right; ?>;
}

table .valueHeader
{
	text-align: <?php echo $right; ?>;
	white-space: normal;
}

table .value
{
	text-align: <?php echo $right; ?>;
	white-space: normal;
}

/* f*cking IE doesnt handles 'pre' right */

table [class=value]
{
	white-space: normal;
}

.value
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
}

.attention
{
	color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

.allfine
{
	color: <?php echo $GLOBALS['cfg']['BrowseSuccessColor']; ?>;
}

img.lightbulb
{
	cursor: pointer;
}

.pdflayout
{
	overflow: hidden;
	clip: inherit;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	display: none;
	border: 1px solid #000000;
	position: relative;
}

.pdflayout_table
{
	background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
	color: #000000;
	overflow: hidden;
	clip: inherit;
	z-index: 2;
	display: inline;
	visibility: inherit;
	cursor: move;
	position: absolute;
	font-size: 80%;
	border: 1px dashed #000000;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

/* MySQL Parser */
.syntax, .syntax span
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
}

.syntax a
{
	text-decoration: none;
	border-bottom: 1px dotted #999999;
}

.syntax_comment
{
	padding-left: 4pt;
	padding-right: 4pt;
}

.syntax_digit {
}

.syntax_digit_hex {
}

.syntax_digit_integer {
}

.syntax_digit_float {
}

.syntax_punct {
}

.syntax_alpha {
}

.syntax_alpha_columnType {
    text-transform:     uppercase;
}

.syntax_alpha_columnAttrib {
    text-transform:     uppercase;
}

.syntax_alpha_reservedWord {
    text-transform:     uppercase;
}

.syntax_alpha_functionName {
    text-transform:     uppercase;
}

.syntax_alpha_identifier {
}

.syntax_alpha_charset {
}

.syntax_alpha_variable {
}

.syntax_quote {
    white-space:        pre;
}

.syntax_quote_backtick {
}

/* leave some space between icons and text */
img.footnotemarker
{
	display: none;
}

/* no extra space in table cells */
td .icon
{
	margin: 0;
}

.selectallarrow
{
	margin-<?php echo $right; ?>: 0.3em;
	margin-<?php echo $left; ?>: 0.6em;
}

/* message boxes: error, confirmation */

.success h1,
.notice h1,
div.error h1
{
	text-align: <?php echo $left; ?>;
	margin: 0 0 0.2em 0;
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

div.success,
div.notice,
div.error,
div.footnotes
{
	margin: 0.5em 0 1.3em 0;
	border: 1px solid;
	<?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
	background-repeat: no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
	background-position: 10px 50%;
	padding: 10px 10px 10px 25px;
	<?php } else { ?>
	background-position: 99% 50%;
	padding: 25px 10px 10px 10px
	<?php } ?>
	<?php } else { ?>
	padding: 0.3em;
	<?php } ?>
}

div.success
{
	margin: 0 0 1em 0;
	border: none;
}

.success a, .notice a, .error a, .footnotes a
{
	text-decoration: underline;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
}

.success
{
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['BrowseSuccessColor']; ?>;
}

h1.success, div.success
{
	border-color: <?php echo $GLOBALS['cfg']['BrowseSuccessColor']; ?>;
	<?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
	background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_success.png);
	background-repeat: no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
	background-position: 5px 50%;
	<?php } else { ?>
	background-position: 97% 50%;
	<?php } ?>
	<?php } ?>
}

.notice, .footnotes
{
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['BlueHeader']; ?>;
}

h1.notice,
div.notice,
div.footnotes
{
	border-color: <?php echo $GLOBALS['cfg']['BlueHeader']; ?>;
	<?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
	background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_notice.png);
	background-repeat: no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
	background-position: 5px 50%;
	<?php } else { ?>
    background-position: 97% 50%;
	<?php } ?>
	<?php } ?>
}

.notice a
{
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
}

.error
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?> !important;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

h1.error,
div.error
{
	border-color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
	<?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
	background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_error.png);
	background-repeat:  no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
	background-position: 5px 50%;
	<?php } else { ?>
	background-position: 97% 50%;
	<?php } ?>
	<?php } ?>
}

.confirmation
{
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

.confirmation tt
{
	color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

/* end messageboxes */

.tblcomment
{
	font-size: 70%;
	font-weight: normal;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

.tblHeaders
{
	color: <?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>;
	text-transform: uppercase;
}

.tblFooters
{
	font-weight: normal;
}

/* forbidden, no privilegs */

.noPrivileges
{
	color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

/* disabled text */
.disabled,
.disabled a:link,
.disabled a:active,
.disabled a:visited
{
	color: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
}

.disabled a:hover
{
	color: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
	text-decoration: none;
}

tr.disabled td,
td.disabled
{
	background-color: <?php echo $GLOBALS['cfg']['ThDisabledBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

.nowrap
{
	white-space: nowrap;
}

/* zoom search */

div#resizer
{
	width: 600px;
	height: 400px;
}

div#querychart
{
	float: left;
	width: 600px;
}

/* login form */

body.loginform
{
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
	background: <?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>;
	border: none;
	text-align: center;
	overflow: hidden;
}

body.loginform div.container
{
	text-align: <?php echo $left; ?>;
	width: 50em;
	margin-left: auto;
	margin-right: auto;
	margin-top: 5%;
}

body.loginform div.container:before
{
	font-family: 'IcoMoon';
	font-size: 21em;
	color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	content: "a";
	float: left;
	margin-right: 20px;
	margin-top: 0px;
	background-color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	overflow: hidden;
	height: 230px;
	width: 230px;
	line-height: 1;

}

body.loginform h1
{
	display: block;
	text-align: left;
	color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	font-size: 2.5em;
	padding-top: 0px;
	margin-right: -50%;
}

body.loginform a.logo
{
	display: none;
}

body.loginform input.textfield
{
	width: 275px;
	border: 1px solid #ffffff;
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

body.loginform input[type=submit]
{
	background: transparent;
	background-image: url('./themes/metro/img/b_login_on.png');
	background-position: center center;
	border: none;
	font-size: 0px;
	height: 40px;
	width: 40px;
	border-radius: 40px;
	color: transparent;
	border: 1px solid #ffffff;
}

body.loginform select
{
	margin: 0px !important;
	height: 32px;
	border: none;
	background: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	padding-left: 0px !important;
	border: 1px solid <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>
}

body.loginform select:hover
{
	border: 1px solid <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}

br
{
	display: none;
}

body.loginform fieldset
{
	border: none;
	color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	padding: 0px;
	margin-top: 10px;
	margin-bottom: 1.5em;
	background: none;
}

body.loginform fieldset:first-child
{
	margin-bottom: 0px;
	border-bottom: none;
	margin: 0px;
}

body.loginform fieldset.tblFooters
{
	border: none;
	padding: 6px;
	margin: 0px;
	clear: none;
}

body.loginform .error
{
	float: left;
	width: 47em;
}

form.login label
{
	display: none
}

.commented_column {
    border-bottom: 1px dashed black;
}

.column_attribute {
    font-size: 70%;
}

/* specific elements */

/* topmenu */
#topmenu a
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	font-size: 1.5em;
}

#topmenu .error
{
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border: 0 !important;
	color: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

ul#topmenu, ul#topmenu2, ul.tabs
{
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.tab
{
	border-left: 1px solid #fff;
	border-top: 1px solid #fff;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

ul#topmenu2 {
    margin: 1em;
    height: 2em;
    clear: both;
}

ul#topmenu li
{
	float: <?php echo $left; ?>;
	margin: 0;
	vertical-align: middle;
}

ul#topmenu2 li
{
	float: <?php echo $left; ?>;
	margin: 0;
	vertical-align: middle;
	color: #999999;
}

ul#topmenu2 li:nth-child(3):before
{
	float: left;
	content: "p";
	font-family: 'IcoMoon';
	margin-top: 13px;
	margin-right: 5px;
}

ul#topmenu2 li:nth-child(4):before
{
	float: left;
	content: "";
	font-family: 'IcoMoon';
	margin-top: 13px;
	margin-right: 5px;
}

ul#topmenu2 li:nth-child(5):before
{
	float: left;
	content: "";
	font-family: 'IcoMoon';
	margin-top: 13px;
	margin-right: 5px;
}

ul#topmenu2 li:nth-child(6):before
{
	float: left;
	content: "8";
	font-family: 'IcoMoon';
	margin-top: 13px;
	margin-right: 5px;
}

ul#topmenu2 li:nth-child(7):before
{
	float: left;
	content: "S";
	font-family: 'IcoMoon';
	margin-top: 13px;
	margin-right: 5px;
}

ul#topmenu2 li:nth-child(8):before
{
	float: left;
	content: "R";
	font-family: 'IcoMoon';
	margin-top: 13px;
	margin-right: 5px;
}

#topmenu img, #topmenu2 img
{
	margin-right: 0.5em;
	vertical-align: middle;
}

.menucontainer
{
	margin-right: 0.6em;
	margin-top: 1em;
	margin-bottom: 0;
	margin-left: 0.5em;
	height: 48px;
}

/* default tab styles */
ul#topmenu .tabactive
{
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?> !important;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-bottom: 1px solid #fff !important;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

ul#topmenu a, ul#topmenu span
{
	display: block;
	margin: 0;
	padding: 0;
	white-space: nowrap;
	height: 27px;
}

ul#topmenu ul a
{
	margin: 0px;
}

ul#topmenu .submenu
{
    display: none;
    position: relative;
}

ul#topmenu .shown
{
	display: inline-block;
}

ul#topmenu ul
{
	margin: 0;
	padding: 0;
	position: absolute;
	list-style-type: none;
	display: none;
	z-index: 2;
	border-right: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-left: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-top: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	margin: -1px;
}

ul#topmenu ul li .tab
{
	border: none;
}

ul#topmenu ul.only {
    left: 0;
}

ul#topmenu ul.notonly {
    right: 0;
}

ul#topmenu li:hover ul, ul#topmenu .submenuhover ul
{
	display: block;
}

ul#topmenu ul li
{
	width: 100%;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

ul#topmenu ul li:hover
{
	background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
}

ul#topmenu2 a
{
	display: block;
	margin: 7px 15px 7px 0;
	padding: 4px 10px;
	white-space: nowrap;
	font-family: 'Open Sans Bold';
	text-transform: uppercase;
	color: #999999;
	border: 0px solid #fff;
}

ul#topmenu2 a img
{
	display: none;
}

/* disabled tabs */
ul#topmenu span.tab {
    color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

fieldset.caution
{
	background: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

fieldset.caution ul, #tbl_maintenance
{
	padding: 0px;
}

fieldset.caution li, #tbl_maintenance li
{
	display: block;
}

fieldset.caution li:before
{
	font-family: 'IcoMoon';
	content: "";
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	margin-right: 10px;
}

fieldset.caution li a:nth-child(2) img
{
	background: url('./themes/metro/img/s_info.png') !important;
}

fieldset.caution a
{
	font-family: 'Open Sans Bold';
	text-transform: uppercase;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
}

#tbl_maintenance li a
{
	font-family: 'Open Sans Bold';
	text-transform: uppercase;
}

#tbl_maintenance li:before
{
	font-family: 'IcoMoon';
	content: "%";
	margin-right: 10px;
}

<?php if ($GLOBALS['cfg']['LightTabs']) { ?>
/* active tab */

ul#topmenu a.tabactive, ul#topmenu2 a.tabactive
{
	color: 999;
}

<?php } else { ?>
#topmenu
{
	margin-top: 0.5em;
	padding: 0.1em 0.3em 0.1em 0.3em;
	height: 48px;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

/* default tab styles */
ul#topmenu a, ul#topmenu span {
    padding: 10px;
}

/* enabled hover/active tabs */
ul#topmenu > li > a:hover,
ul#topmenu > li > .tabactive
{
	text-decoration: none;
}

ul#topmenu ul a:hover,
ul#topmenu ul .tabactive
{
	text-decoration: none;
	border: none;
}

ul#topmenu a.tab:hover,
ul#topmenu .tabactive
{
}

ul#topmenu2 a.tab:hover,
ul#topmenu2 a.tabactive
{
	text-decoration: none;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

ul#topmenu > li.active
{
}

/* disabled tabs */

ul#topmenu span.tab,
a.error
{
	cursor: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>error.ico), default;
	color: <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
}
<?php } ?>
/* end topmenu */

/* zoom search */
div#dataDisplay input, div#dataDisplay select
{
	margin: 0;
	margin-<?php echo $right; ?>: 0.5em;
}

div#dataDisplay th
{
	line-height: 2em;
}

/* Calendar */
table.calendar {
    width:              100%;
}
table.calendar td {
    text-align:         center;
}
table.calendar td a {
    display:            block;
}

table.calendar td a:hover {
    background-color:   #CCFFCC;
}

table.calendar th {
    background-color:   #D3DCE3;
}

table.calendar td.selected {
    background-color:   #FFCC99;
}

img.calendar {
    border:             none;
}
form.clock {
    text-align:         center;
}
/* end Calendar */


/* table stats */
div#tablestatistics table
{
	float: <?php echo $left; ?>;
	margin-bottom: 0.5em;
	margin-<?php echo $right; ?>: 1.5em;
	margin-top: 0.5em;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	width: 48%;
}

/* END table stats */

/* server privileges */
#tableuserrights td,
#tablespecificuserrights td,
#tabledatabases td
{
	vertical-align: middle;
}

#tabledatabases th
{
	white-space: nowrap;
}

#tabledatabases td.name
{
	width: 100%;
}

#tabledatabases tr#db_summary_row th
{
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?> !important;
	border-top: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

/* END server privileges */


/* Heading */

#index_div #topmenucontainer
{
	font-size: 70%;
}

#floating_menubar
{
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	margin-left: 1em;
	right: 1em;
}

#topmenucontainer
{
	margin-right: 1em;
	padding-right: 1em;
}

#serverinfo
{
	padding: 12px;
	overflow: hidden;
	margin: 0em;
	margin-left: -1em;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	background: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	font-height: 1.1em;
	height: 15px;
}

#serverinfo .item
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	white-space: nowrap;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	float: <?php echo $left; ?>;
}

#serverinfo .item:before
{
	padding-left: 5px;
	padding-right: 5px;
	font-family: "IcoMoon";
	font-size: 10px;
	color: #eee;
	content: "";
}

#serverinfo a:first-child
{
	display: none !important;
}

#serverinfo .separator,
#serverinfo .icon
{
	display: none;
}

#span_table_comment
{
	font-weight: normal;
	font-style: italic;
	white-space: nowrap;
}

.ic_b_tblanalyse
{
	margin-left: 10px !important;
}

.success .ic_b_help
{
	background: url('./themes/metro/img/s_info.png') !important;
}

#textSQLDUMP {
	width: 95%;
	height: 95%;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	font-size: 110%;
}

#TooltipContainer
{
	position: absolute;
    z-index: 99;
    width: 20em;
    height: auto;
    overflow: visible;
    visibility: hidden;
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: #006600;
    border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
    padding: 0.5em;
}

/* user privileges */
#fieldset_add_user_login div.item
{
	border-bottom: 1px solid silver;
	padding-bottom: 0.3em;
	margin-bottom: 0.3em;
}

#fieldset_add_user_login label
{
	float: <?php echo $left; ?>;
	display: block;
	width: 10em;
	max-width: 100%;
	text-align: <?php echo $right; ?>;
	padding-<?php echo $right; ?>: 0.5em;
	height: 40px;
	line-height: 40px;
}

#fieldset_add_user_login span.options #select_pred_username,
#fieldset_add_user_login span.options #select_pred_hostname,
#fieldset_add_user_login span.options #select_pred_password
{
	width: 100%;
	max-width: 100%;
}

#fieldset_add_user_login span.options {
    float: <?php echo $left; ?>;
    display: block;
    width: 12em;
    max-width: 100%;
    padding-<?php echo $right; ?>: 0.5em;
}

#fieldset_add_user_login input {
    width: 12em;
    clear: <?php echo $right; ?>;
    max-width: 100%;
}

#fieldset_add_user_login span.options input {
    width: auto;
}

#fieldset_user_priv div.item {
    float: <?php echo $left; ?>;
    width: 9em;
    max-width: 100%;
}

#fieldset_user_priv div.item div.item {
    float: none;
}

#fieldset_user_priv div.item label {
    white-space: nowrap;
}

#fieldset_user_priv div.item select {
    width: 100%;
}

#fieldset_user_global_rights fieldset {
    float: <?php echo $left; ?>;
}
/* END user privileges */


/* serverstatus */

.linkElem:hover
{
	text-decoration: none;
	cursor: pointer;
}

h3#serverstatusqueries span {
    font-size:60%;
    display:inline;
}

img.sortableIcon {
    float:right;
    background-repeat:no-repeat;
    margin:0;
}

.buttonlinks {
    float: <?php echo $right; ?>;
    white-space: nowrap;
}

.jsfeature {
    display: none; /* Made visible with js */
}

/* Also used for the variables page */
fieldset#tableFilter
{

}

div#serverStatusTabs
{
	margin-top: 1em;
}

caption a.top {
    float: <?php echo $right; ?>;
}

div#serverstatusquerieschart {
    float:<?php echo $left; ?>;
    width:500px;
    height:350px;
    padding-<?php echo $left; ?>: 30px;
}

table#serverstatusqueriesdetails, table#serverstatustraffic {
    float: <?php echo $left; ?>;
}

table#serverstatusqueriesdetails th {
    min-width: 35px;
}

table#serverstatusvariables
{
	width: 100%;
	margin-bottom: 1em;
}

table#serverstatusvariables .name
{
	width: 18em;
	white-space:nowrap;
}
table#serverstatusvariables .value {
    width: 6em;
}
table#serverstatusconnections
{
	float: <?php echo $left; ?>;
}

div#serverstatus table tbody td.descr a,
div#serverstatus table .tblFooters a {
    white-space: nowrap;
}

div.liveChart {
    clear:both;
    min-width:500px;
    height:400px;
    padding-bottom:80px;
}

#addChartDialog input[type="text"] {
    margin: 0;
    padding: 3px;
}

div#chartVariableSettings
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	background-color: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
	margin-left: 10px;
	padding: 10px;
}

table#chartGrid div.monitorChart
{
	background: #EBEBEB;
}

div#serverstatus div.tabLinks
{
	float:<?php echo $left; ?>;
	padding-bottom: 10px;
}

.popupContent
{
	display: none;
	position: absolute;
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
	margin:0;
	padding:3px;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	z-index: 2;
}

div#logTable {
    padding-top: 10px;
    clear: both;
}

div#logTable table {
    width:100%;
}

div#queryAnalyzerDialog {
    min-width: 700px;
}

div#queryAnalyzerDialog div.CodeMirror-scroll {
    height:auto;
}

div#queryAnalyzerDialog div#queryProfiling {
    height: 250px;
}

div#queryAnalyzerDialog td.explain {
    width: 250px;
}

div#queryAnalyzerDialog table.queryNums {
    display: none;
    border:0;
    text-align:left;
}

.smallIndent {
    padding-left: 7px;
}


/* end serverstatus */

/* server variables */

a.editLink {
    float: <?php echo $left; ?>;
	font-family: 'Open Sans Bold';
	text-transform: uppercase;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

a.saveLink, a.cancelLink
{
	font-family: 'Open Sans Bold';
	text-transform: uppercase;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
}

table.serverVariableEditTable {
    border:0;
    margin:0;
    padding:0;
    width:100%;
}
table.serverVariableEditTable td {
    border:0;
    margin:0;
    padding:0;
}
table.serverVariableEditTable td:first-child {
    white-space:nowrap;
    vertical-align:middle;
}

table.serverVariableEditTable input {
    width:95%;
}

table#serverVariables td {
    height:18px;
}

/* end server variables */


p.notice
{
	margin: 1.5em 0;
	<?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
	background-repeat:  no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
	background-position: 10px 50%;
	padding: 10px 10px 10px 25px;
	<?php } else { ?>
	background-position: 99% 50%;
	padding: 25px 10px 10px 10px;
	<?php } ?>
	<?php } else { ?>
	padding: 0.3em;
	<?php } ?>
}

p.notice a {
    color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
    text-decoration:underline;
}

/* querywindow */

body#bodyquerywindow
{
	margin: 0;
	padding: 10px;
	background-image: none;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border: none;
}

body#bodyquerywindow #topmenucontainer, body#bodyquerywindow .menucontainer
{
	margin: 0px;
	padding: 0px;
}

div#querywindowcontainer
{
	padding: 0;
	width: 100%;
}

/* END querywindow */

/* profiling */

div#profilingchart {
    width:550px;
    height:370px;
    float:left;
}

/* END profiling */

/* table charting */

#resizer {
    border: 1px solid silver;
}
#inner-resizer { /* make room for the resize handle */
    padding: 10px;
}

/* END table charting */

/* querybox */

#queryboxfooter, #sqlqueryform fieldset.tblFooters
{
	margin-top: -30px;
}

#togglequerybox
{
	margin:0 10px
}

#serverstatus h3
{
    margin: 15px 0;
    font-weight:normal;
    color:#999;
    font-size:1.7em;
}
#sectionlinks
{
	padding:16px;
	background: <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
}

#sectionlinks a, .buttonlinks a, a.button
{
	line-height:35px;
	margin-left:7px;
	border: 1px solid <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
	padding: 5px 10px;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?> !important;
	text-decoration: none;
	background: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
	white-space: nowrap;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

#sectionlinks a:hover, .buttonlinks a:hover, a.button:hover
{
	background-color: <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
}

#sectionlinks a:active, .buttonlinks a:active, a.button:active
{
	background-color: <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;
}

div#sqlquerycontainer {
    float: <?php echo $left; ?>;
    width: 69%;
    /* height: 15em; */
}

div#tablefieldscontainer {
    float: <?php echo $right; ?>;
    width: 29%;
    /* height: 15em; */
}

div#tablefieldscontainer select
{
	width: 100%;
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	/* height: 12em; */
}

textarea#sqlquery
{
	width: 100%;
	/* height: 100%; */
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	padding: 5px;
	font-family: inherit;
}
textarea#sql_query_edit{
    height:7em;
    width: 95%;
    display:block;
}
div#queryboxcontainer div#bookmarkoptions {
    margin-top: 0.5em;
}
/* end querybox */

/* main page */

#mysqlmaininformation,
#pmamaininformation {
    float: <?php echo $left; ?>;
    width: 49%;
}

#maincontainer ul {
    list-style-type: square;
    vertical-align: middle;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	margin-left: 20px;
}

#maincontainer ul li {
}

/* END main page */


<?php if ($GLOBALS['cfg']['MainPageIconic']) { ?>
/* iconic view for ul items */

li#li_mysql_client_version
{
	overflow: hidden;
	text-overflow: ellipsis;
}

li#li_create_database
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_newdb.png); */
	background-color: #f6f6f6;
	padding: 10px;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	display: block;
}

li#li_select_lang select
{
	margin: 0px !important;
	height: 35px;
}

li#li_select_lang
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_lang.png); */
	display: block;
	padding: 10px;
	padding-left: 20px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
}

li#li_select_lang:hover
{
	background: #f6f6f6;
}

li#li_select_lang:before
{
	content: "";
	font-family: "IcoMoon";
	color: #999;
	margin-right: 10px;
	text-transform: none;
	border: 2px solid #999;
	border-radius: 15px;
	padding: 4px;
}

li#li_select_mysql_collation select
{
	margin: 0px !important;
}

li#li_select_mysql_collation
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_asci.png); */
	display: block;
	padding: 10px;
	padding-left: 20px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
}

li#li_select_mysql_collation:hover
{
	background: #f6f6f6;
}

li#li_select_mysql_collation:before
{
	content: "";
	font-family: "IcoMoon";
	color: #999;
	margin-right: 10px;
	text-transform: none;
	border: 2px solid #999;
	border-radius: 15px;
	padding: 4px;
}

li#li_select_theme select
{
	margin: 0px !important;
}

li#li_select_theme
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_theme.png); */
	display: block;
	padding: 10px;
	padding-left: 20px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
}

li#li_select_theme:hover
{
	background: #f6f6f6;
}

li#li_select_theme:before
{
	content: "";
	font-family: "IcoMoon";
	color: #999;
	margin-right: 10px;
	text-transform: none;
	border: 2px solid #999;
	border-radius: 15px;
	padding: 4px;
}

li#li_user_info{
    /* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_rights.png); */
}

li#li_mysql_status
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_status.png);
}

li#li_mysql_variables
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_vars.png);
}

li#li_mysql_processes
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_process.png);
}

li#li_mysql_collations
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_asci.png);
}

li#li_mysql_engines
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_engine.png);
}

li#li_mysql_binlogs
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_tbl.png);
}

li#li_mysql_databases
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_db.png);
}

li#li_export
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_export.png);
}

li#li_import
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_import.png);
}

li#li_change_password
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_passwd.png); */
	display: block;
	padding: 10px;
	padding-left: 20px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
}

li#li_change_password:hover
{
	background: #f6f6f6;
}

li#li_change_password:before
{
	content: "j";
	font-family: "IcoMoon";
	color: #999;
	margin-right: 10px;
	text-transform: none;
	border: 2px solid #999;
	border-radius: 15px;
	padding: 4px;
}

li#li_log_out
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_loggoff.png);
}

li#li_mysql_privilegs
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_rights.png);
}

li#li_switch_dbstats
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_dbstatistics.png); */
	background-color: #f6f6f6;
	padding: 10px;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	display: block;
}

li#li_flush_privileges
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_reload.png);
}

li#li_user_preferences
{
	/* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_tblops.png); */
	display: block;
	padding: 10px;
	padding-left: 20px;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
}

li#li_user_preferences:hover
{
	background: #f6f6f6;
}

li#li_user_preferences:before
{
	content: "p";
	font-family: "IcoMoon";
	color: #999;
	margin-right: 10px;
	text-transform: none;
	border: 2px solid #999;
	border-radius: 15px;
	padding: 4px;
}

/* END iconic view for ul items */
<?php } /* end if $GLOBALS['cfg']['MainPageIconic'] */ ?>


#body_browse_foreigners
{
	background: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
	margin: 0.5em 0.5em 0 0.5em;
}

#bodyquerywindow
{
	background: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

#bodythemes
{
	width: 500px;
	margin: auto;
	text-align: center;
}

#bodythemes img {
    border: 0.1em solid black;
}

#bodythemes a:hover img {
    border: 0.1em solid red;
}

#fieldset_select_fields {
    float: <?php echo $left; ?>;
}

#selflink
{
	clear: both;
	display: block;
	margin-top: 1em;
	margin-bottom: 1em;
	margin-right: 1em;
	text-align: <?php echo $right; ?>;
}

#table_innodb_bufferpool_usage,
#table_innodb_bufferpool_activity {
    float: <?php echo $left; ?>;
}

#div_mysql_charset_collations table {
    float: <?php echo $left; ?>;
}

.operations_half_width
{
	width: 100%;
	float: <?php echo $left; ?>;
}

.operations_full_width
{
	width: 100%;
	clear: both;
}

#qbe_div_table_list {
    float: <?php echo $left; ?>;
}

#qbe_div_sql_query {
    float: <?php echo $left; ?>;
}

label.desc {
    width: 30em;
    float: <?php echo $left; ?>;
}

label.desc sup {
    position: absolute;
}

code.sql, div.sqlvalidate
{
	display: block;
	padding: 1em;
	margin: 1em;
	max-height: 10em;
	overflow: auto;
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

#main_pane_left
{
	width: 60%;
	float: <?php echo $left; ?>;
	padding-top: 1em;
}

#main_pane_right
{
	margin-<?php echo $left; ?>: 60%;
	padding-top: 1em;
	padding-<?php echo $left; ?>: 3em;
}

.group
{
	margin-bottom: 1em;
	padding-bottom: 1em;
}

.group input[type=submit]
{
	margin-left: 0px;
}

.group h2
{
	color: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
	font-size: 2.8em;
	font-weight: normal;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	margin-top: 0px;
	margin-bottom: 0.6em;
	letter-spacing: -1px;
}

.group-cnt {
    padding: 0 0 0 0.5em;
    display: inline-block;
    width: 98%;
}

textarea#partitiondefinition {
    height:3em;
}

/* for elements that should be revealed only via js */
.hide {
    display:            none;
}

#li_select_server
{
	list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_host.png);
}

#list_server {
    list-style-image: none;
}

/* Progress bar styles */
div.upload_progress_bar_outer
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	width: 202px;
}

div.upload_progress_bar_inner
{
	background-color: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	width: 0;
	height: 12px;
	margin: 1px;
}

table#serverconnection_src_remote,
table#serverconnection_trg_remote,
table#serverconnection_src_local,
table#serverconnection_trg_local
{
	float:left;
	max-width: 25%;
}

/*  Validation error message styles */
input[type=text].invalid_value,
.invalid_value
{
	background: #FFCCCC;
}

/*  Ajax notification styling */
.ajax_notification
{
	top: 0;
	position: fixed;
	width: 100%;
	z-index: 1100;
	text-align: center;
	display: inline;
	left: 0;
	right: 0;
	background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif);
	background-repeat: no-repeat;
	background-position: 2%;
	padding: 0px;
	margin: 0px;
	background: #2D89F0;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
}

.ajax_notification .success, .ajax_notification .error
{
	background: none;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	border: none !important;
	margin: 0px !important;
	padding: 10px !important;
}


#loading_parent {
    /** Need this parent to properly center the notification division */
    position: relative;
    width: 100%;
 }
/* Export and Import styles */

.exportoptions h3, .importoptions h3
{
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	font-family: 'Open Sans Bold';
	font-size: 1em;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	text-transform: uppercase;
	padding-bottom: 3px;
}

.exportoptions ul, .importoptions ul, .format_specific_options ul {
    list-style-type: none;
    margin-bottom: 15px;
}

.exportoptions li, .importoptions li {
    margin: 7px;
}
.exportoptions label, .importoptions label, .exportoptions p, .importoptions p {
    margin: 5px;
    float: none;
}

#csv_options label.desc, #ldi_options label.desc, #latex_options label.desc, #output label.desc{
    float: left;
    width: 15em;
}

.exportoptions, .importoptions
{
	margin: 20px 20px 30px 10px
}

#buttonGo:hover
{
	background-color: <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;
}

#buttonGo:active
{
	background-color: #333;
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	border: 1px solid #333;
}

.format_specific_options h3 {
    margin: 10px 0 0 10px;
    border: 0;
}

.format_specific_options {
    border: 1px solid #999999;
    margin: 7px 0;
    padding: 3px;
}

p.desc {
    margin: 5px;
}

/**
  * Export styles only
  */
select#db_select, select#table_select {
    width: 400px;
}

.export_sub_options {
    margin: 20px 0 0 30px;
}

.export_sub_options h4 {
    border-bottom: 1px #999999 solid;
}

.export_sub_options li.subgroup {
    display: inline-block;
    margin-top: 0;
}

.export_sub_options li {
    margin-bottom: 0;
}

#quick_or_custom, #output_quick_export {
    display: none;
}
/**
 * Import styles only
 */

.importoptions #import_notification {
    margin: 10px 0;
    font-style: italic;
}

input#input_import_file {
    margin: 5px;
}

.formelementrow {
    margin: 5px 0 5px 0;
}

/**
 * GIS data editor styles
 */
a.close_gis_editor {
    float: right;
}

#gis_editor {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE */
    z-index: 1001;
    overflow-y: auto;
    overflow-x: hidden;
}

#gis_data {
    min-height: 230px;
}

#gis_data_textarea {
    height: 6em;
}

#gis_data_editor {
    background: #D0DCE0;
    padding: 15px;
    min-height: 500px;
}

#gis_data_editor .choice {
    display: none;
}

#gis_data_editor input[type="text"] {
    width: 75px;
}

#popup_background {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE6 */
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: <?php echo $GLOBALS['cfg']['ButtonHover']; ?>;
    z-index: 1000;
    overflow: hidden;
}

/**
 * ENUM/SET editor styles
 */
p.enum_notice {
    margin: 5px 2px;
    font-size: 80%;
}

.enum_editor_no_js fieldset {
    width: 40em;
}

hr.enum_editor_no_js {
    background-color: #aaa;
}

#enum_editor p {
    margin-top: 0;
    font-style:italic;
}

#enum_editor .values, #enum_editor .add, .enum_editor_no_js #values {
    width: 100%;
}

#enum_editor .add td {
    vertical-align: middle;
    width: 50%;
    padding: 0 0 0 1em;
}

#enum_editor .values td.drop {
    width: 1.8em;
    cursor: pointer;
    vertical-align: middle;
}

#enum_editor .values input {
    margin: 0.1em 0;
    padding-right: 2em;
    width: 100%;
}

#enum_editor .values img {
    width: 1.8em;
    vertical-align: middle;
}

#enum_editor input.add_value {
    margin: 0 0.4em 0 0;
}

#enum_editor_output textarea,
.enum_editor_no_js input {
    width: 100%;
    float: right;
    margin: 1em 0 0 0;
}

.enum_editor_no_js {
    width: 40em;
}

.enum_editor_no_js input.submit {
    float: left;
    margin: 1em 0;
}

/**
 * ENUM/SET editor integration for the routines editor
 */
.enum_hint {
    position: relative;
}

.enum_hint a {
    position: absolute;
    left: 81%;
    bottom: 0.35em;
}

/**
 * Table structure styles
 */
.structure_actions_dropdown
{
	position: absolute;
	padding: 0px;
	display: none;
	z-index: 100;
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	line-height: 30px;
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
}

.structure_actions_dropdown span{display:block;}


.replace_in_more
{
	padding: 5px;
}

.replace_in_more:hover
{
	background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
}

td.more_opts {
    white-space: nowrap;
}

/**
 * Indexes
 */
#index_frm .index_info input,
#index_frm .index_info select {
    width: 14em;
    box-sizing:         border-box;
    -ms-box-sizing:     border-box;
    -moz-box-sizing:    border-box;
    -webkit-box-sizing: border-box;
}

#index_frm .index_info div {
    padding: 0.2em 0;
}

#index_frm .index_info .label {
    float: left;
    min-width: 12em;
}

#index_frm .slider {
    width: 10em;
    margin: 0.6em;
    float: <?php echo $left; ?>;
}

#index_frm .add_fields {
    float: <?php echo $left; ?>;
}

#index_frm .add_fields input {
    margin-<?php echo $left; ?>: 1em;
}

#index_frm input {
    margin: 0;
}

#index_frm td {
    vertical-align: middle;
}

table#index_columns {
    width: 100%;
}

table#index_columns select {
    width: 100%;
}

iframe.IE_hack {
    z-index: 1;
    position: absolute;
    display: none;
    border: 0;
    filter: alpha(opacity=0);
}

/* config forms */

.config-form ul.tabs
{
	padding: 0 0 0.3em 0;
	list-style: none;
	font-size: 20px;
	height: 35px;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

.config-form ul.tabs li
{
	float: <?php echo $left; ?>;
	height: 42px;
}

.config-form ul.tabs li a
{
	display: block;
	margin: 0.1em 0.2em 0;
	white-space: nowrap;
	text-decoration: none;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	letter-spacing: -0.5px;
}

.config-form ul.tabs li a
{
	padding: 6px 10px;
	color: #666;
}

.config-form ul.tabs li a:hover,
.config-form ul.tabs li a:active
{
}

.config-form ul.tabs li.active a
{
	color: #333;
	border-top: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-left: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-right: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-bottom: 1px solid #fff;
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}

.config-form fieldset
{
	margin-top: 0;
	padding: 0;
	clear: both;
	background: none;
	border: none;
}

.config-form legend {
    display: none;
}

.config-form fieldset p
{
	margin: 0;
	padding: 0.5em;
	border-top: 0;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?>;
	font-size: 1.5em;
}

.config-form fieldset .errors { /* form error list */
	margin: 0 -2px 1em -2px;
	padding: 0.5em 1.5em;
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border: 0 #C83838 solid;
	border-width: 1px 0;
	list-style: none;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	font-size: small;
}

.config-form fieldset .inline_errors
{
	padding: 0;
	list-style: none;
	color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
	font-size: small;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

.config-form fieldset th
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?> !important;
	text-transform: none;
	text-align: left;
	vertical-align: top;
	width: 50%;
	background: transparent;
	font-weight: normal;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?> !important;
}

.config-form fieldset .disabled-notice {
    font-size: 80%;
    text-transform: uppercase;
    color: <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    cursor: help;
}

.config-form fieldset td
{
	vertical-align: top;
}

.config-form fieldset th small
{
	display: block;
	font-weight: normal;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	font-size: x-small;
	color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
	text-transform: none;
}

.config-form fieldset th,
.config-form fieldset td
{
	border-right: none;
	padding: 0.9em;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

/* Config forms - disabled inputs */

#LeftDisplayLogo, #LeftLogoLinkWindow, #LightTabs
{
	display: none;
}


fieldset .group-header th
{
	background: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

fieldset .group-header + tr th {
    padding-top: 0.6em;
}

fieldset .group-field-1 th, fieldset .group-header-2 th {
    padding-left: 1.5em;
}

fieldset .group-field-2 th, fieldset .group-header-3 th {
    padding-left: 3em;
}

fieldset .group-field-3 th {
    padding-left: 4.5em;
}

fieldset .disabled-field th,
fieldset .disabled-field th small,
fieldset .disabled-field td {
    color: <?php echo $GLOBALS['cfg']['ThColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

form#create_table_form_minimal fieldset:not(.tblFooters):before
{
	content: "CREATE TABLE";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

form#rename_db_form fieldset:not(.tblFooters):before
{
	content: "RENAME DB";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

form#copy_db_form fieldset:not(.tblFooters):before
{
	content: "COPY DB";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

form#change_db_charset_form fieldset:not(.tblFooters):before
{
	content: "ALTER TABLE CHARSET";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

form#alterTableOrderby fieldset:not(.tblFooters):before
{
	content: "ALTER TABLE ORBER BY";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

fieldset#fieldset_table_rename:before
{
	content: "RENAME TABLE";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

form#copyTable fieldset:not(.tblFooters):before
{
	content: "COPY TABLE";
	float: left;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	height: 44px;
	line-height: 44px;
	margin-right: 1em;
}

.config-form .lastrow
{
}

.config-form .lastrow
{
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	padding: 0.5em;
	text-align: center;
}

/* form elements */

.config-form span.checkbox {
    padding: 2px;
    display: inline-block;
}

.config-form .custom
{
	background: #faa732;
}

.config-form span.checkbox.custom
{
	padding: 1px;
	background: #Faa732;
}

.config-form .field-error {
    border-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?> !important;
}

.config-form input[type="text"],
.config-form select,
.config-form textarea
{
	border: 1px <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?> solid;
	height: auto;
}

.config-form input[type="text"]:focus,
.config-form select:focus,
.config-form textarea:focus
{
	border: 1px solid <?php echo $GLOBALS['cfg']['NaviHoverBackground']; ?>;
}

.config-form .field-comment-mark
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	color: <?php echo $GLOBALS['cfg']['ThPointerColor']; ?>;
	cursor: help;
	padding: 0 0.2em;
}

.config-form .field-comment-warning
{
	color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?>;
}

/* error list */
.config-form dd {
    margin-left: 0.5em;
}

.config-form dd:before {
    content: "\25B8  ";
}

.click-hide-message {
    cursor: pointer;
}

.prefsmanage_opts {
    margin-<?php echo $left; ?>: 2em;
}

#prefs_autoload {
    margin-bottom: 0.5em;
}

.rte_table
{
	table-layout: fixed;
	overflow: hidden;
}

.rte_table td
{
	vertical-align: middle;
}

.rte_table tr td:nth-child(1)
{
	font-weight: normal;
}

.rte_table input, .rte_table select, .rte_table textarea {
    width:              100%;
    margin:             0;
    box-sizing:         border-box;
    -ms-box-sizing:     border-box;
    -moz-box-sizing:    border-box;
    -webkit-box-sizing: border-box;
}

.rte_table .routine_params_table {
    width:              100%;
}

#placeholder .button {
    position: absolute;
    cursor: pointer;
}

#placeholder div.button {
    font-size: smaller;
    color: <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    padding: 2px;
}

.wrapper {
    float: <?php echo $left; ?>;
    margin-bottom: 1.5em;
}
.toggleButton {
    position: relative;
    cursor: pointer;
    font-size: 0.8em;
    text-align: center;
    line-height: 1.55em;
    height: 1.55em;
    overflow: hidden;
    border-right: 0.1em solid #888;
    border-left: 0.1em solid #888;
}
.toggleButton table,
.toggleButton td,
.toggleButton img {
    padding: 0;
    position: relative;
}
.toggleButton .container {
    position: absolute;
}
.toggleButton .toggleOn {
    color: white;
    padding: 0 1em;
}
.toggleButton .toggleOff {
    padding: 0 1em;
}

.doubleFieldset fieldset {
    width: 48%;
    float: <?php echo $left; ?>;
    padding: 0;
}
.doubleFieldset fieldset.left {
    margin-<?php echo $right; ?>: 1%;
}
.doubleFieldset fieldset.right {
    margin-<?php echo $left; ?>: 1%;
}
.doubleFieldset legend
{
	margin-<?php echo $left; ?>: -1px;
}
.doubleFieldset div.wrap {
    padding: 1.5em;
}

#table_columns input[type="text"], #table_columns select
{
	width: 10em;
	box-sizing: border-box;
	-ms-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

#table_columns select
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

#placeholder {
    position: relative;
    border: 1px solid #aaa;
    float: right;
    overflow: hidden;
}

.placeholderDrag {
    cursor: move;
}

#placeholder .button {
    position: absolute;
}

#left_arrow {
    left:8px;
    top:26px;
}

#right_arrow {
    left:26px;
    top:26px;
}

#up_arrow {
    left:17px;
    top:8px;
}

#down_arrow {
    left:17px;
    top:44px;
}

#zoom_in {
    left:17px;
    top:67px;
}

#zoom_world {
    left:17px;
    top:85px;
}

#zoom_out {
    left:17px;
    top:103px;
}

.gis_table td {
    vertical-align: middle;
}

.gis_table select {
    min-width: 160px;
    margin: 6px;
}

.gis_table .save {
    color: #111;
    font-weight: bold;
    vertical-align: bottom;
    height: 100px;
}

.gis_table .button {
   text-align: <?php echo $right; ?>;
}

.gis_table .choice {
    display: none;
}

.CodeMirror, .CodeMirror pre
{
	font-size: 100%;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?> !important;
	background: white;
	border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

#sqlquerycontainerfull input[type=button]
{
	margin-top: 10px;
}

.CodeMirror-scroll
{
	overflow: auto;
	height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
	/* This is needed to prevent an IE[67] bug where the scrolled content is visible outside of the scrolling box. */
	position: relative;
}

.CodeMirror-gutter {
  position: absolute; left: 0; top: 0;
  z-index: 10;
  background-color: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
  border-right: 1px solid <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
  min-width: 2em;
  height: 100%;
}
.CodeMirror-gutter-text {
  color: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
  text-align: right;
  padding: .4em .2em .4em .4em;
  white-space: pre !important;
}
.CodeMirror-lines {
  padding: .4em;
}

.CodeMirror pre {
  border-width: 0; margin: 0; padding: 0; background: transparent;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?> !important;
  font-size: inherit;
  padding: 0; margin: 0;
  white-space: pre;
  word-wrap: normal;
}

.CodeMirror-wrap pre {
  word-wrap: break-word;
  white-space: pre-wrap;
}
.CodeMirror-wrap .CodeMirror-scroll {
  overflow-x: hidden;
}

.CodeMirror-lines pre span
{
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?> !important;
}

.CodeMirror textarea {
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?> !important;
  font-size: inherit !important;
}

.CodeMirror-cursor {
  z-index: 10;
  position: absolute;
  visibility: hidden;
  border-left: 1px solid black !important;
}
.CodeMirror-focused .CodeMirror-cursor {
  visibility: visible;
}

span.CodeMirror-selected
{
	background: <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?> !important;
	color: HighlightText !important;
}
.CodeMirror-focused span.CodeMirror-selected {
  background: Highlight !important;
}

.CodeMirror-matchingbracket {color: <?php echo $GLOBALS['cfg']['BlueHeader']; ?> !important;}
.CodeMirror-nonmatchingbracket {color: <?php echo $GLOBALS['cfg']['BrowseWarningColor']; ?> !important;}

<?php echo $_SESSION['PMA_Theme']->getCssCodeMirror(); ?>

.colborder {
    cursor: col-resize;
    height: 100%;
    margin-left: -6px;
    position: absolute;
    width: 5px;
}

.colborder_active {
    border-right: 2px solid #a44;
}

.pma_table td {
    position: static;
}

.pma_table th.draggable span, .pma_table tbody td span {
    display: block;
    overflow: hidden;
}

.cRsz {
    position: absolute;
}

.cCpy {
    background: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
    font-weight: bold;
    margin: 0.1em;
    padding: 0.3em;
    position: absolute;
}

.cPointer {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>col_pointer.png);
    height: 20px;
    margin-left: -5px;  /* must be minus half of its width */
    margin-top: -10px;
    position: absolute;
    width: 10px;
}

.qtip-content
{
	background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?> !important;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
	font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight']; ?> !important;
	font-size: 1em !important;
}

.qtip-contentWrapper
{
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?> !important;
}

.normalqTip
{
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?> !important;
	opacity: 0.8 !important;
	filter: alpha(opacity=80) !important;
	border: none !important;
	font-size: 0.8em !important;
}

.normalqTip *
{
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?> !important;
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?> !important;
}

.normalqTipContent
{
	padding: 10px !important;
}

.cDrop {
    left: 0;
    position: absolute;
    top: 0;
}

.coldrop {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>col_drop.png);
    cursor: pointer;
    height: 16px;
    margin-left: 0.3em;
    margin-top: 0.3em;
    position: absolute;
    width: 16px;
}

.cList
{
	background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
	border: solid 1px #999;
	position: absolute;
}

.cList .lDiv div {
    padding: 0.2em 0.5em 0.2em 0.2em;
}

.cList .lDiv div:hover {
    background: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
    cursor: pointer;
}

.cList .lDiv div input {
    cursor: pointer;
}

.showAllColBtn {
    border-bottom: solid 1px #999;
    border-top: solid 1px #999;
    cursor: pointer;
    font-size: 0.9em;
    font-weight: bold;
    padding: 0.35em 1em;
    text-align: center;
}

.showAllColBtn:hover {
    background: <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

.navigation
{
	width: 100%;
	border-bottom: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
	border-top: 1px solid <?php echo $GLOBALS['cfg']['BorderColor']; ?>;
}

.navigation td
{
	margin: 0;
	padding: 0;
	vertical-align: middle;
	white-space: nowrap;
}

.navigation_separator
{
	color: #999;
	display: inline-block;
	font-size: 1.5em;
	text-align: center;
	height: 1.4em;
	width: 1.2em;
}

.navigation input[type=submit]
{
	background: <?php echo $GLOBALS['cfg']['ButtonBackground']; ?>;
	border: 0;
	filter: none;
	margin: 0;
	padding: 0.4em;
}

.navigation input[type=submit]:hover, .navigation input.edit_mode_active
{
	color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
	cursor: pointer;
	background-color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

.navigation select
{
	margin: 0 0.8em;
}

.insertRowTable td, .insertRowTable th
{
	vertical-align: middle;
}

.data, .insertRowTable
{
	width: 100%;
}

.cEdit
{
	margin: -0.5em;
	padding: 0;
	position: absolute;
}

.cEdit input[type=text] {
    background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    height: 100%;
    margin: 0;
    padding: 0;
}

.cEdit .edit_area
{
	background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
	border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
	min-width: 10em;
}

.cEdit .edit_area select, .cEdit .edit_area textarea {
    width: 90%;
}

.cEdit .cell_edit_hint {
    color: #555;
    font-size: 0.8em;
    margin: 0.3em 0.2em;
}

.cEdit .edit_box {
    overflow: hidden;
    padding: 0;
}

.cEdit .edit_box_posting {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif) no-repeat right center;
    padding-right: 1.5em;
}

.cEdit .edit_area_loading {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif) no-repeat center;
    height: 10em;
}

.cEdit .goto_link {
    background: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    color: #555;
    padding: 0.2em 0.3em;
}

.saving_edited_data {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif) no-repeat left;
    padding-left: 20px;
}

/* css for timepicker */
.ui-timepicker-div .ui-widget-header{ margin-bottom: 8px; }
.ui-timepicker-div dl{ text-align: left; }
.ui-timepicker-div dl dt{ height: 25px; }
.ui-timepicker-div dl dd{ margin: -25px 0 10px 65px; }
.ui-timepicker-div td { font-size: 90%; }

/* Designer */
.input_tab {
    background-color: #A6C7E1;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

#canvas {
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

canvas.pmd {
    display: inline-block;
    overflow: hidden;
    text-align: left;
}

canvas.pmd * {
    behavior: url(#default#VML);
}

.pmd_tab {
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    border-collapse: collapse;
    border: 1px solid #AAAAAA;
    z-index: 1;
    -moz-user-select: none;
}

.tab_zag {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_zag_2 {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header_Linked.png);
    background-repeat: repeat-x;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_field {
    background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    cursor: default;
}

.tab_field_2 {
    background-color: #CCFFCC;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    background-repeat: repeat-x;
    cursor: default;
}

.tab_field_3 {
    background-color: #FFE6E6; /*#DDEEFF*/
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    cursor: default;
}

#pmd_hint {
    white-space: nowrap;
    position: absolute;
    background-color: #99FF99;
    color: #000000;
    left: 200px;
    top: 50px;
    z-index: 3;
    border: #00CC66 solid 1px;
    display: none;
}

.scroll_tab {
    overflow: auto;
    width: 100%;
    height: 500px;
}

.pmd_Tabs {
    cursor: default;
    color: #0055bb;
    white-space: nowrap;
    text-decoration: none;
    text-indent: 3px;
    font-weight: bold;
    margin-left: 2px;
    text-align: left;
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/left_panel_butt.png);
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
}

.pmd_Tabs2 {
    cursor: default;
    color: #0055bb;
    background: #FFEE99;
    text-indent: 3px;
    font-weight: bold;
    white-space: nowrap;
    text-decoration: none;
    border: #9999FF solid 1px;
    text-align: left;
}

.owner {
    font-weight: normal;
    color: #888888;
}

.option_tab {
    padding-left: 2px;
    padding-right: 2px;
    width: 5px;
}

.select_all {
    vertical-align: top;
    padding-left: 2px;
    padding-right: 2px;
    cursor: default;
    width: 1px;
    color: #000000;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
}

.small_tab {
    vertical-align: top;
    background-color: #0064ea;
    color: #FFFFFF;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/small_tab.png);
    cursor: default;
    text-align: center;
    font-weight: bold;
    padding-left: 2px;
    padding-right: 2px;
    width: 1px;
    text-decoration: none;
}

.small_tab2 {
    vertical-align: top;
    color: #FFFFFF;
    background-color: #FF9966;
    cursor: default;
    padding-left: 2px;
    padding-right: 2px;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.small_tab_pref {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
    text-align: center;
    width: 1px;
}

.small_tab_pref2 {
    vertical-align: top;
    color: #FFFFFF;
    background-color: #FF9966;
    cursor: default;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.butt {
    border: #4477aa solid 1px;
    font-weight: bold;
    height: 19px;
    width: 70px;
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    vertical-align: baseline;
}

.L_butt2_1 {
    padding: 1px;
    text-decoration: none;
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    vertical-align: middle;
    cursor: default;
}

.L_butt2_2 {
    padding: 0;
    border: #0099CC solid 1px;
    background: #FFEE99;
    text-decoration: none;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    cursor: default;
}

/* --- */

.bor
{
	width: 10px;
	height: 10px;
}

.frams1 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/1.png) no-repeat right bottom;
}

.frams2 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/2.png) no-repeat left bottom;
}

.frams3 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/3.png) no-repeat left top;
}

.frams4 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/4.png) no-repeat right top;
}

.frams5 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/5.png) repeat-x center bottom;
}

.frams6 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/6.png) repeat-y left;
}

.frams7 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/7.png) repeat-x top;
}

.frams8 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/8.png) repeat-y right;
}

#osn_tab {
    background-color: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    border: #A9A9A9 solid 1px;
}

.pmd_header {
    background-color: #EAEEF0;
    color: #000000;
    text-align: center;
    font-weight: bold;
    margin: 0;
    padding: 0;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/top_panel.png);
    background-position: top;
    background-repeat: repeat-x;
    border-right: #999999 solid 1px;
    border-left: #999999 solid 1px;
    height: 28px;
}

.pmd_header a {
    display: block;
    float: left;
    margin: 3px 1px 4px 1px;
    height: 20px;
    border: 1px dotted #ffffff;
}

.pmd_header .M_bord {
    display: block;
    float: left;
    margin: 4px;
    height: 20px;
    width: 2px;
}

.pmd_header a.first {
    margin-right: 1em;
}

.pmd_header a.last {
    margin-left: 1em;
}

a.M_butt_Selected_down_IE,
a.M_butt_Selected_down {
    border: 1px solid #C0C0BB;
    background-color: #99FF99;
    color: #000000;
}

a.M_butt_Selected_down_IE:hover,
a.M_butt_Selected_down:hover,
a.M_butt:hover {
    border: 1px solid #0099CC;
    background-color: #FFEE99;
    color: #000000;
}

#layer_menu {
    z-index: 1000;
    position: absolute;
    left: 0;
    background-color: #EAEEF0;
    border: #999999 solid 1px;
}

#layer_action {
    position: absolute;
    left: 638px;
    top: 52px;
    z-index: 1000;
    background-color: #CCFF99;
    padding: 3px;
    border: #009933 solid 1px;
    white-space: nowrap;
    font-weight: bold;
}

#layer_upd_relation {
    position: absolute;
    left: 637px;
    top: 224px;
    z-index: 1000;
}

#layer_new_relation {
    position: absolute;
    left: 636px;
    top: 85px;
    z-index: 1000;
    width: 153px;
}

#pmd_optionse {
    position: absolute;
    left: 636px;
    top: 85px;
    z-index: 1000;
    width: 153px;
}

#layer_menu_sizer {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/resize.png);
    cursor: nw-resize;
    width: 16px;
    height: 16px;
}

.panel {
    position: fixed;
    top: 50px;
    right: 0;
    display: none;
    background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    border:1px solid <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
    width: 350 px;
    height: auto;
    padding: 30px 170px 30px 30px;
    color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
    z-index:99;
}

a.trigger{
    position: fixed;
    text-decoration: none;
    top: 60px; right: 0;
    color: <?php echo $GLOBALS['cfg']['ButtonColor']; ?>;
    padding: 10px 40px 10px 15px;
    background: <?php echo $GLOBALS['cfg']['MainColor']; ?> url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/plus.png) 85% 55% no-repeat;
    border:1px solid #444444;
    display: block;
}

a.trigger:hover{
    position: fixed;
    text-decoration: none;
    top: 60px; right: 0;
    color:#080808;
    padding: 10px 40px 10px 15px;
    background:#fff696 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/plus.png) 85% 55% no-repeat;
    border:1px solid #999;
    display: block;
}

a.active.trigger {
    background:#222222 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/minus.png) 85% 55% no-repeat;
    z-index:999;
}

a.active.trigger:hover {
    background:#fff696 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/minus.png) 85% 55% no-repeat;
    z-index:999;
}

h2.tiger{
    background-repeat: repeat-x;
    padding: 1px;
    font-weight: bold;
    padding: 50 20 50 20px;
    margin: 0 0 5px 0;
    width: 250px;
    float: left;
    color : #c6c6c6;
    text-align: center;
}

h2.tiger a {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    text-align: center;
    text-decoration: none;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    display: block;
}

h2.tiger a:hover {
    color: #000;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header_Linked.png);
}

h2.active {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
    padding: 1px;
    background-position: left bottom;
}

.toggle_container {
    margin: 0 0 5px;
    padding: 0;
    border-top: 1px solid #d6d6d6;
    background: <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
    width: 250px;
    overflow: hidden;
    font-size: 1.2em;
    clear: both;
}

.toggle_container .block {
    background-color: #DBE4E8;
    padding:40 15 40 15px; /*--Padding of Container--*/
    border:1px solid #999;
    color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
}

.history_table {
    text-align: center;
    background-color: #9999CC;
}

.history_table2 {
    text-align: center;
    background-color: #DBE4E8;
}

#filter {
    display: none;
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #CCA;
    z-index:10;
    opacity:0.5;
    filter: alpha(opacity=50);
}

#box {
    display: none;
    position: absolute;
    top: 20%;
    left: 30%;
    width: 500px;
    height: 220px;
    padding: 48px;
    margin:0;
    border: 1px solid black;
    background-color: white;
    z-index:101;
    overflow: visible;
}

#boxtitle {
    position:absolute;
    float:center;
    top:0;
    left:0;
    width:593px;
    height:20px;
    padding:0;
    padding-top:4px;
    left-padding:8px;
    margin:0;
    border-bottom:4px solid #3CF;
    background-color: #D0DCE0;
    color:black;
    font-weight:bold;
    padding-left: 2px;
    text-align:left;
}

#tblfooter
{
	float: right;
	padding-top:10px;
	color: black;
	font-weight: normal;
}

input.btn
{
	color: <?php echo $GLOBALS['cfg']['MainColor']; ?>;
	background-color: #D0DCE0;
}

body .ui-widget {
    font-size: 1em;
}

.ui-dialog fieldset legend a {
    color: <?php echo $GLOBALS['cfg']['BlueHeader']; ?>;
}

/* jqPlot */

/*rules for the plot target div. These will be cascaded down to all plot elements according to css rules */

.jqplot-target
{
	position: relative;
	color: #222222;
	font-family: <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
	font-size: 1em;
	/* height: 300px;
	width: 590px; */
}

/*rules applied to all axes*/
.jqplot-axis {
    font-size: 0.5em;
}

.jqplot-xaxis {
    margin-top: 10px;
}

.jqplot-x2axis {
    margin-bottom: 10px;
}

.jqplot-yaxis {
    margin-right: 10px;
}

.jqplot-y2axis, .jqplot-y3axis, .jqplot-y4axis, .jqplot-y5axis, .jqplot-y6axis, .jqplot-y7axis, .jqplot-y8axis, .jqplot-y9axis, .jqplot-yMidAxis {
    margin-left: 10px;
    margin-right: 10px;
}

/*rules applied to all axis tick divs*/
.jqplot-axis-tick, .jqplot-xaxis-tick, .jqplot-yaxis-tick, .jqplot-x2axis-tick, .jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick, .jqplot-yMidAxis-tick {
    position: absolute;
    white-space: pre;
}


.jqplot-xaxis-tick {
    top: 0px;
    /* initial position untill tick is drawn in proper place */
    left: 15px;
/*    padding-top: 10px;*/
    vertical-align: top;
}

.jqplot-x2axis-tick {
    bottom: 0px;
    /* initial position untill tick is drawn in proper place */
    left: 15px;
/*    padding-bottom: 10px;*/
    vertical-align: bottom;
}

.jqplot-yaxis-tick {
    right: 0px;
    /* initial position untill tick is drawn in proper place */
    top: 15px;
/*    padding-right: 10px;*/
    text-align: right;
}

.jqplot-yaxis-tick.jqplot-breakTick {
	right: -20px;
	margin-right: 0px;
	padding:1px 5px 1px 5px;
/*	background-color: white;*/
	z-index: 2;
	font-size: 1.5em;
}

.jqplot-y2axis-tick, .jqplot-y3axis-tick, .jqplot-y4axis-tick, .jqplot-y5axis-tick, .jqplot-y6axis-tick, .jqplot-y7axis-tick, .jqplot-y8axis-tick, .jqplot-y9axis-tick {
    left: 0px;
    /* initial position untill tick is drawn in proper place */
    top: 15px;
/*    padding-left: 10px;*/
/*    padding-right: 15px;*/
    text-align: left;
}

.jqplot-yMidAxis-tick {
    text-align: center;
    white-space: nowrap;
}

.jqplot-xaxis-label {
    margin-top: 10px;
    font-size: 11pt;
    position: absolute;
}

.jqplot-x2axis-label {
    margin-bottom: 10px;
    font-size: 11pt;
    position: absolute;
}

.jqplot-yaxis-label {
    margin-right: 10px;
/*    text-align: center;*/
    font-size: 11pt;
    position: absolute;
}

.jqplot-yMidAxis-label {
    font-size: 11pt;
    position: absolute;
}

.jqplot-y2axis-label, .jqplot-y3axis-label, .jqplot-y4axis-label, .jqplot-y5axis-label, .jqplot-y6axis-label, .jqplot-y7axis-label, .jqplot-y8axis-label, .jqplot-y9axis-label {
/*    text-align: center;*/
    font-size: 11pt;
    margin-left: 10px;
    position: absolute;
}

.jqplot-meterGauge-tick {
    font-size: 0.75em;
    color: #999999;
}

.jqplot-meterGauge-label {
    font-size: 1em;
    color: #999999;
}

table.jqplot-table-legend {
    margin-top: 12px;
    margin-bottom: 12px;
    margin-left: 12px;
    margin-right: 12px;
}

table.jqplot-table-legend, table.jqplot-cursor-legend {
    background-color: rgba(255,255,255,0.6);
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    position: absolute;
    font-size: 0.75em;
}

td.jqplot-table-legend {
    vertical-align:middle;
}

/*
These rules could be used instead of assigning
element styles and relying on js object properties.
*/

/*
td.jqplot-table-legend-swatch {
    padding-top: 0.5em;
    text-align: center;
}

tr.jqplot-table-legend:first td.jqplot-table-legend-swatch {
    padding-top: 0px;
}
*/

td.jqplot-seriesToggle:hover, td.jqplot-seriesToggle:active {
    cursor: pointer;
}

.jqplot-table-legend .jqplot-series-hidden {
    text-decoration: line-through;
}

div.jqplot-table-legend-swatch-outline {
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    padding:1px;
}

div.jqplot-table-legend-swatch {
    width:0px;
    height:0px;
    border-top-width: 5px;
    border-bottom-width: 5px;
    border-left-width: 6px;
    border-right-width: 6px;
    border-top-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-right-style: solid;
}

.jqplot-title {
    top: 0px;
    left: 0px;
    padding-bottom: 0.5em;
    font-size: 1.2em;
}

table.jqplot-cursor-tooltip {
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    font-size: 0.75em;
}


.jqplot-cursor-tooltip {
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    font-size: 0.75em;
    white-space: nowrap;
    background: rgba(208,208,208,0.5);
    padding: 1px;
}

.jqplot-highlighter-tooltip, .jqplot-canvasOverlay-tooltip {
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor']; ?>;
    font-size: 0.75em;
    white-space: nowrap;
    background: rgba(208,208,208,0.5);
    padding: 1px;
}

.jqplot-point-label {
    font-size: 0.75em;
    z-index: 2;
}

td.jqplot-cursor-legend-swatch {
    vertical-align: middle;
    text-align: center;
}

div.jqplot-cursor-legend-swatch {
    width: 1.2em;
    height: 0.7em;
}

.jqplot-error {
/*   Styles added to the plot target container when there is an error go here.*/
    text-align: center;
}

.jqplot-error-message {
/*    Styling of the custom error message div goes here.*/
    position: relative;
    top: 46%;
    display: inline-block;
}

div.jqplot-bubble-label {
    font-size: 0.8em;
/*    background: rgba(90%, 90%, 90%, 0.15);*/
    padding-left: 2px;
    padding-right: 2px;
    color: rgb(20%, 20%, 20%);
}

div.jqplot-bubble-label.jqplot-bubble-label-highlight {
    background: rgba(90%, 90%, 90%, 0.7);
}

div.jqplot-noData-container {
	text-align: center;
	background-color: rgba(96%, 96%, 96%, 0.3);
}
