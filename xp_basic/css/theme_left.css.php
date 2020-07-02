<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * navigation css file from theme
 *
 * @version $Id$
 * @package phpMyAdmin-theme
 * @subpackage WinXP_basic
 */

    if (isset($num_dbs) && $num_dbs == '0') {
    ?>
/* No layer effects neccessary */
div     {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.heada  {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.parent {font-family: <?php echo $left_font_family; ?>; color: #FFFFFF; text-decoration: none}
.item, .item:active, .item:hover, .tblItem, .tblItem:active {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; text-decoration: none}
.tblItem:hover {color: #CECECE; text-decoration: underline}
    <?php
    } else {
        if (isset($js_capable) && $js_capable != '0') {
            // Brian Birtles : This is not the ideal method of doing this
            // but under the 7th June '00 Mozilla build (and many before
            // it) Mozilla did not treat text between <style> tags as
            // style information unless it was written with the one call
            // to write().
            if (isset($js_isDOM) && $js_isDOM != '0') {
            ?>
/* Layer effects neccessary: capable && is_DOM is set. We found a recent CSS-Browser */
div {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.heada {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.headaCnt {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF}
.parent {font-family: <?php echo $left_font_family; ?>; color: #FFFFFF; text-decoration: none; display: block}
.child {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; text-decoration: none; display: none}
.item, .item:active, .item:hover, .tblItem, .tblItem:active {font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; text-decoration: none}
.tblItem:hover {color: #CECECE; text-decoration: underline}
            <?php
            } else {
            ?>
/* Layer effeccts neccessary: capable, but no is_DOM. We found an older CSS-Browser */
div {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.heada {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.headaCnt {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF}
            <?php
                if (isset($js_isIE4) && $js_isIE4 != '0') {
            ?>
/* Additional effects for IE4 */
.parent {font-family: <?php echo $left_font_family; ?>; color: #FFFFFF; text-decoration: none; display: block}
.child {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; text-decoration: none; display: none}
.item, .item:active, .item:hover, .tblItem, .tblItem:active {font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; text-decoration: none}
.tblItem:hover {color: #CECECE; text-decoration: underline}
            <?php
                } else {
            ?>
/* Additional effects for NON-IE4 */
.parent {font-family: <?php echo $left_font_family; ?>; color: #FFFFFF; text-decoration: none; position: absolute; visibility: hidden}
.child {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; position: absolute; visibility: hidden}
.item, .tblItem {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF; text-decoration: none}
            <?php
                }
            }
        } else {
        ?>
/* Additional effects for left frame not required or not possible because of lacking CSS-capability. */
div {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.heada {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; color: #FFFFFF}
.headaCnt {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #FFFFFF}
.parent {font-family: <?php echo $left_font_family; ?>; color: #FFFFFF; text-decoration: none}
.child {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_smaller; ?>; color: #ffffff; text-decoration: none}
.item, .item:active, .item:hover, .tblItem, .tblItem:active {font-size: <?php echo $font_smaller; ?>; color: #ffffff; text-decoration: none}
.tblItem:hover {color: #CECECE; text-decoration: underline}
        <?php
        }
    }
    ?>
/* Always enabled stylesheets (left frame) */
body {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; }
input   {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>}
select  {font-family: <?php echo $left_font_family; ?>; font-size: <?php echo $font_size; ?>; background-color: #ffffff; color: #000000}

img, input, select, button {
    vertical-align: middle;
}
