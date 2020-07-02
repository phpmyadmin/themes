#pma_navigation #recentTableList {
  text-align: center;
  padding: 10px
}

#pma_navigation #recentTableList select {
  min-width: 100%
}

#pma_navigation #databaseList {
  text-align: center;
  margin: 10px
}

#pma_navigation #navipanellinks {
  padding-top: 1em;
  padding-bottom: 1em;
  padding-left: 7px;
  text-align: left;
  background-color: <?php echo $GLOBALS['cfg']['BorderColor'] ?>
}

div#left_tableList li a:first-child:before {
  color: <?php echo $GLOBALS['cfg']['NaviPointerColor'] ?>;
  font-family: "<?php echo $font_family_icon ?>";
  content: "";
  margin: 10px
}

div#left_tableList li:hover a:first-child:before {
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>
}

#navipanellinks a {
  display: inline-block;
  height: 16px;
  width: 16px;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>;
  margin-right: 10px;
  padding: 5px;
  font-size: 15px
}

#navipanellinks a:hover {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>
}

#pma_navigation #serverChoice, #pma_navigation #databaseList, #pma_navigation div.pageselector.dbselector {
  text-align: center;
  padding: 5px 10px 0;
  border: 0
}

#pma_navigation_content>img.throbber {
  display: none;
  margin: .3em auto 0
}

/* Navigation tree*/
#pma_navigation_tree {
  margin: 0;
  margin-left: 10px;
  overflow: hidden;
  height: 74%;
  position: relative
}

#pma_navigation_select_database {
  text-align: left;
  padding: 0 0 0;
  border: 0;
  margin: 0
}

#pma_navigation_db_select {
  margin-top: 0.5em;
  margin-left: 0.75em
}

#pma_navigation_db_select select {
  border: 1px solid #bbb;
  border-top: 1px solid #bbb;
  color: #333;
  padding: 4px 6px;
  margin: 0 0 0;
  width: 92%
}

#pma_navigation_tree_content {
  width: 100%;
  overflow: hidden;
  overflow-y: auto;
  position: absolute;
  height: 100%
}

#pma_navigation_tree li .dbItemControls {
  padding-left: 4px
}

#pma_navigation_tree li .navItemControls {
  display: none;
  padding-left: 4px
}

#pma_navigation_tree li.activePointer .navItemControls {
  display: inline;
  opacity: 0.5
}

#pma_navigation_tree li.activePointer .navItemControls:hover {
  display: inline;
  opacity: 1.0
}

#pma_navigation_tree_content a.hover_show_full {
  position: relative;
  z-index: 100
}

#pma_navigation_tree a {
  color: <?php echo $GLOBALS['cfg']['NaviColor'] ?>
}

#pma_navigation_tree a:hover {
  text-decoration: none;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>
}

#pma_navigation_tree li.activePointer {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>
}

#pma_navigation_tree li.selected {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>
}

#pma_navigation_tree ul {
  clear: both;
  padding: 0;
  list-style-type: none;
  margin: 5px 0 0 0
}

#pma_navigation_tree ul ul {
  position: relative
}

#pma_navigation_tree li {
  white-space: nowrap;
  clear: both;
  min-height: 25px
}

#pma_navigation_tree img {
  margin: 0
}

#pma_navigation_tree i {
  display: block
}

#pma_navigation_tree div.block {
  position: relative;
  width: 1.5em;
  height: 2em;
  min-width: 16px;
  min-height: 16px;
  float: left
}

#pma_navigation_tree div.block.double {
  width: 2.5em
}

#pma_navigation_tree div.block i, #pma_navigation_tree div.block b {
  width: 1.5em;
  height: 2em;
  min-width: 16px;
  min-height: 8px;
  position: absolute;
  bottom: 0.7em;
  left: 0.75em;
  z-index: 0;
  margin-top: -4px
}

#pma_navigation_tree div.block i {
  /* Top and right segments for the tree element connections */
  display: block;
  border-left: 1px solid #616161;
  border-bottom: 1px solid #616161;
  position: relative;
  z-index: 0
}

#pma_navigation_tree div.block i.first {
  /* Removes top segment */
  border-left: 0
}

#pma_navigation_tree div.block b {
  /* Bottom segment for the tree element connections */
  display: block;
  height: 0.75em;
  bottom: 0;
  left: 0.75em;
  border-left: 1px solid #616161
}

#pma_navigation_tree div.block a, #pma_navigation_tree div.block u {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 10
}

#pma_navigation_tree div.block a+a {
  left: 100%
}

#pma_navigation_tree div.block.double a, #pma_navigation_tree div.block.double u {
  left: 33%
}

#pma_navigation_tree div.block.double a+a {
  left: 85%
}

#pma_navigation_tree div.block img {
  position: relative;
  top: -0.6em;
  left: 0;
  margin-left: -7px
}

#pma_navigation_tree div.throbber img {
  top: 2px;
  left: 2px
}

#pma_navigation_tree li.last>ul {
  background: none
}

#pma_navigation_tree li>a, #pma_navigation_tree li>i {
  line-height: 1.5em;
  height: 1.5em;
  padding-left: 0.3em
}

#pma_navigation_tree .list_container {
  border-left: 1px solid #616161;
  margin-left: 0.75em;
  padding-left: 0.75em
}

#pma_navigation_tree .last>.list_container {
  border-left: 0 solid #616161
}

/* Fast filter */
li.fast_filter {
  padding-left: 0.75em;
  margin-left: 0.75em;
  padding-right: 15px;
  border-left: 1px solid #616161
}

li.fast_filter input {
  width: 100%;
  background-color: #FFFFFF;
  border: 1px solid #CCCCCC;
  color: #666666;
  font-family: "Roboto", "Segoe UI";
  padding: 2px
}

li.fast_filter span {
  position: relative;
  right: 1.5em;
  padding: 0.2em;
  top: 1px;
  cursor: pointer;
  font-weight: bold;
  color: #800
}

li.fast_filter.db_fast_filter {
  border: 0;
  margin-left: 0;
  margin-right: 10px
}

#navigation_controls_outer {
  min-height: 21px !important;
  margin-top: 18px!important
}

#pma_navigation_collapse {
  padding-right: 2px
}

#navigation_controls_outer.activePointer {
  background-color: transparent !important
}

#navigation_controls {
  float: left;
  padding-left: 7.1px
}

/* Resize handler */
#pma_navigation_resizer {
  width: 1px;
  height: 100%;
  background-color: #aaa;
  cursor: col-resize;
  position: fixed;
  top: 0;
  left: 250px;
  z-index: 801
}

#pma_navigation_collapser {
  width: 20px;
  padding-top: 4px;
  padding-bottom: 12px;
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  border-bottom: 1px solid <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  line-height: 22px;
  color: #fff;
  position: fixed;
  top: 0;
  left: <?php echo $GLOBALS['cfg']['NaviWidth'] ?>px;
  text-align: center;
  cursor: pointer;
  z-index: 801
}

/* Quick warp links */
.pma_quick_warp {
  margin-top: 20px;
  margin-left: 4px;
  position: relative
}

.pma_quick_warp .drop_list {
  float: left;
  margin-left: 3px;
  padding: 2px 0
}

.pma_quick_warp .drop_button {
  padding: .5em .9em;
  border: 1px solid #4285f4;
  background: #4285f4;
  cursor: pointer;
  color: #fff;
  box-shadow: 0 1px 1px #bbb;
  transition: box-shadow .2s cubic-bezier(.4, 0, .2, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
  -webkit-transition: box-shadow .2s cubic-bezier(.4, 0, .2, 1), background-color .2s cubic-bezier(.4, 0, .2, 1);
  border-radius: 2px
}

.pma_quick_warp .drop_list:hover .drop_button {
  background: #2171f5
}

.pma_quick_warp .drop_list ul {
  position: absolute;
  margin: 0;
  padding: 0;
  overflow: hidden;
  overflow-y: auto;
  list-style: none;
  background: #fff;
  border: 1px solid #ddd;
  top: 100%;
  left: 3px;
  right: 0;
  display: none;
  z-index: 802
}

.pma_quick_warp .drop_list:hover ul {
  display: block
}

.pma_quick_warp .drop_list li {
  white-space: nowrap;
  padding: 0
}

.pma_quick_warp .drop_list li img {
  vertical-align: sub
}

.pma_quick_warp .drop_list li:hover {
  background: #f2f2f2
}

.pma_quick_warp .drop_list a {
  display: block;
  padding: .2em .3em
}

.pma_quick_warp .drop_list a.favorite_table_anchor {
  clear: left;
  float: left;
  padding: .1em .3em 0
}

li.warp_link {
  padding: 7px 0 0 0!important
}

/* Table Sticky */

table.sticky_columns {
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2)
}
