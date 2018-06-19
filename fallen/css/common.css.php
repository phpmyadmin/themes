<?php
// Unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE')) {
    exit();
}

// Set source folder for stylesheet
define('CSS_PATH', 'fallen');

// Set the Brand name, will be set for logo text. Display in menubar.
$brand = 'phpMyAdmin';

// Do not edit!!!
// Or the theme will be broken!
$name = 'Fallen';
$version = '0.7';
$slug = 'fallen';
$font_family_icon = 'Fallen' ?>
/* ----------------------------------------------------- */

/**
 * <?php echo $name ?> v<?php echo $version ?> (phpMyAdmin Theme)
 * Copyright 2016 Frans Allen (https://www.fransallen.com)
 * Licensed under the GPLv2 or later
 */

/* Fonts
---------------------------------------------- */

<?php require CSS_PATH . '/bundle-fonts.min.css' ?>

/* Reset
---------------------------------------------- */

<?php require CSS_PATH . '/common/reset.css.php' ?>

/* General
---------------------------------------------- */

<?php require CSS_PATH . '/common/general.css.php' ?>

/* Login
---------------------------------------------- */

<?php require CSS_PATH . '/common/login.css.php' ?>

/* Icons
---------------------------------------------- */

<?php require CSS_PATH . '/common/icons.css.php' ?>

/* Typography
---------------------------------------------- */

<?php require CSS_PATH . '/common/typography.css.php' ?>

/* Heading
---------------------------------------------- */

<?php require CSS_PATH . '/common/heading.css.php' ?>

/* Globals
---------------------------------------------- */

<?php require CSS_PATH . '/common/globals.css.php' ?>

/* Contents
---------------------------------------------- */

<?php require CSS_PATH . '/common/content.css.php' ?>

/* Data
---------------------------------------------- */

<?php require CSS_PATH . '/common/data.css.php' ?>

/* Tables &amp; Columns
---------------------------------------------- */

<?php require CSS_PATH . '/common/tables.css.php' ?>

/* Forms, Input &amp; Textarea
---------------------------------------------- */

<?php require CSS_PATH . '/common/forms.css.php' ?>

/* Buttons
---------------------------------------------- */

<?php require CSS_PATH . '/common/buttons.css.php' ?>

/* Select
---------------------------------------------- */

<?php require CSS_PATH . '/common/select.css.php' ?>

/* LTR
---------------------------------------------- */

<?php if ($GLOBALS['text_dir'] === 'ltr') {
    include CSS_PATH . '/common/ltr.css.php';
} ?>

/* Alert
---------------------------------------------- */

<?php require CSS_PATH . '/common/alert.css.php' ?>

/* Images
---------------------------------------------- */

<?php require CSS_PATH . '/common/images.css.php' ?>

/* Layouts
---------------------------------------------- */

<?php require CSS_PATH . '/common/layouts.css.php' ?>

/* Elements
---------------------------------------------- */

<?php require CSS_PATH . '/common/elements.css.php' ?>

/* Navigations
---------------------------------------------- */

<?php require CSS_PATH . '/common/nav.css.php' ?>

/* Responsive
---------------------------------------------- */

<?php require CSS_PATH . '/common/responsive.css.php' ?>

/* Miscellaneous
---------------------------------------------- */

<?php require CSS_PATH . '/common/misc.css.php' ?>
