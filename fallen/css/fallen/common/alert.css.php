.attention {
  color: red;
  font-weight: bold
}

.allfine {
  color: green
}

/* Message Boxes: Error, Confirmation */

#pma_errors, #pma_demo, #pma_footer {
  padding: 20px
}

#pma_errors #pma_errors {
  padding: 0
}

.success h1, .notice h1, div.error h1 {
  text-align: left;
  margin: 0 0 0.2em 0;
  color: <?php echo $GLOBALS['cfg']['NaviColor'] ?>
}

div.success, div.notice, div.error, div.footnotes {
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  margin: 20px 0 20px;
  border: 1px solid;
  background-repeat: no-repeat;
    <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
  background-position: 10px 50%;
  padding: 10px
    <?php } else { ?>
  background-position: 99% 50%;
  padding: 10px 35px 10px 10px
    <?php } ?>
}

.ajax_notification .error {
  margin-top: 0;
  padding: 3px
}

div.success {
  margin: 0 0 1em 0;
  border: none
}

.success a, .notice a, .error a {
  text-decoration: underline;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>
}

.success {
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['BrowseSuccessColor'] ?>
}

h1.success, div.success {
  border-color: <?php echo $GLOBALS['cfg']['BrowseSuccessColor'] ?>
}

.notice, .footnotes {
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['BlueHeader'] ?>
}

h1.notice, div.notice, div.footnotes {
  border-color: <?php echo $GLOBALS['cfg']['BlueHeader'] ?>
}

.notice a {
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>
}

.error {
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>!important;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>
}

h1.error, div.error {
  border-color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

.confirmation {
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>
}

fieldset.confirmation legend {
  background-color: #d03912
}

/* End Message Boxes */

/* Forbidden, No Privileges */

.noPrivileges {
  color: #ff0000;
  font-weight: bold
}

/* End Forbidden */

fieldset.caution {
  background: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>
}

fieldset.caution legend {
  background-color: #fff
}

fieldset.caution a {
  text-transform: uppercase;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  font-weight: normal
}

fieldset.caution ul, #tbl_maintenance {
  padding: 0
}

fieldset.caution li, #tbl_maintenance li {
  display: block
}

fieldset.caution li:before {
  font-family: "<?php echo $font_family_icon ?>";
  content: "";
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  margin-right: 10px
}

fieldset.caution li a:nth-child(2) img {
  background: url("./themes/<?php echo $slug ?>/img/s_info.png")!important
}

p.notice {
  margin: 1.5em 0;
  border: 1px solid #000;
  background-repeat: no-repeat;
  background: #555;
  color: #d4fb6a
    <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
  background-position: 10px 50%;
  padding: 10px 10px 10px 25px
    <?php } else { ?>
  background-position: 99% 50%;
  padding: 25px 10px 10px 10px
    <?php } ?>
}

p.notice a {
  color: #fff;
  text-decoration: underline
}
