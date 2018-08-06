<?php

// unplanned execution path
if (! defined('PMA_MINIMUM_COMMON') && ! defined('TESTSUITE')) {
    exit();
}
?>
/*! normalize.css v4.1.1 | MIT License | github.com/necolas/normalize.css */
progress,sub,sup{vertical-align:baseline}button,hr,input{overflow:visible}[type=checkbox],[type=radio],legend{box-sizing:border-box;padding:0}html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}article,aside,details,figcaption,figure,footer,header,main,menu,nav,section,summary{display:block}audio,canvas,progress,video{display:inline-block}audio:not([controls]){display:none;height:0}[hidden],template{display:none}a{background-color:transparent;-webkit-text-decoration-skip:objects}a:active,a:hover{outline-width:0}abbr[title]{border-bottom:none;text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}dfn{font-style:italic}h1{font-size:2em;margin:.67em 0}mark{background-color:#ff0;color:#000}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}img{border-style:none}svg:not(:root){overflow:hidden}code,kbd,pre,samp{font-family:monospace,monospace;font-size:1em}figure{margin:1em 40px}hr{box-sizing:content-box;height:0}button,input,select,textarea{font:inherit;margin:0}optgroup{font-weight:700}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{border-style:none;padding:0}[type=button]:-moz-focusring,[type=reset]:-moz-focusring,[type=submit]:-moz-focusring,button:-moz-focusring{outline:ButtonText dotted 1px}fieldset{border:1px solid silver;margin:0 2px;padding:.35em .625em .75em}legend{color:inherit;display:table;max-width:100%;white-space:normal}textarea{overflow:auto}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-input-placeholder{color:inherit;opacity:.54}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}
*,*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
::-webkit-scrollbar{width:10px;height:10px}
::-webkit-scrollbar-track{background:#ddd}
::-webkit-scrollbar-thumb{background:#aaa}
::-webkit-scrollbar-thumb:hover{background:#888}
::-moz-selection{color:#eee;text-shadow:none;background:<?php echo $GLOBALS['cfg']['cSec']; ?>}
::selection{color:#eee;text-shadow:none;background:<?php echo $GLOBALS['cfg']['cSec']; ?>}
progress[value]{
	height:10px;
	border:none;
	width:100%;
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
	vertical-align:middle;
	background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;
}
progress[value]::-webkit-progress-bar{background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>}
progress[value]::-webkit-progress-value{background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>}
progress[value]::-moz-progress-bar{background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>}
fieldset{border:none}
<?php require_once('mhn.icons.css.php'); ?>
html{font-size:<?php echo $theme->getFontSize(); ?>}
input,select,textarea{font-size:1em}
body{
<?php if (!empty($GLOBALS['cfg']['FontFamily'])) :?>
	font-family:<?php echo $GLOBALS['cfg']['FontFamily']; ?>;
<?php endif; ?>
	padding:0;
	margin:0;
	font-size:12px;
	margin-<?php echo $left; ?>:240px;
	color:<?php echo $GLOBALS['cfg']['MainColor']; ?>;
	background:<?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}
#page_content{
	margin:0 .5em;
	margin-left:1em;
}
<?php if (!empty($GLOBALS['cfg']['FontFamilyFixed'])) :?>
	textarea,
	tt,
	pre,
	code{
	font-family:<?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
	}
<?php endif; ?>
h1{font-size:140%;font-weight:300}
h2{
	margin-top:0;
	font-size:2em;
	font-weight:300;
	text-shadow:0 1px 0 #fff;
	padding:10px 0 10px;
	padding-<?php echo $left; ?>:3px;
	color:#777;
}

/* Hiding icons in the page titles */
h2 img{display:none}
h2 a img{display:inline}
.data,
.data_full_width{margin:0 0 12px}
.data_full_width{width:100%}
h3{font-weight:300}

a,
a:link,
a:visited,
a:active,
button.mult_submit,
.checkall_box+label{text-decoration:none;color:#235a81;cursor:pointer;outline:none}

a:hover,
button.mult_submit:hover,
button.mult_submit:focus,
.checkall_box+label:hover{text-decoration:underline;color:#235a81}

#initials_table{
	background:#f3f3f3;
	border:1px solid #aaa;
	margin-bottom:10px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
}

#initials_table td{padding:8px!important}

#initials_table a{
	border:1px solid #aaa;
	background:#fff;
	padding:4px 8px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
}

#initials_table a.active{
	background:#e5e5e5;
	border:1px solid #666;
	box-shadow:0 0 2px #999;
}
dfn{font-style:normal}
dfn:hover{font-style:normal;cursor:help}
th{font-weight:bold;color:<?php echo $GLOBALS['cfg']['ThColor']; ?>;background:#f3f3f3}
a img{border:0}

hr{
	color:<?php echo $GLOBALS['cfg']['MainColor']; ?>;
	background-color:<?php echo $GLOBALS['cfg']['MainColor']; ?>;
	border:0;
	height:1px;
}
form{padding:0;margin:0;display:inline}
input,
select{outline:none}
input[type=text],
input[type=password],
input[type=number],
input[type=date]{
	color:#555;
	padding:4px;
	background:#fff;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
	border:1px solid #aaa;
}

input[type=text],
input[type=password],
input[type=number],
input[type=date],
input[type=checkbox],
select{margin:6px}

input[type=number]{width:50px}

input[type=text],
input[type=password],
input[type=number],
input[type=date],
select{
	transition:all 0.2s;
	-ms-transition:all 0.2s;
	-webkit-transition:all 0.2s;
	-moz-transition:all 0.2s;
}

input[type=text][disabled],
input[type=text][disabled]:hover,
input[type=password][disabled],
input[type=password][disabled]:hover,
input[type=number][disabled],
input[type=number][disabled]:hover,
input[type=date][disabled],
input[type=date][disabled]:hover,
select[disabled],
select[disabled]:hover{
	background:#e8e8e8;
	box-shadow:none;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
}

input[type=text]:hover,
input[type=text]:focus,
input[type=password]:hover,
input[type=password]:focus,
input[type=number]:hover,
input[type=number]:focus,
input[type=date]:hover,
input[type=date]:focus,
select:focus{
	border:1px solid #7c7c7c;
	background:#fff;
}

input[type=text]:hover,
input[type=password]:hover,
input[type=number]:hover,
input[type=date]:hover{
	box-shadow:0 1px 3px #aaa;
	-webkit-box-shadow:0 1px 3px #aaa;
	-moz-box-shadow:0 1px 3px #aaa;
}

input[type=submit],
input[type=button],
button[type=submit]:not(.mult_submit){
	font-weight:bold !important;
}

input[type=submit],
input[type=button],
button[type=submit]:not(.mult_submit),
input[type=reset],
input[name=submit_reset],
input.button{
	color:#fff;
	border:none;
	margin:6px 14px;
	padding:6px 10px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	text-decoration:none;
	text-transform:uppercase;
	background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;
}

input[type=submit]:hover,
input[type=button]:hover,
button[type=submit]:not(.mult_submit):hover,
input[type=reset]:hover,
input[name=submit_reset]:hover,
input.button:hover{
	cursor:pointer;
	position:relative;
	background-color:<?php echo shadeColor($GLOBALS['cfg']['cPri'], -0.7); ?>;
}

input[type=submit]:active,
input[type=button]:active,
button[type=submit]:not(.mult_submit):active,
input[type=reset]:active,
input[name=submit_reset]:active,
input.button:active{
	position:relative;
	background-color:<?php echo shadeColor($GLOBALS['cfg']['cPri'], -0.5); ?>;
}

input[type=submit]:disabled,
input[type=button]:disabled,
button[type=submit]:not(.mult_submit):disabled,
input[type=reset]:disabled,
input[name=submit_reset]:disabled,
input.button:disabled{
	background:#ccc;
	color:#666;
	text-shadow:none;
}
.chrome input[type=radio],
.chrome input[type=checkbox]{
	width:16px;
	margin:2px;
	height:16px;
	position:relative;
	display:inline-block;
	vertical-align:middle;
	-webkit-appearance:none;
	-moz-appearance:none;
	appearance:none;
}
.chrome input[type=radio]:before,
.chrome input[type=radio]:after,
.chrome input[type=checkbox]:before,
.chrome input[type=checkbox]:after{
	content:'';
	width:inherit;
	height:inherit;
	position:absolute;
	-webkit-transition:all .15s ease-in-out 0s;
	transition:all .15s ease-in-out 0s;
}
.chrome input[type=radio]:before,
.chrome input[type=checkbox]:before{
	background-color:#fff;
	border:1px solid #8c8c8c;
}
.chrome input[type=radio]:before,
.chrome input[type=radio]:after{border-radius:50%}
.chrome input[type=radio]:after{
	top:50%;
	left:50%;
	width:8px;
	height:8px;
	margin-top:-4px;
	margin-left:-4px;
	background-color:#555;
	-webkit-transform:scale(0);
	transform:scale(0);
}
.chrome input[type=radio]:checked:after{-webkit-transform:scale(1);transform:scale(1)}

.chrome input[type=checkbox]:after{
	top:1px;
	left:4px;
	width:8px;
	height:10px;
	border-top:2px solid transparent;
	border-left:2px solid transparent;
	-webkit-transform:rotate(-100deg);
	transform:rotate(-100deg);
}
.chrome input[type=checkbox]:checked:before{border-color:#555}
.chrome input[type=checkbox]:checked:after{
	border-color:#555;
	-webkit-transform:rotate(-145deg);
	transform:rotate(-145deg);
}
.chrome fieldset input[type=radio],
.chrome fieldset input[type=checkbox]{margin:10px 2px}

textarea{overflow:visible;margin:6px}

textarea.char{margin:6px}

fieldset, .preview_sql{
	margin-top:1em;
	padding:1.5em;
	background:#eee;
}

fieldset fieldset{
	margin:.8em;
	background:#fff;
	background:#E8E8E8;

}

fieldset legend{
	font-weight:bold;
	color:#444;
	padding:5px 10px;
	background-color:#fff;
	-moz-box-shadow:<?php echo $GLOBALS['text_dir'] === 'rtl' ? '-' : ''; ?>3px 3px 15px #bbb;
	-webkit-box-shadow:<?php echo $GLOBALS['text_dir'] === 'rtl' ? '-' : ''; ?>3px 3px 15px #bbb;
	box-shadow:<?php echo $GLOBALS['text_dir'] === 'rtl' ? '-' : ''; ?>3px 3px 15px #bbb;
	max-width:100%;
}

.some-margin{margin:1.5em}
button{display:inline}
table caption,
table th,
table td{
	padding:.3em;
	margin:.1em;
	vertical-align:top;
	text-shadow:0 1px 0 #fff;
}
/* 3.4 */
table{border-collapse:collapse}
thead th{border-right:1px solid #fff}
th{text-align:left}
img,
button{vertical-align:middle}

input[type="checkbox"],
input[type="radio"]{vertical-align:-11%}

select{
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	border:1px solid #bbb;
	color:#333;
	padding:4px;
	background:white;
	margin:6px;
}

/* classes */
.clearfloat{clear:both}
.floatleft{float:<?php echo $left; ?>;margin-<?php echo $right; ?>:1em}
.floatright{float:<?php echo $right; ?>}
.center{text-align:center}
.displayblock{display:block}
table.nospacing{border-spacing:0}
table.nopadding tr th, table.nopadding tr td{padding:0}
th.left, td.left{text-align:left}
th.center, td.center{text-align:center}
th.right, td.right{text-align:right;padding-right:1em}
tr.vtop th, tr.vtop td, th.vtop, td.vtop{vertical-align:top}
tr.vmiddle th, tr.vmiddle td, th.vmiddle, td.vmiddle{vertical-align:middle}
tr.vbottom th, tr.vbottom td, th.vbottom, td.vbottom{vertical-align:bottom}
.paddingtop{padding-top:1em}
.separator{color:#fff;text-shadow:0 1px 0 #000}

div.tools{padding:.2em}
div.tools a{color:#3a7ead!important}
div.tools,
fieldset.tblFooters{
	margin-top:0;
	margin-bottom:.5em;
	border-top:0;
	text-align:<?php echo $right; ?>;
	float:none;
	clear:both;
}
div.null_div{
	height:20px;
	text-align:center;
	font-style:normal;
	min-width:50px;
}
fieldset .formelement{
	float:<?php echo $left; ?>;
	margin-<?php echo $right; ?>:.5em;
	white-space:nowrap;
}
fieldset div[class=formelement]{white-space:normal}
button.mult_submit{border:none;background-color:transparent}

table tbody:first-of-type tr:nth-child(odd),
table tbody:first-of-type tr:nth-child(odd) th {
  background: #fff;
}

table tbody:first-of-type tr:nth-child(even),
table tbody:first-of-type tr:nth-child(even) th {
  background: #eee;
}

table tr:nth-child(odd){background:#fff;}
table tr:nth-child(even){background:#eee;}

table tr th, tr{text-align:<?php echo $left; ?>;}

/* marked table rows */
td.marked:not(.nomarker),
table tr.marked:not(.nomarker) td,
table tr.marked:not(.nomarker) th,
table tbody:first-of-type tr.marked:not(.nomarker) th,
table tr.marked:not(.nomarker){background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;color:<?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>}

/* hovered items */
table tbody:first-of-type tr:not(.nopointer):hover,
table tbody:first-of-type tr:not(.nopointer):hover th,
.hover:not(.nopointer){background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;color:<?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>}

/* hovered table rows */
table tr.hover:not(.nopointer) th{background-color:<?php echo $GLOBALS['cfg']['cLte']; ?>;color:<?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>}

/**
 * marks table rows/cells if the db field is in a where condition
 */
.condition{border-color:<?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?> !important}
th.condition{border-width:1px 1px 0 1px;border-style:solid}
td.condition{border-width:0 1px 0 1px;border-style:solid}
tr:last-child td.condition{border-width:0 1px 1px 1px}

<?php if ($GLOBALS['text_dir'] === 'ltr') :?>
.before-condition{border-right:1px solid <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;}
<?php endif; ?>

td.null{font-style:italic}
table .valueHeader{text-align:<?php echo $right; ?>;white-space:normal}
table .value{text-align:<?php echo $right; ?>;white-space:normal}
table [class=value]{white-space:normal}
<?php if (!empty($GLOBALS['cfg']['FontFamilyFixed'])) :?>
.value{font-family:<?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>}
<?php endif; ?>
.attention{color:red;font-weight:bold}
.allfine{color:green}
img.lightbulb{cursor:pointer}
.pdflayout{
	clip:inherit;
	overflow:hidden;
	background-color:#fff;
	display:none;
	border:1px solid #000;
	position:relative;
}
.pdflayout_table{
	background:#D3DCE3;
	color:#000;
	overflow:hidden;
	clip:inherit;
	z-index:2;
	display:inline;
	visibility:inherit;
	cursor:move;
	position:absolute;
	font-size:80%;
	border:1px dashed #000;
}

.cm-sql-doc{text-decoration:none;border-bottom:1px dotted #000;color:inherit!important}
td .icon{margin:0}
td .icon.ic_b_help{margin-left:5px}
.selectallarrow{margin-<?php echo $right; ?>:.3em;margin-<?php echo $left; ?>:.6em}

#pma_errors, #pma_demo, #pma_footer{padding:0 0.5em}

.success h1,.notice h1,div.error h1{border-bottom:2px solid;font-weight:bold;text-align:<?php echo $left; ?>;margin:0 0 .2em 0}
div.success,div.notice,div.error{
	margin:.5em 0 0.5em;
	background-repeat:no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') :?>
	background-position:10px 50%;
	padding:10px 10px 10px 10px;
	<?php else :?>
	background-position:99% 50%;
	padding:10px 35px 10px 10px;
	<?php endif; ?>
}
.success a,.notice a,.error a{text-decoration:underline}
.success{color:#fff;background-color:#8CC152}
.notice{color:#fff;background-color:#4A89DC}
.error{color:#fff;background:#E9573F}
.confirmation{color:#000;background-color:pink}

.new_central_col{width:100%;}
.tblcomment{font-size:70%;font-weight:normal;color:#000099}
.tblHeaders{
	font-weight:bold;
	color:<?php echo $GLOBALS['cfg']['ThColor']; ?>;
	background:<?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

div.tools,
.tblFooters{
	font-weight:normal;
	color:<?php echo $GLOBALS['cfg']['ThColor']; ?>;
	background:<?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

.tblHeaders a:link,
.tblHeaders a:active,
.tblHeaders a:visited,
div.tools a:link,
div.tools a:visited,
div.tools a:active,
.tblFooters a:link,
.tblFooters a:active,
.tblFooters a:visited{color:#0000FF}

.tblHeaders a:hover,
div.tools a:hover,
.tblFooters a:hover{color:#FF0000}
.noPrivileges{color:#FF0000;font-weight:bold}

.disabled,
.disabled a:link,
.disabled a:active,
.disabled a:visited{color:#666}
.disabled a:hover{color:#666;text-decoration:none}

tr.disabled td,td.disabled{background-color:#f3f3f3;color:#aaa}
.nowrap{white-space:nowrap}

#loginform h1,
#loginform a.logo{display:block;text-align:center}
#loginform h1,
#loginform fieldset legend,
#loginform .container>a img{display:none}
#loginform{
	margin:auto;
	text-align:center;
	background:<?php echo $GLOBALS['cfg']['cPri']; ?>;
	background:url(<?php echo $GLOBALS['cfg']['imgPath'] . 'main-bg&a=' . str_replace('#', 'h_', $GLOBALS['cfg']['cPri']) . '&b=' . str_replace('#', 'h_', $GLOBALS['cfg']['cSec']) . '&c=' . str_replace('#', 'h_', $GLOBALS['cfg']['cLte']); ?>);
	background-size:cover;
	background-attachment:fixed;
}
#loginform #page_content{margin:0 1em}
#loginform .container{
	text-align:<?php echo $left; ?>;
	max-width:30em;
	width:100%;
	margin:0 auto;
	margin-top:5%;
	text-align:inherit;
	background-color:#fff;
	-webkit-box-shadow:0 17px 50px 0 rgba(0,0,0,.19),0 12px 15px 0 rgba(0,0,0,.24);
	box-shadow:0 17px 50px 0 rgba(0,0,0,.19),0 12px 15px 0 rgba(0,0,0,.24);
}
#loginform .container>a{
	margin:0 auto;
	padding:10px;
	margin-top:20px;
	text-decoration:none;
	display:inline-block;
	pointer-events:none;
}
#loginform .container>a:after{
	color:<?php echo $GLOBALS['cfg']['cSec']; ?>;
	font-size:24px;
	font-weight:700;
	content:'phpMyAdmin';
	text-transform:uppercase;
}
#loginform fieldset{
	margin:0;
	border:none;
	padding:1em 1.5em;
	padding-top:0;
	background-color:transparent;
}
#loginform select{
	margin:0;
	width:100%;
	margin-top:10px;
	border:none;
	border-bottom:2px solid #ccc;
	border-radius:0;
}
#loginform select:focus{border-color:<?php echo $GLOBALS['cfg']['cPri']; ?>}
.login select,
.login input[type=text],
.login input[type=password]{
	margin:0;
	border:none;
	display:block;
	padding:5px 0;
	border-radius:0;
	box-sizing:border-box;
	background:transparent;
	border-bottom:2px solid #ccc;
	-webkit-box-shadow:none;
	box-shadow:none;
}
.login input[type="text"],
.login input[type="password"]{width:100%}
.login label{float:<?php echo $left; ?>;margin-top:10px;font-size:12px;text-transform:uppercase}
.login #input_username,
.login #input_password{padding-left:28px;background-position:4px 4px;background-repeat:no-repeat}
.login #input_username{background-image:url(<?php echo $GLOBALS['cfg']['imgPath'] . 'rights'; ?>)}
.login #input_password{background-image:url(<?php echo $GLOBALS['cfg']['imgPath'] . 'passwd'; ?>)}
.login #input_username:focus{background-image:url(<?php echo $GLOBALS['cfg']['imgPath'] . 'rights&c=h_' . str_replace('#', '', $GLOBALS['cfg']['cPri']); ?>)}
.login #input_password:focus{background-image:url(<?php echo $GLOBALS['cfg']['imgPath'] . 'passwd&c=h_' . str_replace('#', '', $GLOBALS['cfg']['cPri']); ?>)}
.login select:focus,
.login input[type=text]:focus,
.login input[type=password]:focus{border-color:<?php echo $GLOBALS['cfg']['cPri']; ?>}
.login .item{margin-bottom:15px}
.login #input_go{margin:0 auto;min-width:80px;margin-bottom:8px}
.login .tblFooters{text-align:center}
#loginform .error{margin:0;padding:0;color:#C62828;border:none!important;background:transparent}
#loginform #pma_errors .error{padding-bottom:10px}
.commented_column{border-bottom:1px dashed #000}
.column_attribute{font-size:70%}

#floating_menubar{left:-3px!important}
#topmenu a{text-shadow:0 1px 0 #fff;text-transform:uppercase}
#topmenu .error{background:#eee;border:0 !important;color:#aaa}
#topmenu .tabactive {background: #fff!important}
.scrollindicator {display: none}
ul#topmenu,
ul#topmenu2,
ul.tabs{font-weight:bold;list-style-type:none;margin:0;padding:0}
ul#topmenu2{margin:.25em .5em 0;height:2em;clear:both}
ul#topmenu li,ul#topmenu2 li{float:<?php echo $left; ?>;margin:0;vertical-align:middle}
#topmenu img,#topmenu2 img{margin-right:.5em;vertical-align:-3px}
.menucontainer{background-color:#fff}
.tabactive{background:#fff!important}
ul#topmenu2 a{display:block;margin:7px 6px 7px;margin-<?php echo $left; ?>:0;padding:4px 10px;white-space:nowrap;background:#f2f2f2}
fieldset.caution a{color:#FF0000}
fieldset.caution a:hover{color:#fff;background-color:#FF0000}
#topmenu{margin-top:.5em;padding:.1em .3em}
ul#topmenu ul{
	-moz-box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
	-webkit-box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
	box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
}
ul#topmenu ul.only{<?php echo $left; ?>:0}
ul#topmenu > li:first-child{border-left:0}
ul#topmenu a,
ul#topmenu span{padding:.6em}
ul#topmenu a{padding:1em}
#topmenu .active>a{color:<?php echo $GLOBALS['cfg']['cSec']; ?>}
ul#topmenu ul li:first-child a{border-width:0}
ul#topmenu > li > a:hover,
ul#topmenu > li > .tabactive{text-decoration:none}
ul#topmenu ul a:hover,ul#topmenu ul .tabactive{text-decoration:none}
ul#topmenu2 a.tab:hover,
ul#topmenu2 a.tabactive{color:<?php echo $GLOBALS['cfg']['cSec']; ?>;background-color:<?php echo $GLOBALS['cfg']['BgOne']; ?>;text-decoration:none}
ul#topmenu > li.active{border-right:0;border-bottom-color:#fff}

div#dataDisplay input,
div#dataDisplay select{margin:0;margin-<?php echo $right; ?>:.5em}
div#dataDisplay th{line-height:2em}
table#tableFieldsId{width:100%}

table.calendar{width:100%}
table.calendar td{text-align:center}
table.calendar td a{display:block}
table.calendar td a:hover{background-color:#CCFFCC}
table.calendar th{background-color:#D3DCE3}
table.calendar td.selected{background-color:#FFCC99}
img.calendar{border:none}
form.clock{text-align:center}

div#tablestatistics table{float:<?php echo $left; ?>;margin-bottom:.5em;margin-<?php echo $right; ?>:1.5em;margin-top:.5em;min-width:16em}
#tableuserrights td,#tablespecificuserrights td,#tabledatabases td{vertical-align:middle}
#topmenucontainer{padding-<?php echo $right; ?>:1em;width:100%;background-color:#eee}

#serverinfo{
	height:38px;
	padding:.8em;
	padding-<?php echo $left; ?>:3.5em;
	text-shadow:0 1px 0 #000;
	width:10000px;
	overflow:hidden;
	background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;
}
#serverinfo .item{white-space:nowrap;color:#fff}
#page_nav_icons{position:fixed;top:0;<?php echo $right; ?>:0;z-index:99;padding:.25em 0}
#goto_pagetop, #lock_page_icon, #page_settings_icon{padding:.25em}

#goto_pagetop,
#lock_page_icon,
#page_settings_icon[style*="inline"]{
	top:-3px;
	width:38px;
	height:38px;
	text-align:center;
	position:relative;
	line-height:30px;
	display:inline-block!important;
	background-color:<?php echo shadeColor($GLOBALS['cfg']['cPri'], -0.8); ?>;
}
#lock_page_icon:empty{display:none!important}

#goto_pagetop:hover,
#page_settings_icon:hover{background-color:<?php echo shadeColor($GLOBALS['cfg']['cPri'], -0.7); ?>}
#page_settings_icon{cursor:pointer;display:none}
#page_settings_modal{display:none}
#pma_navigation_settings{display:none}

#span_table_comment{
	font-weight:bold;
	font-style:italic;
	white-space:nowrap;
	margin-left:10px;
	color:#D6D6D6;
	text-shadow:none;
}
#serverinfo img{margin:0 .4em;margin-<?php echo $left; ?>:.2em}
#serverinfo .separator{margin:0 .5em}
#textSQLDUMP{
	width:95%;
	height:95%;
	font-size:110%;
	font-family:Consolas, "Courier New", Courier, mono;
}

#TooltipContainer{
	position:absolute;
	z-index:99;
	width:20em;
	height:auto;
	overflow:visible;
	visibility:hidden;
	background-color:#ffffcc;
	color:#006600;
	border:.1em solid #000;
	padding:.5em;
}

#fieldset_add_user_login div.item{
	border-bottom:1px solid silver;
	padding-bottom:.3em;
	margin-bottom:.3em;
}

#fieldset_add_user_login label{
	float:<?php echo $left; ?>;
	display:block;
	width:10em;
	max-width:100%;
	text-align:<?php echo $right; ?>;
	padding-<?php echo $right; ?>:.5em;
}

#fieldset_add_user_login span.options #select_pred_username,
#fieldset_add_user_login span.options #select_pred_hostname,
#fieldset_add_user_login span.options #select_pred_password{
	width:100%;
	max-width:100%;
}

#fieldset_add_user_login span.options{
	float:<?php echo $left; ?>;
	display:block;
	width:12em;
	max-width:100%;
	padding-<?php echo $right; ?>:.5em;
}
#fieldset_add_user_login input{width:12em;clear:<?php echo $right; ?>;max-width:100%}
#fieldset_add_user_login span.options input{width:auto}
#fieldset_user_priv div.item{float:<?php echo $left; ?>;width:9em;max-width:100%}
#fieldset_user_priv div.item div.item{float:none}
#fieldset_user_priv div.item label{white-space:nowrap}
#fieldset_user_priv div.item select{width:100%}
#fieldset_user_global_rights fieldset{float:<?php echo $left; ?>}
#fieldset_user_group_rights fieldset{float:<?php echo $left; ?>}
#fieldset_user_global_rights>legend input{margin-<?php echo $left; ?>:2em}


.linkElem:hover{text-decoration:underline;color:#235a81;cursor:pointer}
h3#serverstatusqueries span{font-size:60%;display:inline}
.buttonlinks{float:<?php echo $right; ?>;white-space:nowrap}

fieldset#tableFilter{padding: 0.1em 1em;}
div#serverStatusTabs{margin-top:1em}
caption a.top{float:<?php echo $right; ?>}
div#serverstatusquerieschart{float:<?php echo $left; ?>;width:500px;height:350px;padding-<?php echo $left; ?>:30px}
table#serverstatusqueriesdetails,table#serverstatustraffic{float:<?php echo $left; ?>}
table#serverstatusqueriesdetails th{min-width:35px}
table#serverstatusvariables{width:100%;margin-bottom:1em}
table#serverstatusvariables .name{width:18em;white-space:nowrap}
table#serverstatusvariables .value{width:6em}
table#serverstatusconnections{float:<?php echo $left; ?>;margin-<?php echo $left; ?>:30px}
div#serverstatus table tbody td.descr a,
div#serverstatus table .tblFooters a{white-space:nowrap}
div.liveChart{clear:both;min-width:500px;height:400px;padding-bottom:80px}
#addChartDialog input[type="text"]{margin:0;padding:3px}
div#chartVariableSettings{border:1px solid #ddd;background-color:#E6E6E6;margin-left:10px}
table#chartGrid td{padding:3px;margin:0}
table#chartGrid div.monitorChart{
	background:#EBEBEB;
	overflow:hidden;
	border:none;
}
div.tabLinks{margin-left:0.3em;float:<?php echo $left; ?>;padding:5px 0}
div.tabLinks a, div.tabLinks label{margin-right:7px}
div.tabLinks .icon{margin:-0.2em 0.3em 0 0}
.popupContent{
	display:none;
	position:absolute;
	border:1px solid #CCC;
	margin:0;
	padding:3px;
	-moz-box-shadow:<?php echo $GLOBALS['text_dir'] === 'rtl' ? '-' : ''; ?>2px 2px 3px #666;
	-webkit-box-shadow:<?php echo $GLOBALS['text_dir'] === 'rtl' ? '-' : ''; ?>2px 2px 3px #666;
	box-shadow:<?php echo $GLOBALS['text_dir'] === 'rtl' ? '-' : ''; ?>2px 2px 3px #666;
	background-color:#fff;
	z-index:2;
}
div#logTable{padding-top:10px;clear:both}
div#logTable table{width:100%}
div#queryAnalyzerDialog{min-width:700px}
div#queryAnalyzerDialog div.CodeMirror-scroll{height:auto}
div#queryAnalyzerDialog div#queryProfiling{height:300px}
div#queryAnalyzerDialog td.explain{width:250px}
div#queryAnalyzerDialog table.queryNums{display:none;border:0;text-align:left}
.smallIndent{padding-<?php echo $left; ?>:7px}

#serverVariables{table-layout:fixed;width:100%}
#serverVariables .var-row > td{
	white-space:nowrap;
	overflow:hidden;
	text-overflow:ellipsis;
	line-height:2em;
}
#serverVariables .var-header{
	color:<?php echo $GLOBALS['cfg']['ThColor']; ?>;
	background:#f3f3f3;
	font-weight:bold;
}
#serverVariables .var-header{
	text-align:<?php echo $left; ?>;
}
#serverVariables .var-row{
	padding:0.5em;
	min-height:18px;
}
#serverVariables .var-action{
	width:120px;
}
#serverVariables .var-name{
	float:<?php echo $left; ?>;
	font-weight:bold;
}
#serverVariables .var-name.session{
	font-weight:normal;
	font-style:italic;
}
#serverVariables .var-value{
	width:50%;
	float:<?php echo $right; ?>;
	text-align:<?php echo $right; ?>;
}
#serverVariables .var-doc{
	overflow:visible;
	float:<?php echo $right; ?>;
}

/* server variables editor */
#serverVariables .editLink{
	padding-<?php echo $right; ?>:1em;
	float:<?php echo $left; ?>;
	font-family:sans-serif;
}
#serverVariables .serverVariableEditor{
	width:100%;
	overflow:hidden;
}
#serverVariables .serverVariableEditor input{
	width:100%;
	margin:0 0.5em;
	box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
	height:2.2em;
}
#serverVariables .serverVariableEditor div{
	display:block;
	overflow:hidden;
	padding-<?php echo $right; ?>:1em;
}
#serverVariables .serverVariableEditor a{
	float:<?php echo $right; ?>;
	margin:0 0.5em;
	line-height:2em;
}

p.notice{
	margin:1.5em 0;
	border:1px solid #000;
	background-repeat:no-repeat;
	<?php if ($GLOBALS['text_dir'] === 'ltr') :?>
		background-position:10px 50%;
		padding:10px 10px 10px 25px;
	<?php else :?>
		background-position:99% 50%;
		padding:25px 10px 10px 10px
	<?php endif; ?>
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	-moz-box-shadow:0 1px 2px #fff inset;
	-webkit-box-shadow:0 1px 2px #fff inset;
	box-shadow:0 1px 2px #fff inset;
	background:#555;
	color:#d4fb6a;
}

p.notice a{
	color:#fff;
	text-decoration:underline;
}

div#profilingchart{width:850px;height:370px;float:<?php echo $left; ?>}
#profilingchart .jqplot-highlighter-tooltip{top:auto!important;left:11px;bottom:24px}

#resizer{border:1px solid silver}
#inner-resizer{padding:10px}
.chartOption{float:<?php echo $left; ?>;margin-<?php echo $right; ?>:40px}

#togglequerybox{margin:0 10px}
#serverstatus h3{margin:15px 0;font-weight:normal;color:#999;font-size:1.7em}
#sectionlinks{padding:10px;background:#f3f3f3}
#sectionlinks a,
.buttonlinks a,
a.button{
	font-weight:bold;
	text-shadow:0 1px 0 #fff;
	line-height:35px;
	margin-<?php echo $left; ?>:7px;
	padding:3px 7px;
	color:#111 !important;
	text-decoration:none;
	white-space:nowrap;
}
#sectionlinks a:hover,
.buttonlinks a:hover,
a.button:hover{text-decoration:underline}
div#sqlquerycontainer{float:<?php echo $left; ?>;width:69%}
div#tablefieldscontainer{float:<?php echo $right; ?>;width:29%;margin-top:-20px}
div#tablefieldscontainer select{width:100%;background:#fff}
textarea#sqlquery{
	width:100%;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	border:1px solid #aaa;
	padding:5px;
	font-family:inherit;
}
textarea#sql_query_edit{height:7em;width:95%;display:block}
div#queryboxcontainer div#bookmarkoptions{margin-top:.5em}
#mysqlmaininformation,#pmamaininformation{float:<?php echo $left; ?>;width:49%}
#maincontainer ul{list-style-type:disc;vertical-align:middle}
#maincontainer li{margin-bottom:.3em}
#full_name_layer{
	position:absolute;
	padding:2px;
	margin-top:-3px;
	z-index:801;
	border-radius:3px;
	border:solid 1px #888;
	background:#fff;
}
li.no_bullets{list-style-type:none!important;margin-left:-25px!important}


#body_browse_foreigners{background:<?php echo $GLOBALS['cfg']['NaviBackground']; ?>;margin:.5em .5em 0 .5em}
#bodythemes{width:500px;margin:auto;text-align:center}
#bodythemes img{border:.1em solid #000}
#bodythemes a:hover img{border:.1em solid red}
#fieldset_select_fields{float:<?php echo $left; ?>}
#selflink{
	clear:both;
	display:block;
	margin-top:1em;
	margin-bottom:1em;
	width:98%;
	margin-<?php echo $left; ?>:1%;
	border-top:.1em solid silver;
	text-align:<?php echo $right; ?>;
}

#table_innodb_bufferpool_usage,
#table_innodb_bufferpool_activity{float:<?php echo $left; ?>}

#div_mysql_charset_collations table{float:<?php echo $left; ?>}
#div_mysql_charset_collations table th,
#div_mysql_charset_collations table td{padding:0.4em}
#div_mysql_charset_collations table th#collationHeader{width:35%}
.operations_half_width{width:48%;float:<?php echo $left; ?>}
.operations_half_width input[type=text],
.operations_half_width input[type=password],
.operations_half_width input[type=number],
.operations_half_width select{width:95%}
.operations_half_width input[type=text].halfWidth,
.operations_half_width input[type=password].halfWidth,
.operations_half_width input[type=number].halfWidth,
.operations_half_width select.halfWidth{width:40%}
.operations_half_width ul{list-style-type:none;padding:0}
.operations_full_width{width:100%;clear:both}
#qbe_div_table_list{float:<?php echo $left; ?>}
#qbe_div_sql_query{float:<?php echo $left; ?>}
label.desc{width:30em;float:<?php echo $left; ?>}
label.desc sup{position:absolute}

code.sql,
div.sqlvalidate{
	display:block;
	padding:1em;
	margin-top:0;
	margin-bottom:0;
	max-height:10em;
	overflow:auto;
	direction:ltr;
}

code.php {
  display: block;
  padding-left: 0.3em;
  margin-top: 0;
  margin-bottom: 0;
  max-height: 10em;
  overflow: auto;
  direction: ltr;
}

.result_query div.sqlOuter{background:<?php echo $GLOBALS['cfg']['BgOne']; ?>}
.result_query .success, .result_query .error{margin-bottom:0}
#PMA_slidingMessage code.sql,div.sqlvalidate{background:<?php echo $GLOBALS['cfg']['BgOne']; ?>}
#main_pane_left{width:60%;min-width:260px;float:<?php echo $left; ?>;padding-top:1em}

#main_pane_right{
	overflow:hidden;
	min-width:160px;
	padding-top:1em;
	padding-<?php echo $left; ?>:1em;
	padding-<?php echo $right; ?>:.5em;
}

.group{
	background:#f3f3f3;
	margin-bottom:1em;
	padding-bottom:1em;
}

.group h2{
	background-color:<?php echo shadeColor($GLOBALS['cfg']['cPri'], .7); ?>;
	padding:.2em .3em;
	margin-top:0;
	color:#fff;
	font-size:1.4em;
	font-weight:300;
	text-shadow:0 1px 0 #777;
}

.group-cnt{
	padding:0;
	padding-<?php echo $left; ?>:.5em;
	display:inline-block;
	width:98%;
}

textarea#partitiondefinition{
	height:3em;
}
.group #li_select_fontsize{display:none}
.group #li_select_theme form:after{content:'Color:<?php echo ucwords($GLOBALS['cfg']['scheme']); ?>'}

.hide{display:none}
#list_server{list-style-type:none;padding:0}

div.upload_progress{width:400px;margin:3em auto;text-align:center}
div.upload_progress_bar_outer{border:1px solid #000;width:202px;position:relative;margin:0 auto 1em;color:<?php echo $GLOBALS['cfg']['MainColor']; ?>}
div.upload_progress_bar_inner{
	background-color:<?php echo $GLOBALS['cfg']['NaviPointerBackground']; ?>;
	width:0;
	height:12px;
	margin:1px;
	overflow:hidden;
	color:<?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
	position:relative;
}

div.upload_progress_bar_outer div.percentage{top:0;position:absolute;<?php echo $left; ?>:0;width:202px}
div.upload_progress_bar_inner div.percentage{top:-1px;<?php echo $left; ?>:-1px}
div#statustext{margin-top:.5em}
table#serverconnection_src_remote,
table#serverconnection_trg_remote,
table#serverconnection_src_local,
table#serverconnection_trg_local{float:<?php echo $left; ?>}

input[type=text].invalid_value,
input[type=password].invalid_value,
input[type=number].invalid_value,
input[type=date].invalid_value,
select.invalid_value,
.invalid_value{background:#FFCCCC}


.ajax_notification{
	top:0;
	position:fixed;
	margin-top:0;
	margin-right:auto;
	margin-bottom:0;
	margin-<?php echo $left; ?>:auto;
	padding:5px;
	width:350px;

	z-index:1100;
	text-align:center;
	display:inline;
	left:0;
	right:0;
	background-image:url(<?php echo $theme->getImgPath('ajax_clock_small.gif'); ?>);
	background-repeat:no-repeat;
	background-position:2%;
	border:1px solid #e2b709;
 }

/* additional styles */
.ajax_notification{
	margin-top:200px;
	color:#fff;
	background:<?php /*#ffe57e*/ echo $GLOBALS['cfg']['cSec']; ?>;
	border-radius:2px;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	box-shadow:0 5px 90px #888;
	-moz-box-shadow:0 5px 90px #888;
	-webkit-box-shadow:0 5px 90px #888;
	text-transform:uppercase;
	border:1px solid <?php echo shadeColor($GLOBALS['cfg']['cSec'], -0.65); ?>;
}
.ajax_notification .error,
.ajax_notification .success{margin:-6px}
/*#loading_parent{width:100%;position:relative;}*/
#loading_parent{
	top:0;
	left:0;
	right:0;
	bottom:0;
	width:100%;
	height:100%;
	z-index:1000;
	position:fixed;
	background-color:rgba(0,0,0,.5);
}
#loading_parent:empty{display:none}

.export_table_list_container{display:inline-block;max-height:20em;overflow-y:scroll}
.export_table_select th{text-align:center;vertical-align:middle}
.export_table_select .all{font-weight:bold;border-bottom:1px solid black}
.export_structure, .export_data{text-align:center}
.export_table_name{vertical-align:middle}
.exportoptions h3,.importoptions h3{border-bottom:1px #999 solid;font-size:110%}
.exportoptions ul,.importoptions ul,.format_specific_options ul{list-style-type:none;margin-bottom:15px}
.exportoptions li,.importoptions li{margin:7px}
.exportoptions label,.importoptions label,.exportoptions p,.importoptions p{margin:5px;float:none}

#csv_options label.desc,#ldi_options label.desc,#latex_options label.desc,#output label.desc{float:<?php echo $left; ?>;width:15em}
.format_specific_options h3{margin:10px 0 0;margin-<?php echo $left; ?>:10px;border:0}
.format_specific_options{border:1px solid #999;margin:7px 0;padding:3px}
p.desc{margin:5px}

select#db_select,select#table_select{width:400px}
.export_sub_options{margin:20px 0 0;margin-<?php echo $left; ?>:30px}
.export_sub_options h4{border-bottom:1px #999 solid}
.export_sub_options li.subgroup{display:inline-block;margin-top:0}
.export_sub_options li{margin-bottom:0}
#output_quick_export{display:none}

.importoptions #import_notification{margin:10px 0;font-style:italic}
input#input_import_file{margin:5px}
.formelementrow{margin:5px 0 5px 0}

#filterText{vertical-align: baseline;}

#popup_background{
	display:none;
	position:fixed;
	_position:absolute; /* hack for IE6 */
	width:100%;
	height:100%;
	top:0;
	<?php echo $left; ?>:0;
	background:#000;
	z-index:1000;
	overflow:hidden;
}

#fieldsForm ul.table-structure-actions{margin:0;padding:0;list-style:none}
#fieldsForm ul.table-structure-actions li{float:<?php echo $left; ?>;margin-<?php echo $right; ?>:0.3em}
#fieldsForm ul.table-structure-actions .submenu li{padding:0;margin:0}
#fieldsForm ul.table-structure-actions .submenu li span{padding:0.3em;margin:0.1em}
#structure-action-links a{margin-<?php echo $right; ?>:1em}
#addColumns input[type="radio"]{margin:3px 0 0;margin-<?php echo $left; ?>:1em}

#index_frm .index_info input,
#index_frm .index_info select{
	margin:0;
	box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
}
#index_frm .index_info div{padding:.2em 0}
#index_frm .index_info .label{float:<?php echo $left; ?>;min-width:12em}
#index_frm .slider{width:10em;margin:.6em;float:<?php echo $left; ?>}
#index_frm .add_fields{float:<?php echo $left; ?>}
#index_frm .add_fields input{margin-<?php echo $left; ?>:1em}
#index_frm input{margin:0}
#index_frm td{vertical-align:middle}
table#index_columns{width:100%}
table#index_columns select{width:85%;float:right}
#move_columns_dialog div{padding:1em}
#move_columns_dialog ul{list-style:none;margin:0;padding:0}

#move_columns_dialog li{
	background:<?php echo $GLOBALS['cfg']['ThBackground']; ?>;
	border:1px solid #aaa;
	color:<?php echo $GLOBALS['cfg']['ThColor']; ?>;
	font-weight:bold;
	margin:.4em;
	padding:.2em;
	-webkit-border-radius:2px;
	-moz-border-radius:2px;
	border-radius:2px;
}
.config-form ul.tabs{margin:1.1em .2em 0;padding:0 0 .3em 0;list-style:none;font-weight:bold}
.config-form ul.tabs li{float:<?php echo $left; ?>;margin-bottom:-1px}
.config-form ul.tabs li a{
	color:#555;
	display:block;
	margin:.1em .2em 0;
	white-space:nowrap;
	text-decoration:none;
	padding:7px 10px;
	text-shadow:0 1px 0 #fff;
	border-bottom:2px solid transparent;
}
.config-form ul.tabs li a:hover{color:<?php echo $GLOBALS['cfg']['cSec']; ?>}
.config-form ul.tabs li.active a,
.config-form ul.tabs li.active a:hover{
	margin-top:1px;
	text-shadow:none;
	color:<?php echo $GLOBALS['cfg']['cSec']; ?>;
	border-color:<?php echo $GLOBALS['cfg']['cSec']; ?>;
}
.config-form fieldset{
	margin-top:0;
	padding:0;
	clear:both;
	-webkit-border-radius:0;
	-moz-border-radius:0;
	border-radius:0;
}
.config-form legend{display:none}
.config-form fieldset p{
	margin:0;
	padding:.5em;
	background:#fff;
	border-top:0;
}
.config-form fieldset .errors{
	margin:0 -2px 1em;
	padding:.5em 1.5em;
	background:#FBEAD9;
	border:0 #C83838 solid;
	border-width:1px 0;
	list-style:none;
	font-family:sans-serif;
	font-size:small;
}
.config-form fieldset .inline_errors{
	margin:.3em .3em .3em;
	margin-<?php echo $left; ?>:0;
	padding:0;
	list-style:none;
	color:#9A0000;
	font-size:small;
}
.config-form fieldset th{
	padding:.3em .3em .3em;
	padding-<?php echo $left; ?>:.5em;
	text-align:<?php echo $left; ?>;
	vertical-align:top;
	width:40%;
	background:transparent;
	filter:none;
}
.config-form fieldset .doc,
.config-form fieldset .disabled-notice{margin-<?php echo $left; ?>:1em}
.config-form fieldset .disabled-notice{font-size:80%;text-transform:uppercase;color:#E00;cursor:help}
.config-form fieldset td{padding-top:.3em;padding-bottom:.3em;vertical-align:top}
.config-form fieldset th small{display:block;font-weight:normal;font-family:sans-serif;font-size:x-small;color:#444}
.config-form fieldset th,
.config-form fieldset td{border-top:1px <?php echo $GLOBALS['cfg']['BgTwo']; ?> solid;border-<?php echo $right; ?>:none}
fieldset .group-header th{background:<?php echo $GLOBALS['cfg']['BgTwo']; ?>}
fieldset .group-header + tr th{padding-top:.6em}
fieldset .group-field-1 th,
fieldset .group-header-2 th{padding-<?php echo $left; ?>:1.5em}
fieldset .group-field-2 th,
fieldset .group-header-3 th{padding-<?php echo $left; ?>:3em}
fieldset .group-field-3 th{padding-<?php echo $left; ?>:4.5em}
fieldset .disabled-field th,
fieldset .disabled-field th small,
fieldset .disabled-field td{color:#666;background-color:#ddd}
.config-form .lastrow{background:<?php echo $GLOBALS['cfg']['ThBackground']; ?>;padding:.5em;text-align:center}
.config-form .lastrow input{font-weight:bold}

.config-form span.checkbox{padding:2px;display:inline-block}
.config-form .custom{background:#FFC}
.config-form span.checkbox.custom{padding:1px;border:1px #EDEC90 solid;background:#FFC}
.config-form .field-error{border-color:#A11!important}

.config-form input[type="text"],
.config-form input[type="password"],
.config-form input[type="number"],
.config-form select,
.config-form textarea{border:1px #A7A6AA solid;height:auto}

.config-form input[type="text"]:focus,
.config-form input[type="password"]:focus,
.config-form input[type="number"]:focus,
.config-form select:focus,
.config-form textarea:focus{border:1px #6676FF solid;background:#F7FBFF}

.config-form .field-comment-mark{
	font-family:serif;
	color:#007;
	cursor:help;
	padding:0 .2em;
	font-weight:bold;
	font-style:italic;
}
.config-form .field-comment-warning{color:#A00}
.config-form dd{margin-<?php echo $left; ?>:.5em}
.config-form dd:before{content:"\25B8"}
.click-hide-message{cursor:pointer}
.prefsmanage_opts{margin-<?php echo $left; ?>:2em}
#prefs_autoload{margin-bottom:.5em;margin-left:.5em}
#placeholder .button{position:absolute;cursor:pointer}
#placeholder div.button{
	font-size:smaller;
	color:#999;
	background-color:#eee;
	padding:2px;
}
.wrapper{float:<?php echo $left; ?>;margin-bottom:1.5em}
.toggleButton{
	position:relative;
	cursor:pointer;
	font-size:.8em;
	text-align:center;
	line-height:1.4em;
	height:1.55em;
	overflow:hidden;
	border-right:.1em solid #888;
	border-left:.1em solid #888;
	-webkit-border-radius:.3em;
	-moz-border-radius:.3em;
	border-radius:.3em;
}
.toggleButton table,
.toggleButton td,
.toggleButton img{padding:0;position:relative}
.toggleButton .container{position:absolute}
.toggleButton .container td{background-image:none;background:none}
.toggleButton .toggleOn{color:#fff;padding:0 1em;text-shadow:0 0 .2em #000}
.toggleButton .toggleOff{padding:0 1em}
.doubleFieldset fieldset{width:48%;float:<?php echo $left; ?>;padding:0}
.doubleFieldset fieldset.left{margin-<?php echo $right; ?>:1%}
.doubleFieldset fieldset.right{margin-<?php echo $left; ?>:1%}
.doubleFieldset legend{margin-<?php echo $left; ?>:1.5em}
.doubleFieldset div.wrap{padding:1.5em}
#table_name_col_no_outer{margin-top:45px}
#table_name_col_no{top:78px;width:100%;position:fixed;background:#fff}

#table_columns input[type="text"],
#table_columns input[type="password"],
#table_columns input[type="number"],
#table_columns select{
	width:10em;
	box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
}
#placeholder{position:relative;border:1px solid #aaa;float:<?php echo $right; ?>;overflow:hidden}
.placeholderDrag{cursor:move}
#placeholder .button{position:absolute}
#left_arrow{left:8px;top:26px}
#right_arrow{left:26px;top:26px}
#up_arrow{left:17px;top:8px}
#down_arrow{left:17px;top:44px}
#zoom_in{left:17px;top:67px}
#zoom_world{left:17px;top:85px}
#zoom_out{left:17px;top:103px}
.colborder{cursor:col-resize;height:100%;margin-<?php echo $left; ?>:-6px;position:absolute;width:5px}
.colborder_active{border-<?php echo $right; ?>:2px solid #a44}
.pma_table td{position:static}
.pma_table th.draggable span,.pma_table tbody td span{display:block;overflow:hidden}
.pma_table tbody td span code span{display:inline}
.pma_table th.draggable.right span{margin-<?php echo $right; ?>:0}
.pma_table th.draggable span{margin-<?php echo $right; ?>:10px}
.modal-copy input{display:block;width:100%;margin-top:1.5em;padding:.3em 0}
.cRsz{position:absolute}
.cCpy{
	background:#333;
	color:#FFF;
	font-weight:bold;
	margin:.1em;
	padding:.3em;
	position:absolute;
	text-shadow:-1px -1px #000;

	-moz-box-shadow:0 0 .7em #000;
	-webkit-box-shadow:0 0 .7em #000;
	box-shadow:0 0 .7em #000;
	-moz-border-radius:.3em;
	-webkit-border-radius:.3em;
	border-radius:.3em;
}
.cPointer{
	background:url(<?php echo $theme->getImgPath('col_pointer.png'); ?>);
	height:20px;
	margin-<?php echo $left; ?>:-5px;  /* must be minus half of its width */
	margin-top:-10px;
	position:absolute;
	width:10px;
}
.tooltip{
	background:#333 !important;
	opacity:.8 !important;
	border:1px solid #000 !important;
	-moz-border-radius:.3em !important;
	-webkit-border-radius:.3em !important;
	border-radius:.3em !important;
	text-shadow:-1px -1px #000 !important;
	font-size:.8em !important;
	font-weight:bold !important;
	padding:1px 3px !important;
}
.tooltip *{background:none!important;color:#fff!important}
.cDrop{left:0;position:absolute;top:0}
.coldrop{
	cursor:pointer;
	height:16px;
	margin-<?php echo $left; ?>:.3em;
	margin-top:.3em;
	position:absolute;
	width:16px;
}
.coldrop:after{
	top:5px;
	width:0;
	height:0;
	left:2px;
	content:'';
	position:absolute;
	border:6px solid transparent;
	border-top:6px solid #444;
}
.coldrop:hover,.coldrop-hover{background-color:#999}
.coldrop:hover:after,
.coldrop-hover:after{border-top-color:#fff}
.cList{
	background:#EEE;
	border:solid 1px #999;
	position:absolute;
	-moz-box-shadow:0 .2em .5em #333;
	-webkit-box-shadow:0 .2em .5em #333;
	box-shadow:0 .2em .5em #333;
}
.cList .lDiv div{padding:.2em .5em .2em;padding-<?php echo $left; ?>:.2em}
.cList .lDiv div:hover{background:#DDD;cursor:pointer}
.cList .lDiv div input{cursor:pointer}
.showAllColBtn{
	border-bottom:solid 1px #999;
	border-top:solid 1px #999;
	cursor:pointer;
	font-size:.9em;
	font-weight:bold;
	padding:.35em 1em;
	text-align:center;
}
.showAllColBtn:hover{background:#ddd}
.turnOffSelect{
  -moz-user-select:none;
  -khtml-user-select:none;
  -webkit-user-select:none;
  user-select:none;
}
.navigation{margin:.8em 0;background-color:<?php echo $GLOBALS['cfg']['white']; ?>}
.navigation td{margin:0;padding:0;vertical-align:middle;white-space:nowrap}

.navigation_separator{color:#999;display:inline-block;font-size:1.5em;text-align:center;height:1.4em;width:1.2em;text-shadow:1px 0 #fff}

.navigation input[type=submit]{
	background:none;
	border:0;
	filter:none;
	margin:0;
	padding:.8em .5em;

	border-radius:0;
	-webkit-border-radius:0;
	-moz-border-radius:0;
}

.navigation input[type=submit]:hover,
.navigation input.edit_mode_active{color:#fff;cursor:pointer;text-shadow:none;background-color:rgba(0,0,0,.45)}
.navigation select{margin:0 .8em}
.cEdit{margin:0;padding:0;position:absolute}
.cEdit input[type=text]{background:#fff;height:100%;margin:0;padding:0}
.cEdit .edit_area{background:#fff;border:1px solid #999;min-width:10em;padding:.3em .5em}
.cEdit .edit_area select,.cEdit .edit_area textarea{width:97%}
.cEdit .cell_edit_hint{color:#555;font-size:.8em;margin:.3em .2em}
.cEdit .edit_box{overflow-x:hidden;overflow-y:scroll;;padding:0;margin:0}
.cEdit .edit_box_posting{
	background:#FFF url(<?php echo $theme->getImgPath('ajax_clock_small.gif'); ?>) no-repeat right center;
	padding-<?php echo $right; ?>:1.5em;
}
.cEdit .edit_area_loading{
	background:#FFF url(<?php echo $theme->getImgPath('ajax_clock_small.gif'); ?>) no-repeat center;
	height:10em;
}
.cEdit .goto_link{background:#eee;color:#555;padding:.2em .3em}
.saving_edited_data{
	background:url(<?php echo $theme->getImgPath('ajax_clock_small.gif'); ?>) no-repeat left;
	padding-<?php echo $left; ?>:20px;
}
.relationalTable select{
	width:125px;
	margin-right:5px;
}

.ui-timepicker-div .ui-widget-header{margin-bottom:8px}
.ui-timepicker-div dl{text-align:<?php echo $left; ?>}
.ui-timepicker-div dl dt{height:25px; margin-bottom:-25px}
.ui-timepicker-div dl dd{margin:0 10px 10px 85px}
.ui-timepicker-div td{font-size:90%}
.ui-tpicker-grid-label{background:none; border:none; margin:0; padding:0}
.ui-timepicker-rtl{direction:rtl}
.ui-timepicker-rtl dl{text-align:right}
.ui-timepicker-rtl dl dd{margin:0 65px 10px 10px}
input.btn{color:#333;background-color:#D0DCE0}
body .ui-widget{font-size:1em}
.ui-dialog fieldset legend a{color:#235A81}

.jqplot-yaxis{left:0 !important;min-width:25px;width:auto}
.jqplot-axis{overflow:hidden}
.report-data{
	height:13em;
	overflow:scroll;
	width:570px;
	border:solid 1px;
	background:white;
	padding:2px;
}
.report-description{height:10em;width:570px}
div#page_content div#tableslistcontainer table.data{border-top:0.1px solid #eee}
div#page_content div#tableslistcontainer, div#page_content div.notice, div#page_content div.result_query{margin-top:1em}
table.show_create{margin-top:1em}
table.show_create td{border-right:1px solid #bbb}
#alias_modal table th{vertical-align:middle;padding-left:1em}
#alias_modal label.col-2{min-width:20%;display:inline-block}
#alias_modal select{width:25%;margin-right:2em}
#alias_modal label{font-weight:bold}
.ui-dialog{position:fixed}
.small_font{font-size:smaller}

#pma_console_container{width:100%;position:fixed;bottom:0;<?php echo $left; ?>:0;z-index:100}
#pma_console{position:relative;margin-<?php echo $left; ?>:240px}
#pma_console .templates{display:none}
#pma_console .mid_text, #pma_console .toolbar span{vertical-align:middle}
#pma_console .toolbar{position:relative;background:#ccc;cursor:row-resize;border-top:solid 1px #aaa}
#pma_console .toolbar.collapsed:not(:hover){display:inline-block;border-top-<?php echo $right; ?>-radius:3px;border-<?php echo $right; ?>:solid 1px #aaa}
#pma_console .toolbar.collapsed{cursor:default}
#pma_console .toolbar.collapsed>.button{display:none}
#pma_console .message span.text,
#pma_console .message span.action,
#pma_console .toolbar .button,
#pma_console .toolbar .text,
#pma_console .switch_button{padding:0 3px;display:inline-block}

#pma_console .message span.action,
#pma_console .toolbar .button,
#pma_console .switch_button{cursor:pointer}

#pma_console .message span.action:hover,
#pma_console .toolbar .button:hover,
#pma_console .switch_button:hover,
#pma_console .toolbar .button.active{background:#ddd}
#pma_console .toolbar .text{font-weight:bold}
#pma_console .toolbar .button,
#pma_console .toolbar .text{margin-<?php echo $right; ?>:.4em}
#pma_console .toolbar .button,#pma_console .toolbar .text{float:<?php echo $right; ?>}
#pma_console .toolbar .console_switch .icon{margin-right:.3em}
#pma_console .content{overflow-x:hidden;overflow-y:auto;margin-bottom:-65px;border-top:solid 1px #aaa;background:#fff;padding-top:.4em}
#pma_console .content.console_dark_theme{background:#000;color:#fff}
#pma_console .content.console_dark_theme .CodeMirror-wrap{background:#000;color:#fff}
#pma_console .content.console_dark_theme .action_content{color:#000}
#pma_console .content.console_dark_theme .message{border-color:#373B41}
#pma_console .content.console_dark_theme .CodeMirror-cursor{border-color:#fff}
#pma_console .content.console_dark_theme .cm-keyword{color:#de935f}
#pma_console .message,
#pma_console .query_input{position:relative;font-family:Monaco, Consolas, monospace;cursor:text;margin:0 10px .2em 1.4em}
#pma_console .message{border-bottom:solid 1px #ccc;padding-bottom:.2em}
#pma_console .message.expanded>.action_content{position:relative}
#pma_console .message:before,
#pma_console .query_input:before{left:-0.7em;position:absolute;content:">"}
#pma_console .query_input:before{top:-2px}
#pma_console .query_input textarea{width:100%;height:4em;resize:vertical}
#pma_console .message:hover:before{color:#7cf;font-weight:bold}
#pma_console .message.expanded:before{content:"]"}
#pma_console .message.welcome:before{display:none}
#pma_console .message.failed:before,
#pma_console .message.failed.expanded:before,
#pma_console .message.failed:hover:before{content:"=";color:#944}
#pma_console .message.pending:before{opacity:.3}
#pma_console .message.collapsed>.query{white-space:nowrap;text-overflow:ellipsis;overflow:hidden}
#pma_console .message.expanded>.query{display:block;white-space:pre;word-wrap:break-word}
#pma_console .message .text.targetdb,
#pma_console .message.collapsed .action.collapse,
#pma_console .message.expanded .action.expand,
#pma_console .message .action.requery,
#pma_console .message .action.profiling,
#pma_console .message .action.explain,
#pma_console .message .action.bookmark{display:none}

#pma_console .message.select .action.profiling,
#pma_console .message.select .action.explain,
#pma_console .message.history .text.targetdb,
#pma_console .message.successed .text.targetdb,
#pma_console .message.history .action.requery,
#pma_console .message.history .action.bookmark,
#pma_console .message.bookmark .action.requery,
#pma_console .message.bookmark .action.bookmark,
#pma_console .message.successed .action.requery,
#pma_console .message.successed .action.bookmark{display:inline-block}
#pma_console .message .action_content{position:absolute;bottom:100%;background:#ccc;border:solid 1px #aaa;border-top-<?php echo $left; ?>-radius:3px}
html.ie8 #pma_console .message .action_content{position:relative!important}
#pma_console .message.bookmark .text.targetdb,
#pma_console .message .text.query_time{margin:0;display:inline-block}
#pma_console .message.failed .text.query_time,
#pma_console .message .text.failed{display:none}
#pma_console .message.failed .text.failed{display:inline-block}
#pma_console .message .text{background:#fff}
#pma_console .message.collapsed>.action_content{display:none}
#pma_console .message.collapsed:hover>.action_content{display:block}
#pma_console .message .bookmark_label{padding:0 4px;top:0;background:#369;color:#fff;border-radius:3px}
#pma_console .message .bookmark_label.shared{background:#396}
#pma_console .message.expanded .bookmark_label{border-top-left-radius:0;border-top-right-radius:0}
#pma_console .query_input{position:relative}
#pma_console .mid_layer{
	height:100%;
	width:100%;
	position:absolute;
	top:0;
	background:#666;
	display:none;
	cursor:pointer;
	z-index:200;
}
#pma_console .card{
	position:absolute;
	width:94%;
	height:100%;
	min-height:48px;
	<?php echo $left; ?>:100%;
	top:0;
	border-<?php echo $left; ?>:solid 1px #999;
	z-index:300;
	transition:<?php echo $left; ?> 0.2s;
	-ms-transition:<?php echo $left; ?> 0.2s;
	-webkit-transition:<?php echo $left; ?> 0.2s;
	-moz-transition:<?php echo $left; ?> 0.2s;
}
#pma_console .card.show{
	<?php echo $left; ?>:6%;
	box-shadow:-2px 1px 4px -1px #999;
}

html.ie7 #pma_console .query_input{
	display:none;
}

#pma_bookmarks .content.add_bookmark,
#pma_console_options .content{
	padding:4px 6px;
}
#pma_bookmarks .content.add_bookmark .options{
	margin-<?php echo $left; ?>:1.4em;
	padding-bottom:.4em;
	margin-bottom:.4em;
	border-bottom:solid 1px #ccc;
}
#pma_bookmarks .content.add_bookmark .options button{
	margin:0 7px;
	vertical-align:bottom;
}
#pma_bookmarks .content.add_bookmark input[type=text]{margin:0;padding:2px 4px}
#pma_console .button.hide,#pma_console .message span.text.hide{display:none}
#debug_console.grouped .ungroup_queries,
#debug_console.ungrouped .group_queries{display:inline-block}
#debug_console.ungrouped .ungroup_queries,
#debug_console.ungrouped .sort_count,
#debug_console.grouped .group_queries{display:none}
#debug_console .count{margin-right:8px}
#debug_console .show_trace .trace,
#debug_console .show_args .args{display:block}
#debug_console .hide_trace .trace,
#debug_console .hide_args .args,
#debug_console .show_trace .action.dbg_show_trace,
#debug_console .hide_trace .action.dbg_hide_trace,
#debug_console .traceStep.hide_args .action.dbg_hide_args,
#debug_console .traceStep.show_args .action.dbg_show_args{display:none}

#debug_console .traceStep:after,
#debug_console .trace.welcome:after,
#debug_console .debug>.welcome:after{content:"";display:table;clear:both}
#debug_console .debug_summary{float:left}
#debug_console .trace.welcome .time{float:right}
#debug_console .traceStep .file,#debug_console .script_name{float:right}
#debug_console .traceStep .args pre{margin:0}

.cm-s-pma .CodeMirror-code pre,
.cm-s-pma .CodeMirror-code{font-family:Monaco, Consolas, monospace}
.cm-s-pma .CodeMirror-measure>pre,
.cm-s-pma .CodeMirror-code>pre,
.cm-s-pma .CodeMirror-lines{padding:0}
.cm-s-pma.CodeMirror{resize:none;height:auto;width:100%;min-height:initial;max-height:initial}
.cm-s-pma .CodeMirror-scroll{cursor:text}

.pma_drop_handler{
	display:none;
	position:fixed;
	top:0;
	left:0;
	width:100%;
	background:rgba(0, 0, 0, 0.6);
	height:100%;
	z-index:999;
	color:white;
	font-size:30pt;
	text-align:center;
	padding-top:20%;
}
.pma_sql_import_status{
	display:none;
	position:fixed;
	bottom:0;
	right:25px;
	width:400px;
	background:#f3f3f3;
	border:1px solid <?php echo $GLOBALS['cfg']['cPri']; ?>;
}
.pma_sql_import_status h2,
.pma_drop_result h2{
	background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;
	padding:.2em .3em;
	margin-top:0;
	margin-bottom:0;
	color:#fff;
	font-size:1.4em;
	font-weight:300;
	-webkit-text-shadow:none;
	text-shadow:none;
}
.pma_sql_import_status div{
	height:270px;
	overflow-y:auto;
	overflow-x:hidden;
	list-style-type:none;
}
.pma_sql_import_status div li{
	padding:8px 10px;
	border-bottom:1px solid #bbb;
	color:rgb(148, 14, 14);
	background:white;
}
.pma_sql_import_status div li .filesize{float:right}
.pma_sql_import_status h2 .minimize{font-size:0;float:right;margin-right:5px;padding:0 10px}
.pma_sql_import_status h2 .minimize:before{font-size:16px;content:'\02212'}
.pma_sql_import_status h2 .close{float:right;padding:0 10px;display:none;font-size:0}
.pma_sql_import_status h2 .close:before{font-size:16px;content:'\000D7'}
.pma_sql_import_status h2 .minimize:hover,
.pma_sql_import_status h2 .close:hover,
.pma_drop_result h2 .close:hover{background:rgba(155, 149, 149, 0.78);cursor:pointer}
.pma_drop_file_status{color:#235a81}
.pma_drop_file_status span.underline:hover{cursor:pointer;text-decoration:underline}
.pma_drop_result{position:fixed;top:10%;left:20%;width:60%;background:white;min-height:300px;z-index:800;-webkit-box-shadow:0 0 15px #999;border-radius:10px;cursor:move}
.pma_drop_result h2 .close{float:right;margin-right:5px;padding:0 10px}
.dependencies_box{background-color:white;border:3px ridge black}
#composite_index_list{list-style-type:none;list-style-position:inside}
span.drag_icon{
	display:inline-block;
	background-image:url('<?php echo $theme->getImgPath('s_sortable.png'); ?>');
	background-position:center center;
	background-repeat:no-repeat;
	width:1em;
	height:3em;
	cursor:move;
}
.topmargin{margin-top:1em}

meter[value="1"]::-webkit-meter-optimum-value {background: linear-gradient(white 3%, #E32929 5%, transparent 10%, #E32929);}
meter[value="2"]::-webkit-meter-optimum-value {background: linear-gradient(white 3%, #FF6600 5%, transparent 10%, #FF6600);}
meter[value="3"]::-webkit-meter-optimum-value {background: linear-gradient(white 3%, #FFD700 5%, transparent 10%, #FFD700);}

th.header{cursor:pointer;color:#235a81}
th.header:hover{text-decoration:underline}
th.header .sorticon{width:16px;height:16px;background-repeat:no-repeat;background-position:right center;display:inline-table;vertical-align:middle;float:right}
th.headerSortUp .sorticon, th.headerSortDown:hover .sorticon{background-image:url(<?php echo $theme->getImgPath('s_desc.png'); ?>)}
th.headerSortDown .sorticon, th.headerSortUp:hover .sorticon{background-image:url(<?php echo $theme->getImgPath('s_asc.png'); ?>)}

body .ui-dialog .ui-dialog-titlebar-close{<?php echo $right; ?>:.3em;<?php echo $left; ?>:initial}
body .ui-dialog .ui-dialog-title{float:<?php echo $left; ?>}
body .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset{float:<?php echo $right; ?>}

/* Custom by @khadkamhn */
.ui-widget-overlay{
	opacity:.5;
	filter:Alpha(Opacity=50);
	background-color:#000;
	z-index:1000!important;
}
.ui-widget{padding:0;z-index:1500!important}
.ui-widget-content{border:none}
.ui-corner-all{border-radius:0}
.ui-widget-header{
	color:#fff;
	border:none;
	background:<?php echo $GLOBALS['cfg']['cPri']; ?>;
}
.ui-dialog .ui-dialog-titlebar{padding:.8em 1.4em}
.ui-dialog .ui-dialog-titlebar-close{
	top:0;
	margin:0;
	padding:0;
	width:35px;
	height:100%;
	border:none;
	background:none;
	right:0!important;
}
.ui-dialog .ui-dialog-titlebar-close:after{
	top:0;
	left:0;
	width:inherit;
	height:inherit;
	color:#fff;
	font-size:20px;
	content:'\000D7';
	position:absolute;
	line-height:35px;
}
.ui-datepicker{
	border:1px solid #ddd;
	-webkit-box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
	box-shadow:0 2px 10px 0 rgba(0,0,0,.16),0 2px 5px 0 rgba(0,0,0,.26);
}
.ui-datepicker .ui-icon-circle-triangle-w,
.ui-datepicker .ui-icon-circle-triangle-e{
	position:relative;
	background:none;
}
.ui-datepicker .ui-icon-circle-triangle-w:before,
.ui-datepicker .ui-icon-circle-triangle-e:after{
	top:0;
	left:0;
	color:#fff;
	width:inherit;
	height:inherit;
	text-indent:0;
	font-size:18px;
	line-height:14px;
	position:absolute;
	text-align:center;
	font-weight:normal;
	font-family:monospace,'Lucida Console','Courier New';
}
.ui-datepicker .ui-icon-circle-triangle-w:before{content:'<'}
.ui-datepicker .ui-icon-circle-triangle-e:after{content:'>'}
.ui-datepicker-header>a:hover{border:none;background:<?php echo $GLOBALS['cfg']['cPri']; ?>!important}
.ui-widget-content.ui-slider{background-color:transparent}
.ui-datepicker .ui-slider,
.ui-widget-content .ui-slider{position:relative}
.ui-datepicker .ui-slider:before,
.ui-widget-content .ui-slider:before{
	top:4px;
	width:100%;
	height:2px;
	content:'';
	background:#ddd;
	position:absolute;
}
.ui-datepicker .ui-slider-handle,
.ui-widget-content .ui-slider-handle{top:-2px;border:none;background:<?php echo $GLOBALS['cfg']['cSec']; ?>;border-radius:50%}
.ui-datepicker .ui-datepicker-calendar a{background:none}
.ui-datepicker .ui-datepicker-calendar a.ui-state-highlight{background-color:<?php echo $GLOBALS['cfg']['cPri']; ?>;text-shadow:none;color:#fff}
.ui-datepicker .ui-datepicker-calendar a:hover{background-color:<?php echo $GLOBALS['cfg']['cSec']; ?>;text-shadow:none;color:#fff}
.ui-datepicker .ui-timepicker-div{padding:0 5px}

.ui-dialog .ui-dialog-titlebar-close span{display:none}
.ui-dialog .ui-dialog-titlebar-close:hover:after{background:<?php echo shadeColor($GLOBALS['cfg']['cPri'], -0.7); ?>}
.ui-dialog .ui-dialog-buttonpane button{
	border:none;
	color:#fff;
	-moz-border-radius:2px;
	-webkit-border-radius:2px;
	border-radius:2px;
	background:<?php echo $GLOBALS['cfg']['cPri']; ?>;
}
.ui-dialog .ui-dialog-buttonpane button:hover{background:<?php echo shadeColor($GLOBALS['cfg']['cPri'], -0.7); ?>}
.ui-dialog .ui-dialog-buttonpane button:last-child{color:<?php echo $GLOBALS['cfg']['cPri']; ?>;background:<?php echo shadeColor($GLOBALS['cfg']['cPri'], 0.2); ?>}
.ui-dialog .ui-dialog-buttonpane button:last-child:hover{color:#fff;background:<?php echo shadeColor($GLOBALS['cfg']['cPri'], 0.4); ?>}
.ui-button-text-only .ui-button-text{
	font-weight:bold;
	padding:6px 10px;
	text-transform:uppercase;
	font-family:<?php echo $GLOBALS['cfg']['FontFamily']; ?>;
}

/* responsive */
@media (max-width:767px){
	#main_pane_left,
	#main_pane_right{
		float:none;
		width:100%;
	}
	#main_pane_right{padding:0}
}
