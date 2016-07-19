<?php
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) { exit(); }
?>
/* Navigation */

#pma_navigation {
	top:0;
	height:100%;
	position:fixed;
	<?php echo $left; ?>:0;
	width:<?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
	color:<?php echo $GLOBALS['cfg']['NaviColor']; ?>;
	z-index:800;
	background-color:<?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
}

#pma_navigation_header {
    overflow: hidden;
}

#pma_navigation_content {
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    <?php echo $left; ?>: 0;
    z-index: 0;
}

#pma_navigation ul {
    margin: 0;
}

#pma_navigation form {
    margin: 0;
    padding: 0;
    display: inline;
}

#pma_navigation select#select_server,
#pma_navigation select#lightm_db {
    width: 100%;
}

/******************************************************************************/
/* specific elements */

#pma_navigation div.pageselector {
    text-align: center;
    margin: 0;
    margin-<?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}

#pma_navigation #pmalogo,
#pma_navigation #serverChoice,
#pma_navigation #navipanellinks,
#pma_navigation #recentTableList,
#pma_navigation #favoriteTableList,
#pma_navigation #databaseList,
#pma_navigation div.pageselector.dbselector {
    text-align: center;
    padding: 5px 10px 0;
    border: 0;
}

#pma_navigation #pmalogo{
	padding:0;
	height:38px;
	background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;
}
#pma_navigation #pmalogo a{
	color:#fff;
	display:inline-block;
	text-decoration:none;
}
#pma_navigation #pmalogo a:after{
	display:block;
	font-size:18px;
	font-weight:500;
	padding:7px 10px;
	content:'phpMyAdmin';
	text-shadow:0 1px 0 #000;
}
#pma_navigation #pmalogo img{
	display:none;
}

#pma_navigation #recentTable,
#pma_navigation #favoriteTable {
    width: 200px;
}

#pma_navigation #favoriteTableList select,
#pma_navigation #serverChoice select
 {
    width: 80%;
}

#pma_navigation_content > img.throbber {
    display: none;
    margin: .3em auto 0;
}
/* Navlinks */
#pma_navigation #navipanellinks{padding:5px 8px;background-color:#eee}
#navipanellinks a{
	margin:4px;
	padding:2px;
	display:inline-block;
}
#navipanellinks a img{
	margin:0;
}

/* Navigation tree*/
#pma_navigation_tree {
    margin: 0;
    margin-<?php echo $left; ?>: 5px;
    overflow: hidden;
    color: #444;
    height: 74%;
    position: relative;
}
#pma_navigation_select_database {
    text-align: left;
    padding: 0 0 0;
    border: 0;
    margin: 0;
}

#pma_navigation_db_select {
    margin-top: 0.5em;
    margin-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_db_select select {
    background: url("./themes/pmahomme/img/select_bg.png") repeat scroll 0 0;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    border: 1px solid #bbb;
    border-top: 1px solid #bbb;
    color: #333;
    padding: 4px 6px;
    margin: 0 0 0;
    width: 92%;
    font-size: 1.11em;
}

#pma_navigation_tree_content {
    width: 100%;
    overflow: hidden;
    overflow-y: auto;
    position: absolute;
    height: 100%;
}
#pma_navigation_tree_content a.hover_show_full {
    position: relative;
    z-index: 100;
}
#pma_navigation_tree a {
    color: <?php echo $GLOBALS['cfg']['NaviColor']; ?>;
}
#pma_navigation_tree a:hover {
    text-decoration: underline;
}
#pma_navigation_tree li.activePointer {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
}
#pma_navigation_tree li.selected {
    color: <?php echo $GLOBALS['cfg']['NaviPointerColor']; ?>;
    background-color: <?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
}
#pma_navigation_tree li .dbItemControls {
    padding-left: 4px;
}
#pma_navigation_tree li .navItemControls {
    display: none;
    padding-left: 4px;
}
#pma_navigation_tree li.activePointer .navItemControls {
    display: inline;
    opacity: 0.5;
}
#pma_navigation_tree li.activePointer .navItemControls:hover {
    display: inline;
    opacity: 1.0;
}
#pma_navigation_tree ul {
    clear: both;
    padding: 0;
    list-style-type: none;
    margin: 0;
}
#pma_navigation_tree ul ul {
    position: relative;
}
#pma_navigation_tree li,
#pma_navigation_tree li.fast_filter {
	clear: both;
	min-height:22px;
	white-space: nowrap;
}
#pma_navigation_tree img {
    margin: 0;
}
#pma_navigation_tree i {
    display: block;
}
#pma_navigation_tree div.block {
    position: relative;
    width: 1.5em;
    height: 1.5em;
    min-width: 16px;
    min-height: 16px;
	margin-right:5px;
    float: <?php echo $left; ?>;
}
#pma_navigation_tree div.block.double {
    width: 2.5em;
}
#pma_navigation_tree div.block i,
#pma_navigation_tree div.block b {
    width: 1.5em;
    height: 1.8em;
    min-width: 16px;
    min-height: 8px;
    position: absolute;
    bottom: 0.7em;
    <?php echo $left; ?>: 0.75em;
    z-index: 0;
	bottom:10px;
}
#pma_navigation_tree div.block i { /* Top and right segments for the tree element connections */
    display: block;
    border-<?php echo $left; ?>: 1px solid #666;
    border-bottom: 1px solid #666;
    position: relative;
    z-index: 0;
}
#pma_navigation_tree div.block i.first{
	border-<?php echo $left; ?>: 0;
}
#pma_navigation_tree div.block b { /* Bottom segment for the tree element connections */
    display: block;
    height: 0.75em;
    bottom: 0;
    <?php echo $left; ?>: 0.75em;
    border-<?php echo $left; ?>: 1px solid #666;
}
#pma_navigation_tree div.block a,
#pma_navigation_tree div.block u {
    position: absolute;
    <?php echo $left; ?>: 50%;
    top: 50%;
    z-index: 10;
}
#pma_navigation_tree div.block a + a {
    <?php echo $left; ?>: 100%;
}
#pma_navigation_tree div.block.double a,
#pma_navigation_tree div.block.double u {
    <?php echo $left; ?>: 33%;
}
#pma_navigation_tree div.block.double a + a {
    <?php echo $left; ?>: 85%;
}
#pma_navigation_tree div.block img {
    position: relative;
    top: -0.6em;
    <?php echo $left; ?>: 0;
    margin-<?php echo $left; ?>: -8px;
}
#pma_navigation_tree div.throbber img {
    top: 2px;
    <?php echo $left; ?>: 2px;
}
#pma_navigation_tree li.last > ul {
    background: none;
}
#pma_navigation_tree li > a, #pma_navigation_tree li > i {
    line-height: 1.5em;
    height: 1.5em;
    padding-<?php echo $left; ?>: 0.3em;
}
#pma_navigation_tree .list_container {
    border-<?php echo $left; ?>: 1px solid #666;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $left; ?>: 0.75em;
}
#pma_navigation_tree .last > .list_container {
    border-<?php echo $left; ?>: 0 solid #666;
}

/* Fast filter */
li.fast_filter {
    padding-<?php echo $left; ?>: 0.75em;
    margin-<?php echo $left; ?>: 0.75em;
    padding-<?php echo $right; ?>: 10px;
    border-<?php echo $left; ?>: 1px solid #666;
    list-style: none;
}
li.fast_filter input {
    margin: 3px 0 0 0;
    font-size: 0.8em;
    padding-top:5px;
    padding-bottom:5px;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
    padding-<?php echo $left; ?>: 4px;
    padding-<?php echo $right; ?>: 1.7em;
    width: 100%;
}
li.fast_filter span {
    position: relative;
    <?php echo $right; ?>: 1.5em;
    padding: 0.2em;
    cursor: pointer;
    font-weight: bold;
    color: #800;
    font-size: 0.7em;
}
/* IE10+ has its own reset X */
html.ie li.fast_filter span {
    display: none;
}
html.ie.ie9 li.fast_filter span,
html.ie.ie8 li.fast_filter span {
    display: auto;
}
html.ie li.fast_filter input {
    padding-<?php echo $right; ?>: .2em;
}
html.ie.ie9 li.fast_filter input,
html.ie.ie8 li.fast_filter input {
    padding-<?php echo $right; ?>: 1.7em;
}
li.fast_filter.db_fast_filter {
    border: 0;
    margin-left: 0;
    margin-right: 10px;
}
.database .pageselector a.ajax{
	font-size:14px;
	margin:-9px 2px;
	padding:5px 8px;
	position:relative;
	display:inline-block;
	text-decoration:none;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
	border:1px solid #bbb;
	background-color:#fff;
	font-family:monospace,'Lucida Console','Courier New';
}

#navigation_controls_outer {
    min-height: 21px !important;
}

#navigation_controls_outer.activePointer {
    background-color: transparent !important;
}

#navigation_controls {
    float: right;
    padding-right: 23px;
}

/* Resize handler */
#pma_navigation_resizer{
	top:38px;
    width: 3px;
    height: 100%;
    cursor: col-resize;
    position: fixed;
    <?php echo $left; ?>: 238px;
    z-index: 801;
    background-color:transparent;
}
#pma_navigation_resizer:after{
	top:0;
	left:2px;
	bottom:0;
	content:'';
	height:100%;
	position:absolute;
	border-left:1px solid #ccc;
}
#pma_navigation_collapser {
    top:0;
    width:38px;
    height:38px;
    color:#fff;
	font-size:22px;
    font-weight:300;
    position: fixed;
    line-height:36px;
    background:<?php echo shadeColor($GLOBALS['cfg']['cPri'],-0.8); ?>;
    <?php echo $left; ?>: <?php echo $GLOBALS['cfg']['NaviWidth']; ?>px;
    text-align:center;
    cursor:pointer;
    z-index:800;
    filter:dropshadow(color=#fff, offx=0, offy=1);
}
#pma_navigation_collapser:hover{
	background:<?php echo shadeColor($GLOBALS['cfg']['cPri'],-0.7); ?>;
}
#pma_navigation_collapser[title="Show panel"]{left:0!important}

/* Quick warp links */
.pma_quick_warp {
    margin-top: 5px;
    margin-<?php echo $left; ?>: 2px;
    position: relative;
}
.pma_quick_warp .drop_list {
    float: <?php echo $left; ?>;
    margin-<?php echo $left; ?>: 3px;
    padding: 2px 0;
}
.pma_quick_warp .drop_button {
	margin:4px 0;
	cursor:pointer;
	margin-right:8px;
	padding:.2em .4em;
	background:#f2f2f2;
	display:inline-block;
	border:1px solid #ddd;
}
.pma_quick_warp .drop_list:hover .drop_button {
    background: #fff;
}
.pma_quick_warp .drop_list ul {
	position: absolute;
	margin: 0;
	padding: 0;
	overflow: hidden;
	overflow-y: auto;
	list-style: none;
	background: #fff;
	border:1px #ddd solid;
	-webkit-box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
	box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
	top: 100%;
	<?php echo $left; ?>: 3px;
	<?php echo $right; ?>: 6px;
	display: none;
	z-index: 802;
}
.pma_quick_warp .drop_list:hover ul {
    display: block;
}
.pma_quick_warp .drop_list li {
    white-space: nowrap;
    padding: 0;
    border-radius: 0;
}
.pma_quick_warp .drop_list li img {
    vertical-align: sub;
}
.pma_quick_warp .drop_list li:hover{background-color:<?php echo shadeColor($GLOBALS['cfg']['cPri'],0.2);?>!important}
.pma_quick_warp .drop_list li:hover a{text-decoration:none!important}
.pma_quick_warp .drop_list a {
	display:block;
	padding:0 .3em;
}
.pma_quick_warp .drop_list a.favorite_table_anchor {
    clear: left;
    float: left;
    padding: .1em .3em 0;
}
