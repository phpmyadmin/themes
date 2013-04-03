<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * print css file from theme Original
 *
 * @package PhpMyAdmin-theme
 * @subpackage pmahomme
 */
?>

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

/* For printview */
body, table, th, td 
{
	color: #000000;
	background-color: #ffffff;
	font-family: 'Open Sans';
}

img {
    border: 0;
}

table, th, td {
    border-width:      0.1em;
    border-color:      #000000;
    border-style:      solid;
}

table {
    border-collapse:   collapse;
    border-spacing:    0;
}

th, td {
    padding:           0.2em;
}

th {
    font-weight:       bold;
    background-color:  #e5e5e5;
}

.hide {
    display: none;
}
