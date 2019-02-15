table {
  border-collapse: collapse
}

table caption, table th, table td {
  padding: 0.6em
}

th {
  text-align: left
}

th, th a {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>!important;
  font-weight: 500;
  padding-top: 10px!important;
  padding-bottom: 10px!important
}

table.nospacing {
  border-spacing: 0
}

table.nopadding tr th, table.nopadding tr td {
  padding: 0
}

th.left, td.left {
  text-align: left
}

th.center, td.center {
  text-align: center
}

th.right, td.right {
  text-align: right;
  padding-right: 1em
}

tr.vtop th, tr.vtop td, th.vtop, td.vtop {
  vertical-align: top
}

tr.vmiddle th, tr.vmiddle td, th.vmiddle, td.vmiddle {
  vertical-align: middle
}

tr.vbottom th, tr.vbottom td, th.vbottom, td.vbottom {
  vertical-align: bottom
}

#initials_table {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  margin-bottom: 10px
}

#initials_table a {
  background: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  padding: 4px 8px
}

#initials_table td {
  padding: 8px!important
}

.column_heading, .column_action {
  background-color: #f6f6f6;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>
}

table tbody:first-of-type tr:nth-child(odd), table tbody:first-of-type tr:nth-child(odd) th {
  background: <?php echo $GLOBALS['cfg']['BgTwo'] ?>;
  border-bottom: none
}

table tbody:first-of-type tr:nth-child(even), table tbody:first-of-type tr:nth-child(even) th {
  background: <?php echo $GLOBALS['cfg']['BgOne'] ?>;
  border-bottom: none
}

table tr th, table tr {
  text-align: left;
  border-bottom: 1px solid #eee
}

table tr {
  border-left: 3px solid transparent;
  line-height: 1em
}

td.marked:not(.nomarker), table tr.marked:not(.nomarker) td, table tbody:first-of-type tr.marked:not(.nomarker) th, table tr.marked:not(.nomarker) {
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>;
  background: #4285f438;
}

td.marked:not(.nomarker) {
  background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground'] ?>
}

table tr.marked:not(.nomarker) {
  border-left: 3px solid #4285f4
}

table tr.hover:not(.nopointer) th {
  background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['ThPointerColor'] ?>
}

th.condition, th.condition a {
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>;
  background: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>!important
}

td.condition {
  border: 1px solid
}

td.null {
  font-style: italic;
}

table .valueHeader {
  text-align: right;
  white-space: normal
}

table .value {
  text-align: left;
  white-space: normal
}

/* IE doesnt handles 'pre' right */

table [class=value] {
  white-space: normal
}

/* End IE */

td .icon {
  margin: 0
}

.new_central_col {
  width: 100%;
}

.tblcomment {
  font-size: 70%;
  font-weight: normal;
  color: #000099
}

.tblHeaders {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  font-weight: normal
}

.tblHeaders a:link, .tblHeaders a:active, .tblHeaders a:visited, div.tools a:link, div.tools a:visited, div.tools a:active, .tblFooters a:link, .tblFooters a:active, .tblFooters a:visited {
  color: #0000ff
}

.tblHeaders a:hover, div.tools a:hover, .tblFooters a:hover {
  color: #ff0000
}

#tbl_maintenance li a {
  text-transform: uppercase;
  font-weight: normal
}

#tbl_maintenance li:before {
  font-family: "<?php echo $font_family_icon ?>";
  content: "%";
  margin-right: 10px
}

table#tableFieldsId {
  width: 100%
}

/* Table stats */

div#tablestatistics table {
  float: left;
  margin-bottom: .5em;
  margin-right: 1.5em;
  margin-top: .5em;
  min-width: 16em
}

/* End table stats */

/* Server Privileges */

#tableuserrights td, #tablespecificuserrights td, #tabledatabases td {
  vertical-align: middle
}

/* End server privileges */

#structure-action-links a {
  margin-right: 1em
}

#create_table_form_minimal {
  display: block
}

#db_or_table_specific_priv .tblFooters {
  margin-top: -68px
}

.pma_table td {
  position: static
}

.pma_table th.draggable span, .pma_table tbody td span {
  display: block;
  overflow: hidden
}

.pma_table tbody td span code span {
  display: inline
}

.insertRowTable td, .insertRowTable th {
  vertical-align: middle
}

table.show_create {
  margin-top: 1em
}

table.show_create td {
  border-right: 1px solid #bbb
}

#alias_modal table th {
  vertical-align: middle;
  padding-left: 1em
}

#alias_modal label.col-2 {
  min-width: 20%;
  display: inline-block
}

#alias_modal select {
  width: 25%;
  margin-right: 2em
}

#alias_modal label {
  font-weight: bold
}

/* styles for sortable tables created with tablesorter jquery plugin */
th.header {
  cursor: pointer;
  color: #235a81
}

th.header:hover {
  text-decoration: underline
}

th.header .sorticon {
  width: 16px;
  height: 16px;
  background-repeat: no-repeat;
  background-position: right center;
  display: inline-table;
  vertical-align: middle;
  float: right
}

th.headerSortUp .sorticon, th.headerSortDown:hover .sorticon {
  background-image: url(<?php echo $theme->getImgPath('s_desc.png');
  ?>)
}

th.headerSortDown .sorticon, th.headerSortUp:hover .sorticon {
  background-image: url(<?php echo $theme->getImgPath('s_asc.png');
  ?>)
}
/* end of styles of sortable tables */
