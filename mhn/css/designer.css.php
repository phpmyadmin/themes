<?php
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')){ exit(); }
?>
/* Designer */
.input_tab{background-color:#A6C7E1;color:#000}
.content_fullscreen{position:relative;overflow:auto}
#canvas_outer{
	position:relative;
	width:100%;
	display:block;
}
#canvas{background-color:#fff;color:#000}
canvas.designer{
	display:inline-block;
	overflow:hidden;
	text-align:left;
}
canvas.designer *{behavior:url(#default#VML)}
.designer_tab{
	background-color:#fff;
	color:#000;
	border-collapse:collapse;
	border:1px solid #E0E0E0;
	z-index:1;
	-moz-user-select:none;
}
.tab_zag{
	text-align:center;
	cursor:move;
	padding:1px;
	font-weight:bold;
}
.tab_zag_2{
	text-align:center;
	cursor:move;
	padding:1px;
	font-weight:bold;
}
.tab_field{
	background:#fff;
	color:#000;
	cursor:default;
}
.tab_field:hover, .tab_field_3:hover{
	background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;
	color:#000;
	cursor:default;
}
.tab_field_3{
	color:#000;
	cursor:default;
	background-color:#FFE6E6;
}
#designer_hint{
	white-space:nowrap;
	position:absolute;
	background-color:#99FF99;
	color:#000;
	z-index:3;
	border:#00CC66 solid 1px;
	display:none;
}
.scroll_tab{
	overflow:auto;
	width:100%;
	height:500px;
}
.designer_Tabs{
	cursor:default;
	color:#0055bb;
	white-space:nowrap;
	text-decoration:none;
	text-indent:3px;
	font-weight:bold;
	margin-left:2px;
	text-align:<?php echo $left; ?>;
	background-color:#fff;
	border:#ccc solid 1px;
}
.designer_Tabs:hover{
	cursor:default;
	color:#0055bb;
	text-indent:3px;
	font-weight:bold;
	white-space:nowrap;
	text-decoration:none;
	border:#9999FF solid 1px;
	text-align:<?php echo $left; ?>;
}
.owner{font-weight:normal;color:#888}
.option_tab{
	padding-left:2px;
	padding-right:2px;
	width:5px;
}
.select_all{
	vertical-align:top;
	padding-left:2px;
	padding-right:2px;
	cursor:default;
	width:1px;
	color:#000;
	background-repeat:repeat-x;
}
.small_tab{
	vertical-align:top;
	background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;
	color:#fff;
	cursor:default;
	text-align:center;
	font-weight:bold;
	padding-left:2px;
	padding-right:2px;
	width:1px;
	text-decoration:none;
	font-family:monospace,'Lucida Console','Courier New';
}
.small_tab:hover{
	vertical-align:top;
	color:#fff;
	background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;
	cursor:default;
	padding-left:2px;
	padding-right:2px;
	text-align:center;
	font-weight:bold;
	width:1px;
	text-decoration:none;
	font-family:monospace,'Lucida Console','Courier New';
}
.small_tab_pref{
	background-repeat:repeat-x;
	text-align:center;
	width:1px;
}
.small_tab_pref:hover{
	vertical-align:top;
	color:#fff;
	background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;
	cursor:default;
	text-align:center;
	font-weight:bold;
	width:1px;
	text-decoration:none;
}
.butt{
	border:#4477aa solid 1px;
	font-weight:bold;
	height:19px;
	width:70px;
	background-color:#fff;
	color:#000;
	vertical-align:baseline;
}
.L_butt2_1{
	text-decoration:none;
	vertical-align:middle;
	cursor:default;
}
.L_butt2_1:hover{
	color:#000;
	cursor:default;
	text-decoration:none;
	vertical-align:middle;
	background:<?php echo $GLOBALS['cfg']['cLte']; ?>;
}
/* ---------------------------------------------------------------------------*/
.bor{width:10px;height:10px}
#osn_tab{
	position:absolute;
	background-color:#fff;
	color:#000;
}
.designer_header{
	background-color:#EAEEF0;
	color:#000;
	text-align:center;
	margin:0;
	padding:0;
	height:28px;
	z-index:101;
	width:100%;
	position:fixed;
}
.designer_header a, .designer_header span{
	float:left;
	display:block;
	padding:1.5px;
}
.designer_header .M_bord{
	display:block;
	float:<?php echo $left; ?>;
	margin:4px;
	height:20px;
	width:2px;
}
.designer_header a.first{margin-right:1em}
.designer_header a.last{margin-left:1em}
a.M_butt{display:inline-block}
a.M_butt img,a.M_butt_Selected_down img{
	-webkit-filter:grayscale(1);
}
a.M_butt_Selected_down_IE,
a.M_butt_Selected_down{
	border:none;
	color:#fff;
	background-color:<?php echo $GLOBALS['cfg']['cSec']; ?>;
}
a.M_butt_Selected_down_IE:hover,
a.M_butt_Selected_down:hover,
a.M_butt:hover{
	color:#fff;
	background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;
}
#layer_menu{
	z-index:98;
	position:relative;
	float:right;
	background-color:#EAEEF0;
	border:#999 solid 1px;
}
#layer_menu.left{float:left}
#layer_upd_relation{
	position:absolute;
	<?php echo $left; ?>:637px;
	top:224px;
	z-index:100;
}
#layer_new_relation{
	position:absolute;
	<?php echo $left; ?>:636px;
	top:85px;
	z-index:100;
	width:153px;
}
#designer_optionse{
	position:absolute;
	<?php echo $left; ?>:636px;
	top:85px;
	z-index:100;
	width:153px;
}
#layer_menu_sizer{
	background-image:url(<?php echo $theme->getImgPath('designer/resize.png'); ?>);
	cursor:ew-resize;
}
#layer_menu_sizer .icon{margin:0}
.panel{
	position:fixed;
	top:60px;
	<?php echo $right; ?>:0;
	width:350px;
	max-height:500px;
	display:none;
	overflow:auto;
	padding-top:34px;
	z-index:102;
}
a.trigger{
	position:fixed;
	text-decoration:none;
	top:60px;
	<?php echo $right; ?>:0;
	color:#fff;
	padding:10px 40px 10px 15px;
	background:#333 url(<?php echo $theme->getImgPath('designer/plus.png'); ?>) 85% 55% no-repeat;
	border:1px solid #444;
	display:block;
	z-index:102;
}
a.trigger:hover{
	color:#080808;
	background:#fff696 url(<?php echo $theme->getImgPath('designer/plus.png'); ?>) 85% 55% no-repeat;
	border:1px solid #999;
}
a.active.trigger{
	background:#222 url(<?php echo $theme->getImgPath('designer/minus.png'); ?>) 85% 55% no-repeat;
	z-index:999;
}
a.active.trigger:hover{background:#fff696 url(<?php echo $theme->getImgPath('designer/minus.png'); ?>) 85% 55% no-repeat}
.toggle_container .block{
	background-color:#DBE4E8;
	border-top:1px solid #999;
}
.history_table{
	text-align:center;
	background-color:#9999CC;
	cursor:pointer;
}
.history_table2{text-align:center;background-color:#DBE4E8}
#ab{min-width:300px}
#ab .ui-accordion-content{padding:0}
#box{display:none}
#foreignkeychk{
	text-align:<?php echo $left; ?>;
	position:absolute;
	cursor:pointer;
}
.side-menu{
	float:left;
	position:fixed;
	width:auto;
	height:auto;
	background:#efefef;
	border:1px solid #aaa;
	overflow:hidden;
	z-index:50;
	padding:2px;
	margin:2px;
	-webkit-box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
	box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
}
.side-menu.right{float:right;right:0}
.side-menu .hide{display:none}
.side-menu a{
	display:block;
	float:none;
	overflow:hidden;
}
.side-menu img,
.side-menu .text{float:left}
#name-panel{
	text-align:center;
	width:100%;
	font-size:1.2em;
	padding:10px;
	font-weight:bold;
	border-bottom:1px solid #ddd;
}
#container-form{
	width:100%;
	position:absolute;
	left:0;
}
