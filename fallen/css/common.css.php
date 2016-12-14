<?php
# Unplanned execution path

if ( !defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE') ) {
  exit();
}

# Set source folder for stylesheet

define('CSS_PATH', 'fallen');

# Set the Brand name, will be set for logo text. Display in menubar.

$brand = 'phpMyAdmin';

# Do not change!!!
# Or the theme will be error!

$name = 'Fallen';
$version = '0.2';
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

<?php include CSS_PATH . '/bundle-fonts.min.css' ?>

/* Reset
---------------------------------------------- */

<?php include CSS_PATH . '/common/reset.css.php' ?>

/* General
---------------------------------------------- */

<?php include CSS_PATH . '/common/general.css.php' ?>

/* Login
---------------------------------------------- */

<?php include CSS_PATH . '/common/login.css.php' ?>

/* Icons
---------------------------------------------- */

<?php include CSS_PATH . '/common/icons.css.php' ?>

/* Typography
---------------------------------------------- */

<?php include CSS_PATH . '/common/typography.css.php' ?>

/* Heading
---------------------------------------------- */

<?php include CSS_PATH . '/common/heading.css.php' ?>

/* Globals
---------------------------------------------- */

<?php include CSS_PATH . '/common/globals.css.php' ?>

/* Contents
---------------------------------------------- */

<?php include CSS_PATH . '/common/content.css.php' ?>

/* Data
---------------------------------------------- */

<?php include CSS_PATH . '/common/data.css.php' ?>

/* Tables &amp; Columns
---------------------------------------------- */

<?php include CSS_PATH . '/common/tables.css.php' ?>

/* Forms, Input &amp; Textarea
---------------------------------------------- */

<?php include CSS_PATH . '/common/forms.css.php' ?>

/* Buttons
---------------------------------------------- */

<?php include CSS_PATH . '/common/buttons.css.php' ?>

/* Select
---------------------------------------------- */

<?php include CSS_PATH . '/common/select.css.php' ?>

/* LTR
---------------------------------------------- */

<?php if ( $GLOBALS['text_dir'] === 'ltr' ) {
  include CSS_PATH . '/common/ltr.css.php';
} ?>

/* Alert
---------------------------------------------- */

<?php include CSS_PATH . '/common/alert.css.php' ?>

/* Images
---------------------------------------------- */

<?php include CSS_PATH . '/common/images.css.php' ?>

/* Layouts
---------------------------------------------- */

<?php include CSS_PATH . '/common/layouts.css.php' ?>

/* Elements
---------------------------------------------- */

<?php include CSS_PATH . '/common/elements.css.php' ?>

/* Navigations
---------------------------------------------- */

<?php include CSS_PATH . '/common/nav.css.php' ?>

/* Responsive
---------------------------------------------- */

<?php include CSS_PATH . '/common/responsive.css.php' ?>
