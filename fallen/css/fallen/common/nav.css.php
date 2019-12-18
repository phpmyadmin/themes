.navigation {
  width: 100%;
  background-color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['NaviColor'] ?>
}

.navigation td {
  margin: 0;
  padding: 0;
  padding-left: 2px!important;
  vertical-align: middle;
  white-space: nowrap;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

.navigation_separator {
  color: #eee;
  display: inline-block;
  font-size: 1.5em;
  text-align: center;
  height: 1.4em
}

.navigation input[type=submit] {
  background: #fff;
  border: none;
  box-shadow: 0 1px 1px <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  filter: none;
  margin: 5px;
  padding: 0.4em
}

.navigation input[type=submit]:hover, .navigation input.edit_mode_active {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  cursor: pointer;
  background-color: <?php echo $GLOBALS['cfg']['NaviColor'] ?>
}

.navigation input[type=submit]:focus {
  box-shadow: none
}

.navigation select {
  margin: 0 0.8em;
  border: none
}

.navigation input[type=text] {
  border: none
}

.navigation_goto {
  width: 100%
}
