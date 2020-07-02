select {
  background-color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  margin: 5px;
  max-width: 17em;
  padding: 5px;
}

select:focus {
  border: 1px solid <?php echo $GLOBALS['cfg']['NaviHoverBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

.selectallarrow {
  margin-left: .6em;
  margin-right: .3em
}
