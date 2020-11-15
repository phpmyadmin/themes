/* Topmenu */

#topmenu .error {
  background: #eee;
  border: 0!important;
  color: #aaa
}

ul#topmenu, ul#topmenu2 {
  list-style-type: none;
  margin: 0;
  height: 48px
}

ul.tabs {
  list-style-type: none;
  margin: 0
}

ul#topmenu2 {
  margin: -20px -10px -10px;
  padding: 10px;
  clear: both
}

ul#topmenu li, ul#topmenu2 li {
  float: left;
  margin: 0;
  vertical-align: middle;
  height: 38px
}

#topmenu img, #topmenu2 img {
  margin-right: .5em;
  vertical-align: -3px
}

.menucontainer {
  background-color: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  height: 48px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2)
}

.scrollindicator {
  display: none
}

#topmenu .tabactive {
  background: #fff!important
}

#topmenu2 .tabactive {
  background: #ccc
}

ul#topmenu2 a {
  display: block;
  margin: 7px 0;
  margin-left: 0;
  padding: 5px 15px;
  white-space: nowrap;
  color: <?php echo $GLOBALS['cfg']['NaviPointerColor'] ?>;
  text-transform: uppercase;
  background-color: #f6f6f6;
  box-shadow: 0 1px 1px rgb(221, 221, 221)
}

#topmenu {
  padding-left: 20px;
  padding-right: 20px
}

ul#topmenu ul.only {
  left: 0
}

ul#topmenu a, ul#topmenu span {
  padding: 12px 10px 8px;
  height: 28px;
  line-height: 28px;
  text-transform: uppercase;
  color: #666;
  font-weight: normal
}

ul#topmenu ul a {
  border-width: 1pt 0 0 0
}

ul#topmenu ul li:first-child a {
  border-width: 0
}

ul#topmenu>li>a:hover, ul#topmenu>li>.tabactive {
  text-decoration: none;
  color: #333
}

ul#topmenu ul a:hover, ul#topmenu ul .tabactive {
  text-decoration: none
}

ul#topmenu2 a, ul#topmenu2 a:hover {
  text-decoration: none;
  line-height: 20px
}

ul#topmenu>li.active {
  border-right: 0
}

#topmenucontainer {
  width: 100%
}

/* End Topmenu */

/* Calendar */

table.calendar {
  width: 100%
}

table.calendar td {
  text-align: center
}

table.calendar td a {
  display: block
}

table.calendar td a:hover {
  background-color: #CCFFCC
}

table.calendar th {
  background-color: #D3DCE3
}

table.calendar td.selected {
  background-color: #FFCC99
}

img.calendar {
  border: none
}

form.clock {
  text-align: center
}

/* End Calendar */

/* Server Info */

#serverinfo {
  padding: 12px 30px;
  overflow: hidden;
  margin: 0;
  margin-left: -1em;
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  background: linear-gradient(270deg, #0fe4c8 0, <?php echo $GLOBALS['cfg']['NaviBackground'] ?> 100%);
  font-height: 1.1em;
  height: 15px
}

#serverinfo .item {
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  white-space: nowrap;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>
}

#serverinfo .item:before {
  padding-left: 5px;
  padding-right: 5px;
  font-family: "<?php echo $font_family_icon ?>";
  font-size: 10px;
  color: #eee;
  content: ""
}

#serverinfo a:hover {
  text-decoration: none
}

#serverinfo a:first-child {
  display: none!important
}

#serverinfo .separator, #serverinfo .icon {
  display: none
}

#serverinfo img {
  margin: 0 .1em 0;
  margin-left: .2em
}

/* End Server Info */

/* User Privileges */

#fieldset_add_user_login div.item {
  border-bottom: 1px solid #ddd;
  padding-bottom: .3em;
  margin-bottom: .3em
}

#fieldset_add_user_login label {
  float: left;
  display: block;
  width: 10em;
  max-width: 100%;
  text-align: right;
  padding-right: .5em;
  line-height: 35px
}

#fieldset_add_user_login span.options #select_pred_username, #fieldset_add_user_login span.options #select_pred_hostname, #fieldset_add_user_login span.options #select_pred_password {
  width: 100%;
  max-width: 100%
}

#fieldset_add_user_login span.options {
  float: left;
  display: block;
  width: 12em;
  max-width: 100%;
  padding-right: .5em
}

#fieldset_add_user_login input {
  width: 12em;
  clear: right;
  max-width: 100%
}

#fieldset_add_user_login span.options input {
  width: auto
}

#fieldset_add_user_login span.options input[type=button] {
  margin: 4px
}

#fieldset_user_priv div.item {
  float: left;
  width: 9em;
  max-width: 100%
}

#fieldset_user_priv div.item div.item {
  float: none
}

#fieldset_user_priv div.item label {
  white-space: nowrap
}

#fieldset_user_priv div.item select {
  width: 100%
}

#fieldset_user_global_rights fieldset {
  float: left
}

#fieldset_user_group_rights fieldset {
  float: left
}

/* End user privileges */

/* Server Status */

.linkElem:hover {
  text-decoration: underline;
  color: <?php echo $GLOBALS['cfg']['BrowsePointerColor'] ?>;
  cursor: pointer
}

h3#serverstatusqueries span {
  font-size: 60%;
  display: inline
}

div#serverStatusTabs {
  margin-top: 1em
}

.buttonlinks {
  float: right;
  white-space: nowrap
}

div#serverstatusquerieschart {
  float: left;
  width: 500px;
  height: 350px;
  padding-left: 30px
}

table#serverstatusqueriesdetails, table#serverstatustraffic {
  float: left
}

table#serverstatusqueriesdetails th {
  min-width: 35px
}

table#serverstatusvariables {
  width: 100%;
  margin-bottom: 1em
}

table#serverstatusvariables .name {
  width: 18em;
  white-space: nowrap
}

table#serverstatusvariables .value {
  width: 6em
}

table#serverstatusconnections {
  float: left;
  margin-left: 30px
}

div#serverstatus table tbody td.descr a, div#serverstatus table .tblFooters a {
  white-space: nowrap
}

div.tabLinks {
  margin-left: 0.3em;
  float: left;
  padding: 5px 0
}

div.tabLinks a, div.tabLinks label {
  margin-right: 7px
}

div.tabLinks .icon {
  margin: -0.2em 0.3em 0 0
}

.popupContent {
  display: none;
  position: absolute;
  border: 1px solid <?php echo $GLOBALS['cfg']['BrowseGrayColor'] ?>;
  margin: 0;
  padding: 3px;
  background-color: #fff;
  z-index: 2
}

div#logTable {
  padding-top: 10px;
  clear: both
}

div#logTable table {
  width: 100%
}

div#queryAnalyzerDialog {
  min-width: 700px
}

div#queryAnalyzerDialog div.CodeMirror-scroll {
  height: auto
}

div#queryAnalyzerDialog div#queryProfiling {
  height: 300px
}

div#queryAnalyzerDialog td.explain {
  width: 250px
}

div#queryAnalyzerDialog table.queryNums {
  display: none
  border: 0;
  text-align: left
}

.smallIndent {
  padding-left: 7px
}

#serverstatus h3 {
  margin: 15px 0;
  font-weight: normal;
  color: #999;
  font-size: 1.7em
}

/* End Server Status */

/* Chart */

div.liveChart {
  clear: both;
  min-width: 500px;
  height: 400px;
  padding-bottom: 80px
}

#addChartDialog input[type="text"] {
  margin: 0;
  padding: 3px
}

div#chartVariableSettings {
  margin-left: 10px
}

table#chartGrid td {
  padding: 3px;
  margin: 0
}

table#chartGrid div.monitorChart {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  box-shadow: 0 2px 2px <?php echo $GLOBALS['cfg']['NaviColor'] ?>;
  overflow: hidden
}

div#profilingchart {
  width: 850px;
  height: 370px;
  float: left
}

#resizer {
  border: 1px solid silver
}

#inner-resizer {
  padding: 10px
}

.chartOption {
  float: left;
  margin-right: 40px
}

/* End Chart */

/* Server Variables */

#serverVariables {
  table-layout: fixed;
  width: 100%
}

#serverVariables .var-row>td {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  line-height: 2em
}

#serverVariables .var-header {
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  background: #f3f3f3;
  font-weight: bold
}

#serverVariables .var-header {
  text-align: left
}

#serverVariables .var-row {
  padding: 0.5em;
  min-height: 18px
}

#serverVariables .var-action {
  width: 120px
}

#serverVariables .var-name {
  float: left
}

#serverVariables .var-name.session {
  font-weight: normal;
  font-style: italic
}

#serverVariables .var-value {
  width: 50%;
  float: right;
  text-align: right
}

#serverVariables .var-doc {
  overflow: visible;
  float: right
}

#serverVariables .editLink {
  padding-right: 1em;
  float: left;
  font-family: sans-serif
}

#serverVariables .serverVariableEditor {
  width: 100%;
  overflow: hidden
}

#serverVariables .serverVariableEditor input {
  width: 100%;
  margin: 0 0.5em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  height: 2.2em
}

#serverVariables .serverVariableEditor div {
  display: block;
  overflow: hidden;
  padding-right: 1em
}

#serverVariables .serverVariableEditor a {
  float: right;
  margin: 0 0.5em;
  line-height: 2em
}

/* End Server Variables */

/* Querybox */

#togglequerybox {
  margin: 0 10px
}

#sectionlinks {
  padding: 16px;
  background: #f3f3f3;
  border: 1px solid #aaa
}

#sectionlinks a, .buttonlinks a, a.button {
  font-size: .88em;
  font-weight: bold;
  line-height: 35px;
  margin-left: 7px;
  border: 1px solid #aaa;
  padding: 5px 10px;
  color: #111;
  text-decoration: none;
  background: #ddd;
  white-space: nowrap
}

div#sqlquerycontainer {
  float: left;
  width: 69%
}

div#tablefieldscontainer {
  float: right;
  width: 29%;
  margin-top: -20px
}

div#tablefieldscontainer select {
  width: 100%;
  background: #fff;
  max-width: initial
}

textarea#sqlquery {
  width: 100%;
  border: 1px solid #aaa;
  padding: 5px;
  font-family: inherit
}

textarea#sql_query_edit {
  height: 7em;
  width: 95%;
  display: block
}

div#queryboxcontainer div#bookmarkoptions {
  margin-top: .5em
}

/* End Querybox */

/* Main Page */

#mysqlmaininformation, #pmamaininformation {
  float: left;
  width: 49%
}

#maincontainer ul {
  list-style-type: square;
  vertical-align: middle;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  margin-left: 20px
}

#maincontainer ul li {
  line-height: 1.5
}

#full_name_layer {
  position: absolute;
  padding: 2px;
  margin-top: -3px;
  z-index: 801;
  border: solid 1px #888;
  background: #fff
}

/* End main page */

/* Iconic view for ul items */

li br {
  display: none
}

li.no_bullets {
  list-style-type: none!important
}

li#li_mysql_client_version {
  overflow: hidden;
  text-overflow: ellipsis
}

li#li_create_database {
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  display: block;
  margin-top: 10px;
  margin-bottom: 20px
}

li#li_select_lang select {
  margin: 0!important;
  height: 26px
}

li#li_select_lang {
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_select_lang:hover {
  background: #f6f6f6
}

li#li_select_mysql_collation select {
  margin: 0!important
}

li#li_select_mysql_collation {
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_select_mysql_collation:hover {
  background: #f6f6f6
}

li#li_select_theme select {
  margin: 0!important
}

li#li_select_theme {
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_select_theme:hover {
  background: #f6f6f6
}

li#li_change_password {
  /* list-style-image: url(<?php echo $theme->getImgPath() ?>s_passwd.png); */
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_change_password:hover {
  background: #f6f6f6
}

li#li_user_preferences {
  /* list-style-image: url(<?php echo $theme->getImgPath() ?>b_tblops.png); */
  display: block;
  padding: 10px;
  padding-left: 20px;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>
}

li#li_user_preferences:hover {
  background: #f6f6f6
}

li#li_switch_dbstats {
  background-color: #f6f6f6;
  padding: 10px;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  display: block
}

/* End iconic view for ul items */

#body_browse_foreigners {
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  margin: .5em .5em 0 .5em
}

#bodyquerywindow {
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>
}

#bodythemes {
  width: 500px;
  margin: auto;
  text-align: center
}

#bodythemes img {
  border: .1em solid #000
}

#bodythemes a:hover img {
  border: .1em solid red
}

#fieldset_select_fields {
  float: left
}

#selflink {
  clear: both;
  display: block;
  margin-top: 20px;
  margin-bottom: 20px;
  margin-left: 20px;
  margin-right: 20px;
  border-top: 1px solid silver;
  text-align: right
}

#table_innodb_bufferpool_usage, #table_innodb_bufferpool_activity {
  float: left
}

#div_mysql_charset_collations table {
  float: left
}

#div_mysql_charset_collations table th, #div_mysql_charset_collations table td {
  padding: 0.4em
}

#div_mysql_charset_collations table th#collationHeader {
  width: 35%
}

.operations_half_width {
  width: 100%;
  float: left;
  margin-bottom: 10px
}

.operations_full_width {
  width: 100%;
  clear: both
}

#qbe_div_table_list {
  float: left
}

#qbe_div_sql_query {
  float: left
}

label.desc {
  width: 30em;
  float: left
}

label.desc sup {
  position: absolute
}

.sqlOuter code.sql, div.sqlvalidate, #inline_editor_outer {
  display: block;
  padding: 1em;
  margin: 1em;
  overflow: auto;
  background-color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  direction: ltr
}

#main_pane_left {
  width: 60%;
  min-width: 260px;
  float: left;
  padding-top: 1em
}

#main_pane_right {
  overflow: hidden;
  min-width: 160px;
  padding-top: 1em;
  padding-left: 3em
}

.group {
  margin-bottom: 1em;
  padding-bottom: 1em
}

.group input[type=submit] {
  margin-left: 0
}

.group h2 {
  color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  font-size: 2.8em;
  font-weight: normal;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>;
  margin-top: 0;
  margin-bottom: 0.6em
}

.group-cnt {
  padding: 0 0 0 0.5em;
  display: inline-block;
  width: 98%
}

textarea#partitiondefinition {
  height: 3em
}

/* For elements that should be revealed only via js */

.hide {
  display: none
}

#list_server {
  list-style-image: none;
  padding: 0
}

/* Progress Bar styles */

div.upload_progress {
  width: 400px;
  margin: 3em auto;
  text-align: center
}

div.upload_progress_bar_outer {
  border: 1px solid #000;
  width: 202px;
  position: relative;
  margin: 0 auto 1em;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

div.upload_progress_bar_inner {
  background-color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  width: 0;
  height: 12px;
  margin: 1px;
  overflow: hidden;
  position: relative;
    <?php if ($GLOBALS['cfg']['BrowseMarkerEnable']) { ?>
  color: <?php echo $GLOBALS['cfg']['BrowseMarkerColor'] ?>
    <?php } ?>
}

div.upload_progress_bar_outer div.percentage {
  position: absolute;
  top: 0;
  left: 0;
  width: 202px
}

div.upload_progress_bar_inner div.percentage {
  top: -1px;
  left: -1px
}

div#statustext {
  margin-top: .5em
}

table#serverconnection_src_remote, table#serverconnection_trg_remote, table#serverconnection_src_local, table#serverconnection_trg_local {
  float: left
}

/* End Progress Bar */

/* Validation error message styles */

input[type=text].invalid_value, input[type=password].invalid_value, input[type=number].invalid_value, input[type=date].invalid_value .invalid_value {
  background: #ffcccc;
}

/* Ajax notification styling */

.ajax_notification {
  top: 0;
  position: fixed;
  width: 100%;
  z-index: 1100;
  text-align: center;
  display: inline;
  left: 0;
  right: 0;
  background-image: url("<?php echo $theme->getImgPath('loader-blue.svg') ?>");
  background-repeat: no-repeat;
  background-position: 46%;
  margin: 0;
  background-color: <?php echo $GLOBALS['cfg']['NaviColor'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>;
  padding: 10px!important;
  border: none;
  height: 19px
}

.dismissable {
  margin-left: -10px;
  margin-top: -10px
}

#loading_parent {
  /* Need this parent to properly center the notification division */
  position: relative;
  width: 100%
}

/* Export and Import styles */

.export_table_list_container {
  display: inline-block;
  max-height: 20em;
  overflow-y: scroll
}

.export_table_select th {
  text-align: center;
  vertical-align: middle
}

.export_table_select .all {
  font-weight: bold;
  border-bottom: 1px solid black
}

.export_structure, .export_data {
  text-align: center
}

.export_table_name {
  vertical-align: middle
}

.exportoptions h3, .importoptions h3 {
  border-bottom: 1px #ccc solid;
  font-size: 110%
}

.exportoptions ul, .importoptions ul, .format_specific_options ul {
  list-style-type: none;
  margin-bottom: 15px
}

.exportoptions li, .importoptions li {
  margin: 7px
}

.exportoptions label, .importoptions label, .exportoptions p, .importoptions p {
  margin: 5px;
  float: none
}

#csv_options label.desc, #ldi_options label.desc, #latex_options label.desc, #output label.desc {
  float: left;
  width: 15em
}

.exportoptions, .importoptions {
  margin: 20px 30px 30px;
  margin-left: 10px
}

.exportoptions #buttonGo, .importoptions #buttonGo {
  padding: 5px 12px;
  text-decoration: none;
  cursor: pointer;
  margin: 0
}

.format_specific_options h3 {
  margin: 10px 0 0;
  margin-left: 10px;
  border: 0
}

.format_specific_options {
  border: 1px solid #999;
  margin: 7px 0;
  padding: 3px
}

p.desc {
  margin: 5px
}

/* Export styles only */

select#db_select, select#table_select {
  width: 400px
}

.export_sub_options {
  margin: 20px 0 0;
  margin-left: 30px
}

.export_sub_options h4 {
  border-bottom: 1px solid #999
}

.export_sub_options li.subgroup {
  display: inline-block;
  margin-top: 0
}

.export_sub_options li {
  margin-bottom: 0
}

#output_quick_export {
  display: none
}

/* Import styles only */

.importoptions #import_notification {
  margin: 10px 0;
  font-style: italic
}

input#input_import_file {
  margin: 5px
}

.formelementrow {
  margin: 20px 0 5px 0
}

#popup_background {
  display: none;
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: #000;
  z-index: 1000;
  overflow: hidden
}

/* Indexes */

#index_frm .index_info input, #index_frm .index_info select {
  width: 14em;
  box-sizing: border-box;
  -ms-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box
}

#index_frm .index_info div {
  padding: .2em 0
}

#index_frm .index_info .label {
  float: left;
  min-width: 12em
}

#index_frm .slider {
  width: 10em;
  margin: .6em;
  float: left
}

#index_frm .add_fields {
  float: left
}

#index_frm .add_fields input {
  margin-left: 1em
}

#index_frm input {
  margin: 0
}

#index_frm td {
  vertical-align: middle
}

table#index_columns {
  width: 100%
}

table#index_columns select {
  width: 85%;
  float: right
}

#move_columns_dialog div {
  padding: 1em
}

#move_columns_dialog ul {
  list-style: none;
  margin: 0;
  padding: 0
}

#move_columns_dialog li {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border: 1px solid #aaa;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  font-weight: bold;
  margin: .4em;
  padding: .2em
}

/* Config Forms */

.config-form ul.tabs {
  margin: 1.1em .2em 0;
  padding: 0 0 .3em 0;
  list-style: none;
  font-weight: bold
}

.config-form ul.tabs li {
  float: left;
  margin-bottom: -1px
}

.config-form ul.tabs li a {
  display: block;
  margin: .1em .2em 0;
  white-space: nowrap;
  text-decoration: none;
  border: 1px solid <?php echo $GLOBALS['cfg']['BgTwo'] ?>;
  border-bottom: 1px solid #ddd
}

.config-form ul.tabs li a {
  padding: 7px 10px;
  background: #f2f2f2;
  color: #555
}

.config-form ul.tabs li a:hover, .config-form ul.tabs li a:active {
  background: #e5e5e5
}

.config-form ul.tabs li.active a {
  background-color: #fff;
  margin-top: 1px;
  color: #000;
  border-color: #ddd;
  border-bottom: 1px solid #fff
}

.config-form fieldset {
  margin-top: 0;
  padding: 0;
  clear: both;
  background: none
}

.config-form legend {
  display: none
}

.config-form fieldset p {
  margin: 0;
  padding: 10px;
  background: #fff;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyLight'] ?>;
  font-size: 16px
}

.config-form fieldset .errors {
  /* form error list */
  margin: 0 -2px 1em;
  padding: .5em 1.5em;
  background: #FBEAD9;
  border: 0 #C83838 solid;
  border-width: 1px 0;
  list-style: none;
  font-family: sans-serif;
  font-size: small
}

.config-form fieldset .inline_errors {
  /* field error list */
  margin: .3em .3em .3em;
  margin-left: 0;
  padding: 0;
  list-style: none;
  color: #9a0000;
  font-size: small
}

.config-form fieldset table {
  background-color: #fff
}

.config-form fieldset label {
  font-weight: normal
}

.config-form fieldset textarea, .insertRowTable textarea {
  margin: 5px;
  padding: 5px
}

.config-form fieldset th {
  padding: 10px;
  padding-left: .5em;
  text-align: left;
  vertical-align: top;
  width: 40%
}

.config-form fieldset .doc, .config-form fieldset .disabled-notice {
  margin-left: 1em
}

.config-form fieldset .disabled-notice {
  font-size: 80%;
  text-transform: uppercase;
  color: #e00;
  cursor: help
}

.config-form fieldset td {
  padding-top: .3em;
  padding-bottom: .3em;
  vertical-align: top
}

.config-form fieldset th small {
  display: block;
  font-weight: normal;
  font-family: sans-serif;
  font-size: x-small;
  color: #444
}

.config-form fieldset th, .config-form fieldset td {
  border-bottom: 1px <?php echo $GLOBALS['cfg']['NaviColor'] ?> solid;
  border-right: none
}

.config-form .lastrow {
  padding: .5em;
  text-align: center
}

.config-form span.checkbox {
  padding: 2px;
  display: inline-block
}

.config-form .custom {
  /* customized field */
  background: #ffc
}

.config-form span.checkbox.custom {
  padding: 1px;
  border: 1px #edec90 solid;
  background: #ffc
}

.config-form img.ic_s_reload {
  -webkit-filter: invert(70%);
  filter: invert(70%)
}

.config-form .field-error {
  border-color: #a11!important
}

.config-form input[type="text"], .config-form input[type="password"], .config-form input[type="number"], .config-form select, .config-form textarea {
  border: 1px #a7a6aa solid;
  height: auto
}

.config-form input[type="text"]:focus, .config-form input[type="password"]:focus, .config-form input[type="number"]:focus, .config-form select:focus, .config-form textarea:focus {
  border: 1px #6676ff solid;
  background: #f7fbff
}

.config-form .field-comment-mark {
  font-family: serif;
  color: #007;
  cursor: help;
  padding: 0 .2em;
  font-weight: bold;
  font-style: italic
}

.config-form .field-comment-warning {
  color: #a00
}

.config-form dd {
  margin-left: .5em
}

.config-form dd:before {
  content: "\25B8"
}

/* Export &amp; Import */

#export_templates .floatleft, .exportoptions li, .importoptions li, select#plugins, .exportoptions#databases_and_tables div {
  margin-top: 20px
}

#export_templates .floatleft #templateName, #export_templates .floatleft label[for="template"], select#plugins, .exportoptions select#db_select {
  margin-left: 0
}

/* Central Columns */

table.navigation.nospacing.nopadding {
  margin-top: 20px;
  margin-left: 0!important;
  padding: 10px 20px 10px 20px;
  width: auto!important;
  max-width: 100%!important
}

/* Table Search */

fieldset#fieldset_table_qbe {
  margin-bottom: 20px
}

fieldset#fieldset_table_search a.ajax {
  margin-left: 20px
}

/* Others */

h2 .nowrap {
  display: none
}

div h2 {
  margin-top: 0
}

.clearfloat.print_ignore {
  padding-bottom: 4px
}

p.print_ignore {
  padding-top: 11px
}

.prefsmanage_opts .localStorage-empty .notice {
  margin-left: -18px
}

/* Fix element position for demo server */

#pma_navigation #serverChoice, #pma_navigation #databaseList, #pma_navigation div.pageselector.dbselector {
  margin-top: 10px
}

li.fast_filter.db_fast_filter {
  margin-top: 20px;
  margin-left: -8px!important
}

/* End */
