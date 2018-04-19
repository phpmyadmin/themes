<?php
// Unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE') ) {
    exit();
} ?>
/* ----------------------------------------------------- */

ul.resizable-menu a, ul.resizable-menu span {
  display: block;
  margin: 0;
  padding: 0;
  white-space: nowrap
}

ul.resizable-menu .submenu {
  display: none;
  position: relative
}

ul.resizable-menu .shown {
  display: inline-block
}

ul.resizable-menu ul {
  margin: 0;
  padding: 0;
  position: absolute;
  list-style-type: none;
  display: none;
  border: 1px #ddd solid;
  z-index: 2;
  right: 0;
  padding-bottom: 15px
}

ul.resizable-menu li:hover {

}

ul.resizable-menu li:hover ul, ul.resizable-menu .submenuhover ul {
  display: block;
  background: #fff
}

ul.resizable-menu ul li {
  width: 100%
}
