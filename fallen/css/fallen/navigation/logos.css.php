#pmalogo a img {
  margin-top: -8px
}

#pma_navigation #imgpmalogo {
  display: none
}

#pma_navigation #pmalogo:after {
  content: "<?php echo $brand ?>";
  font-size: 30px;
  font-weight: 300;
  margin-left: 5px
}

#pma_navigation #pmalogo {
  margin: 0;
  padding: 12px;
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  font-size: 14px;
  cursor: default;
  height: 15px;
  line-height: 100%
}
