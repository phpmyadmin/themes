form {
  display: inline;
  margin: 0;
  padding: 0
}

input[type="checkbox" i] {
  margin-top: .2px!important
}

input[type=text], input[type=password], input[type=number] {
  background-color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  margin: 6px;
  padding: 5px
}

input[type=text]:focus, input[type=password]:focus, input[type=number]:focus {
  border: 1px solid <?php echo $GLOBALS['cfg']['NaviHoverBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

input[type=submit], input[type=reset], input[type=button] {
  background-color: <?php echo $GLOBALS['cfg']['ButtonBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['ButtonBackground'] ?>;
  border-radius: 2px;
  box-shadow: 0 1px 1px <?php echo $GLOBALS['cfg']['BrowseGrayColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  margin-left: 5px;
  padding: 4px;
  text-decoration: none
}

fieldset.confirmation input[type=submit], input[type=reset], input[type=button] {
  box-shadow: 0 1px 1px <?php echo $GLOBALS['cfg']['ThColor'] ?>
}

input[type=submit]:hover, input[type=reset]:hover, input[type=button]:hover {
  background-color: <?php echo $GLOBALS['cfg']['ButtonHover'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['ButtonHover'] ?>;
  cursor: pointer;
  position: relative
}

input[type=submit]:active, input[type=reset]:active, input[type=button]:active {
  background-color: #333;
  border: 1px solid #333;
  position: relative
}

textarea {
  background-color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  overflow: visible
}

fieldset {
  background-color: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  margin-top: 15px;
  padding: 20px
}

#boxContainer fieldset {
  margin: 5px
}

fieldset fieldset {
  background-color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: none;
  margin: 20px;
  margin-bottom: 0
}

tr.noclick td:first-child:before {
  content: ""
}

fieldset.tblFooters {
  border-top: 0;
  clear: both;
  float: none;
  margin-top: -1px;
  text-align: right
}

fieldset .formelement {
  float: left;
  margin-right: 0.5em
}

fieldset div[class=formelement] {
  white-space: normal
}

.chrome input[type="checkbox"] {
  left: -9999px;
  position: relative
}

.chrome input[type="checkbox"]:before {
  font-family: "<?php echo $font_family_icon ?>";
  content: "";
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  cursor: default;
  position: absolute;
  padding: 4px;
  top: 0;
  left: 9995px
}

.chrome input[type="checkbox"]:indeterminate:before {
  content: ""
}

.chrome input[type="checkbox"]:checked:before {
  content: ""
}

.chrome .navigation input[type="checkbox"]:before {
  color: #fff
}

.chrome input[type="radio"] {
  left: -9999px;
  position: relative
}

.chrome input[type="radio"]:before {
  font-family: "<?php echo $font_family_icon ?>";
  content: "";
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  cursor: default;
  position: absolute;
  padding: 4px;
  top: 0;
  left: 9995px
}

.chrome input[type="radio"]:checked:before {
  content: ""
}

fieldset .group-header th {
  background: <?php echo $GLOBALS['cfg']['BgTwo'] ?>;
}

fieldset .group-header+tr th {
  padding-top: .6em
}

fieldset .group-field-1 th, fieldset .group-header-2 th {
  padding-left: 1.5em
}

fieldset .group-field-2 th, fieldset .group-header-3 th {
  padding-left: 3em
}

fieldset .group-field-3 th {
  padding-left: 4.5em
}

fieldset .disabled-field th, fieldset .disabled-field th small, fieldset .disabled-field td {
  color: #666;
  background-color: #ddd
}

form.create_table_form fieldset.tblFooters, form#multi_edit_central_columns fieldset.tblFooters {
  background: none;
  border: none
}

form#tableOptionsForm input[name="comment"], form#tableOptionsForm select[name="tbl_collation"] {
  width: 130px
}

form#formDatabaseComment .tblFooters, form#create_table_form_minimal .tblFooters, form#rename_db_form .tblFooters, form#copy_db_form .tblFooters, form#change_db_charset_form .tblFooters, form#alterTableOrderby .tblFooters, form#moveTableForm .tblFooters, form#copyTable .tblFooters, form#tableOptionsForm .tblFooters {
  margin-top: -40px
}

fieldset#tableFilter {
  margin-bottom: 1em
}

fieldset#tableFilter input[type=submit] {
  margin-top: -1px
}

/* Table structure styles */

#fieldsForm ul.table-structure-actions {
  margin: 0;
  padding: 0;
  list-style: none
}

#fieldsForm ul.table-structure-actions li {
  float: left;
  margin-right: 0.3em
  /* same as padding of "table td" */
}

#fieldsForm ul.table-structure-actions .submenu li {
  padding: 0;
  margin: 0
}

#fieldsForm ul.table-structure-actions .submenu li span {
  padding: 0.3em;
  margin: 0.1em
}

#fieldset_zoom_search table th, #fieldset_zoom_search table td {
  line-height: 35px
}

#fieldset_table_qbe table th, #fieldset_table_qbe table td {
  line-height: 35px
}

form.append_fields_form .tblFooters {
  background: none;
  border: none
}

#table_columns input[type="text"], #table_columns input[type="password"], #table_columns input[type="number"], #table_columns input[type="date"], #table_columns select {
  width: 10em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

#table_columns select {
  margin: 6px
}

#placeholder {
  position: relative;
  border: 1px solid #aaa;
  float: right;
  overflow: hidden
}

.placeholderDrag {
  cursor: move
}

#placeholder .button {
  position: absolute
}

.doubleFieldset fieldset {
  width: 48%;
  float: left;
  padding: 0
}

.doubleFieldset fieldset.left {
  margin-right: 1%
}

.doubleFieldset fieldset.right {
  margin-left: 1%
}

.doubleFieldset legend {
  margin-left: 1.5em
}

.doubleFieldset div.wrap {
  padding: 1.5em
}

.modal-copy input {
  display: block;
  width: 100%;
  margin-top: 1.5em;
  padding: .3em 0
}

fieldset#fieldset_delete_user_footer {
  margin-top: -30px
}

#parameterized {
  margin: 20px 5px 20px 0!important
}
