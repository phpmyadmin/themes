html {
  font-size: 100%
}

input, select, textarea {
  font-size: 1em
}

body {
  background: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>;
<?php if ( !empty($GLOBALS['cfg']['FontFamily']) ) { ?>
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
<?php } ?>
  font-size: 11px;
  line-height: 1;
  margin-left: 250px;
  padding: 0
}

a, a:link, a:visited, a:active, button.mult_submit, .checkall_box+label {
  text-decoration: none;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  cursor: pointer;
  outline: none
}

a:hover, button.mult_submit:hover, button.mult_submit:focus, .checkall_box+label:hover {
  text-decoration: underline;
  color: <?php echo $GLOBALS['cfg']['BrowsePointerColor'] ?>
}

font[color=red], span[style="color: #ff0000"] {
  color: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>!important
}

strong {
  font-weight: normal
}

<?php if ( !empty($GLOBALS['cfg']['FontFamilyFixed']) ) { ?>
code, pre, textarea, tt {
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed'] ?>!important
}
<?php } ?>
