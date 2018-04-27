a img {
  border: 0
}

hr {
  background-color: <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  border: 0;
  color: <?php echo $GLOBALS['cfg']['BorderColor'] ?>;
  height: 1px
}

dfn:hover {
  cursor: help
}

legend {
  border-radius: 3px;
  box-shadow: 0 0 2px rgba(0, 0, 0, .12), 0 2px 4px rgba(0, 0, 0, .24);
  padding: 10px 12px 15px;
}

.some-margin {
  margin: 20px
}

.clearfloat {
  clear: both
}

.floatleft {
  float: left;
  margin-right: 1em
}

.floatright {
  float: right
}

.center {
  text-align: center
}

.displayblock {
  display: block
}

.paddingtop {
  padding-top: 1em
}

.separator {
  color: #fff;
}

.result_query {
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  margin-bottom: 20px
}

div.tools {
  padding: 10px;
  text-align: right
}

div.tools span {
  float: right;
  margin: 6px 2px
}

div.tools a {
  color: <?php echo $GLOBALS['cfg']['BlueHeader'] ?>!important
}

div.null_div {
  height: 20px;
  text-align: center;
  font-style: normal;
  min-width: 50px
}

.odd:not(.nopointer):hover, .even:not(.nopointer):hover, .hover:not(.nopointer), .structure_actions_dropdown {
  background-color: <?php echo $GLOBALS['cfg']['BrowseMarkerBackground'] ?>;
  color: <?php echo $GLOBALS['cfg']['MainColor'] ?>
}

.structure_actions_dropdown .icon {
  vertical-align: middle!important
}

.condition {
  border-color: <?php echo $GLOBALS['cfg']['BrowseWarningColor'] ?>!important
}

<?php if ( !empty($GLOBALS['cfg']['FontFamilyFixed']) ) { ?>
.value {
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed'] ?>
}
<?php } ?>

/* Doc links in SQL */

.cm-sql-doc {
  border-bottom: 1px dotted #999;
  color: inherit!important;
  text-decoration: none
}

/* End Doc */

div.tools, .tblFooters {
  font-weight: normal;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>
}

/* Disabled text */

.disabled, .disabled a:link, .disabled a:active, .disabled a:visited {
  color: #666
}

.disabled a:hover {
  color: #666;
  text-decoration: none
}

tr.disabled td, td.disabled {
  background-color: #f3f3f3;
  color: #aaa
}

/* End Disabled */

.nowrap {
  white-space: nowrap
}

#page_settings_modal {
  display: none
}

#pma_navigation_settings {
  display: none
}

#span_table_comment {
  font-weight: normal;
  font-style: italic;
  white-space: nowrap;
  margin-left: 10px
}

#textSQLDUMP {
  width: 95%;
  height: 95%;
  font-family: Consolas, "Courier New", Courier, mono;
  font-size: 110%
}

#TooltipContainer {
  position: absolute;
  z-index: 99;
  width: 20em;
  height: auto;
  overflow: visible;
  visibility: hidden;
  background-color: #ffffcc;
  color: #006600;
  border: .1em solid #000;
  padding: .5em
}

caption a.top {
  float: right
}

#edit_user_dialog, #add_user_dialog {
  margin: 20px!important
}

.click-hide-message {
  cursor: pointer
}

.prefsmanage_opts {
  margin-left: 2em
}

#prefs_autoload {
  margin-bottom: .5em;
  margin-left: .5em
}

#placeholder .button {
  position: absolute;
  cursor: pointer
}

#placeholder div.button {
  font-size: smaller;
  color: #999;
  background-color: #eee;
  padding: 2px
}

.wrapper {
  float: left;
  margin-bottom: 1.5em
}

.toggleButton {
  position: relative;
  cursor: pointer;
  font-size: .8em;
  text-align: center;
  line-height: 1.4em;
  height: 1.55em;
  overflow: hidden;
  border-right: .1em solid #888;
  border-left: .1em solid #888
}

.toggleButton table, .toggleButton td, .toggleButton img {
  padding: 0;
  position: relative
}

.toggleButton .container {
  position: absolute
}

.toggleButton .container td {
  background-image: none;
  background: none
}

.toggleButton .toggleOn {
  color: #fff;
  padding: 0 1em
}

.toggleButton .toggleOff {
  padding: 0 1em
}

#left_arrow {
  left: 8px;
  top: 26px
}

#right_arrow {
  left: 26px;
  top: 26px
}

#up_arrow {
  left: 17px;
  top: 8px
}

#down_arrow {
  left: 17px;
  top: 44px
}

#zoom_in {
  left: 17px;
  top: 67px
}

#zoom_world {
  left: 17px;
  top: 85px
}

#zoom_out {
  left: 17px;
  top: 103px
}

.colborder {
  cursor: col-resize;
  height: 100%;
  margin-left: -6px;
  position: absolute;
  width: 5px
}

.colborder_active {
  border-right: 2px solid #a44
}

.cRsz {
  position: absolute
}

.cCpy {
  background: #333;
  color: #FFF;
  font-weight: bold;
  margin: .1em;
  padding: .3em;
  position: absolute
}

.cPointer {
  background: url(<?php echo $theme->getImgPath('col_pointer.png');
  ?>);
  height: 20px;
  margin-left: -5px;
  /* must be minus half of its width */
  margin-top: -10px;
  position: absolute;
  width: 10px
}

.tooltip {
  background: #333!important;
  opacity: .8!important;
  border: 1px solid #000!important;
  font-size: 10px!important;
  font-weight: normal!important;
  padding: 5px!important;
  width: 260px;
  line-height: 1.5
}

.tooltip * {
  background: none!important;
  color: #FFF!important
}

.cDrop {
  left: 0;
  position: absolute;
  top: 0
}

.coldrop {
  background: url(<?php echo $theme->getImgPath('col_drop.png');
  ?>);
  cursor: pointer;
  height: 16px;
  margin-left: .3em;
  margin-top: .3em;
  position: absolute;
  width: 16px
}

.coldrop:hover, .coldrop-hover {
  background-color: #999
}

.cList {
  background: #fff;
  border: solid 1px #ccc;
  position: absolute
}

.cList .lDiv div {
  padding: .2em .5em .2em;
  padding-left: .2em
}

.cList .lDiv div:hover {
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  cursor: pointer;
  color: #fff
}

.cList .lDiv div input {
  cursor: pointer
}

.showAllColBtn {
  border-bottom: solid 1px #ccc;
  border-top: solid 1px #ccc;
  cursor: pointer;
  font-size: .9em;
  padding: .35em 1em;
  text-align: center;
  font-weight: normal
}

.showAllColBtn:hover {
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  cursor: pointer;
  color: #fff
}

#page_content {
  line-height: 1.5
}

.cEdit {
  margin: 0;
  padding: 0;
  position: absolute
}

.cEdit input[type=text], .cEdit input[type=password], .cEdit input[type=number] {
  background: #FFF;
  height: 100%;
  margin: 0;
  padding: 0
}

.cEdit .edit_area {
  background: #FFF;
  border: 1px solid #999;
  min-width: 10em;
  padding: .3em .5em
}

.cEdit .edit_area select, .cEdit .edit_area textarea {
  width: 97%
}

.cEdit .cell_edit_hint {
  color: #555;
  font-size: .8em;
  margin: .3em .2em
}

.cEdit .edit_box {
  overflow: hidden;
  padding: 0;
  margin-top: 10px
}

.cEdit .edit_box_posting {
  background: #FFF url("<?php echo $theme->getImgPath('loader-blue.svg') ?>") no-repeat right center;
  padding-right: 1.5em
}

.cEdit .edit_area_loading {
  background: #FFF url("<?php echo $theme->getImgPath('loader-blue.svg') ?>") no-repeat center;
  height: 10em
}

.cEdit .goto_link {
  background: #EEE;
  color: #555;
  padding: .2em .3em
}

.saving_edited_data {
  background: url("<?php echo $theme->getImgPath('loader-blue.svg') ?>") no-repeat left;
  padding-left: 20px
}

.relationalTable select {
  width: 125px;
  margin-right: 5px
}

/* css for timepicker */
.ui-timepicker-div .ui-widget-header {
  margin-bottom: 8px
}

.ui-timepicker-div dl {
  text-align: left
}

.ui-timepicker-div dl dt {
  height: 25px;
  margin-bottom: -25px
}

.ui-timepicker-div dl dd {
  margin: 0 10px 10px 85px
}

.ui-timepicker-div td {
  font-size: 90%
}

.ui-tpicker-grid-label {
  background: none;
  border: none;
  margin: 0;
  padding: 0
}

.ui-timepicker-rtl {
  direction: rtl
}

.ui-timepicker-rtl dl {
  text-align: right
}

.ui-timepicker-rtl dl dd {
  margin: 0 65px 10px 10px
}

input.btn {
  color: #333;
  background-color: #d0dce0
}

body .ui-widget {
  font-size: 1em
}

.ui-dialog fieldset legend a {
  color: #235a81
}

.report-data {
  height: 13em;
  overflow: scroll;
  width: 570px;
  border: solid 1px;
  background: white;
  padding: 2px
}

.report-description {
  height: 10em;
  width: 570px
}

div#page_content div#tableslistcontainer table.data {
  border-top: 0.1px solid #eee
}

.small_font {
  font-size: smaller
}

/* Console styles */
#pma_console_container {
  width: 100%;
  position: fixed;
  bottom: 0;
  left: 0;
  z-index: 100
}

#pma_console {
  position: relative;
  margin-left: 250px
}

#pma_console .templates {
  display: none
}

#pma_console .mid_text, #pma_console .toolbar span {
  vertical-align: middle
}

#pma_console .toolbar {
  position: relative;
  background: <?php echo $GLOBALS['cfg']['ThBackground'] ?>;
  border-top: solid 1px #ccc;
  cursor: n-resize
}

#pma_console .toolbar.collapsed:not(:hover) {
  display: inline-block;
  border-right: solid 1px #ccc
}

#pma_console .toolbar.collapsed {
  cursor: default
}

#pma_console .toolbar.collapsed>.button {
  display: none
}

#pma_console .message span.text, #pma_console .message span.action, #pma_console .toolbar .button, #pma_console .toolbar .text, #pma_console .switch_button {
  padding: 0 3px;
  display: inline-block
}

#pma_console .message span.action, #pma_console .toolbar .button, #pma_console .switch_button {
  cursor: pointer
}

#pma_console .toolbar .text {
  font-weight: bold
}

#pma_console .toolbar .button, #pma_console .toolbar .text {
  margin-right: .4em
}

#pma_console .toolbar .button, #pma_console .toolbar .text {
  float: right
}

#pma_console .content {
  overflow-x: hidden;
  overflow-y: auto;
  margin-bottom: -65px;
  border-top: solid 1px #ccc;
  background: #fff;
  padding-top: .4em
}

#pma_console .content.console_dark_theme {
  background: #000;
  color: #fff
}

#pma_console .content.console_dark_theme .CodeMirror-wrap {
  background: #000;
  color: #fff
}

#pma_console .content.console_dark_theme .action_content {
  color: #000
}

#pma_console .content.console_dark_theme .message {
  border-color: #373b41
}

#pma_console .content.console_dark_theme .CodeMirror-cursor {
  border-color: #fff
}

#pma_console .content.console_dark_theme .cm-keyword {
  color: #de935f
}

#pma_console .message, #pma_console .query_input {
  position: relative;
  font-family: "Monaco", "Consolas", monospace;
  cursor: text;
  margin: 0 10px .2em 1.4em
}

#pma_console .message {
  border-bottom: solid 1px #ccc;
  padding-bottom: .2em
}

#pma_console .message.expanded>.action_content {
  position: relative
}

#pma_console .message:before, #pma_console .query_input:before {
  left: -0.7em;
  position: absolute;
  content: ">"
}

#pma_console .query_input:before {
  top: -2px
}

#pma_console .query_input textarea {
  width: 100%;
  height: 4em;
  resize: vertical
}

#pma_console .message:hover:before {
  color: #7cf;
  font-weight: bold
}

#pma_console .message.expanded:before {
  content: "]"
}

#pma_console .message.welcome:before {
  display: none
}

#pma_console .message.failed:before, #pma_console .message.failed.expanded:before, #pma_console .message.failed:hover:before {
  content: "=";
  color: #944
}

#pma_console .message.pending:before {
  opacity: .3
}

#pma_console .message.collapsed>.query {
  white-space: nowrap;
  text-overflow: ellipsis;
  overflow: hidden
}

#pma_console .message.expanded>.query {
  display: block;
  white-space: pre;
  word-wrap: break-word
}

#pma_console .message .text.targetdb, #pma_console .message.collapsed .action.collapse, #pma_console .message.expanded .action.expand, #pma_console .message .action.requery, #pma_console .message .action.profiling, #pma_console .message .action.explain, #pma_console .message .action.bookmark {
  display: none
}

#pma_console .message.select .action.profiling, #pma_console .message.select .action.explain, #pma_console .message.history .text.targetdb, #pma_console .message.successed .text.targetdb, #pma_console .message.history .action.requery, #pma_console .message.history .action.bookmark, #pma_console .message.bookmark .action.requery, #pma_console .message.bookmark .action.bookmark, #pma_console .message.successed .action.requery, #pma_console .message.successed .action.bookmark {
  display: inline-block
}

#pma_console .message .action_content {
  position: absolute;
  bottom: 100%;
  background: #ccc;
  border: solid 1px #aaa
}

html.ie8 #pma_console .message .action_content {
  position: relative!important
}

#pma_console .message.bookmark .text.targetdb, #pma_console .message .text.query_time {
  margin: 0;
  display: inline-block
}

#pma_console .message.failed .text.query_time, #pma_console .message .text.failed {
  display: none
}

#pma_console .message.failed .text.failed {
  display: inline-block
}

#pma_console .message .text {
  background: #fff
}

#pma_console .message.collapsed>.action_content {
  display: none
}

#pma_console .message.collapsed:hover>.action_content {
  display: block
}

#pma_console .message .bookmark_label {
  padding: 0 4px;
  top: 0;
  background: #369;
  color: #fff
}

#pma_console .message .bookmark_label.shared {
  background: #396
}

#pma_console .query_input {
  position: relative
}

#pma_console .mid_layer {
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  /* For support IE8, this layer doesn't use filter:opacity or opacity,
    js code will fade this layer opacity to 0.18(using animation) */
  background: #ccc;
  display: none;
  cursor: pointer;
  z-index: 200
}

#pma_console .card {
  position: absolute;
  width: 94%;
  height: 100%;
  min-height: 48px;
  left: 100%;
  top: 0;
  border-left: solid 1px #999;
  z-index: 300;
  transition: left 0.2s;
  -ms-transition: left 0.2s;
  -webkit-transition: left 0.2s;
  -moz-transition: left 0.2s;
}

#pma_console .card.show {
  left: 6%
}

html.ie7 #pma_console .query_input {
  display: none
}

#pma_bookmarks .content.add_bookmark, #pma_console_options .content {
  padding: 4px 6px
}

#pma_bookmarks .content.add_bookmark .options {
  margin-left: 1.4em;
  padding-bottom: .4em;
  margin-bottom: .4em;
  border-bottom: solid 1px #ccc
}

#pma_bookmarks .content.add_bookmark .options button {
  margin: 0 7px;
  vertical-align: bottom
}

#pma_bookmarks .content.add_bookmark input[type=text] {
  margin: 0;
  padding: 2px 4px
}

#pma_console .button.hide, #pma_console .message span.text.hide {
  display: none
}

#debug_console.grouped .ungroup_queries, #debug_console.ungrouped .group_queries {
  display: inline-block
}

#debug_console.ungrouped .ungroup_queries, #debug_console.ungrouped .sort_count, #debug_console.grouped .group_queries {
  display: none
}

#debug_console .count {
  margin-right: 8px
}

#debug_console .show_trace .trace, #debug_console .show_args .args {
  display: block
}

#debug_console .hide_trace .trace, #debug_console .hide_args .args, #debug_console .show_trace .action.dbg_show_trace, #debug_console .hide_trace .action.dbg_hide_trace, #debug_console .traceStep.hide_args .action.dbg_hide_args, #debug_console .traceStep.show_args .action.dbg_show_args {
  display: none
}

#debug_console .traceStep:after, #debug_console .trace.welcome:after, #debug_console .debug>.welcome:after {
  content: "";
  display: table;
  clear: both
}

#debug_console .debug_summary {
  float: left
}

#debug_console .trace.welcome .time {
  float: right
}

#debug_console .traceStep .file, #debug_console .script_name {
  float: right
}

#debug_console .traceStep .args pre {
  margin: 0
}

/* Code mirror console style*/
.cm-s-pma .CodeMirror-code pre, .cm-s-pma .CodeMirror-code {
  font-family: "Monaco", "Consolas", monospace;
}

.cm-s-pma .CodeMirror-measure>pre, .cm-s-pma .CodeMirror-code>pre, .cm-s-pma .CodeMirror-lines {
  padding: 0
}

.cm-s-pma.CodeMirror {
  resize: none;
  height: auto;
  width: 100%;
  min-height: initial;
  max-height: initial
}

.cm-s-pma .CodeMirror-scroll {
  cursor: text
}

/* PMA drop-improt style */
.pma_drop_handler {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  background: rgba(0, 0, 0, 0.6);
  height: 100%;
  z-index: 999;
  color: white;
  font-size: 30pt;
  text-align: center;
  padding-top: 20%
}

.pma_sql_import_status {
  display: none;
  position: fixed;
  bottom: 0;
  right: 25px;
  width: 400px;
  border: 1px solid #999;
  background: #f3f3f3
}

.pma_sql_import_status h2, .pma_drop_result h2 {
  background-color: #bbb;
  padding: .1em .3em;
  margin-top: 0;
  margin-bottom: 0;
  color: #fff;
  font-size: 1.6em;
  font-weight: normal
}

.pma_sql_import_status div {
  height: 270px;
  overflow-y: auto;
  overflow-x: hidden;
  list-style-type: none
}

.pma_sql_import_status div li {
  padding: 8px 10px;
  border-bottom: 1px solid #bbb;
  color: rgb(148, 14, 14);
  background: white
}

.pma_sql_import_status div li .filesize {
  float: right
}

.pma_sql_import_status h2 .minimize {
  float: right;
  margin-right: 5px;
  padding: 0 10px
}

.pma_sql_import_status h2 .close {
  float: right;
  margin-right: 5px;
  padding: 0 10px;
  display: none
}

.pma_sql_import_status h2 .minimize:hover, .pma_sql_import_status h2 .close:hover, .pma_drop_result h2 .close:hover {
  background: rgba(155, 149, 149, 0.78);
  cursor: pointer
}

.pma_drop_file_status {
  color: #235a81
}

.pma_drop_file_status span.underline:hover {
  cursor: pointer;
  text-decoration: underline
}

.pma_drop_result {
  position: fixed;
  top: 10%;
  left: 20%;
  width: 60%;
  background: white;
  min-height: 300px;
  z-index: 800;
  cursor: move
}

.pma_drop_result h2 .close {
  float: right;
  margin-right: 5px;
  padding: 0 10px
}

.dependencies_box {
  background-color: white;
  border: 3px ridge black
}

#composite_index_list {
  list-style-type: none;
  list-style-position: inside
}

span.drag_icon {
  display: inline-block;
  background-image: url('<?php echo $theme->getImgPath('s_sortable.png');?>');
  background-position: center center;
  background-repeat: no-repeat;
  width: 1em;
  height: 3em;
  cursor: move
}

.topmargin {
  margin-top: 1em
}

/* styles for jQuery-ui to support rtl languages */
body .ui-dialog .ui-dialog-titlebar-close {
  right: .3em;
  left: initial
}

body .ui-dialog .ui-dialog-title {
  float: left
}

body .ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
  float: right
}
/* end of styles for jQuery-ui to support rtl languages */

/* Override some jQuery-ui styling to have square corners */
body .ui-corner-all, body .ui-corner-top, body .ui-corner-left, body .ui-corner-tl {
  border-top-left-radius: 0
}

body .ui-corner-all, body .ui-corner-top, body .ui-corner-right, body .ui-corner-tr {
  border-top-right-radius: 0
}

body .ui-corner-all, body .ui-corner-bottom, body .ui-corner-left, body .ui-corner-bl {
  border-bottom-left-radius: 0
}

body .ui-corner-all, body .ui-corner-bottom, body .ui-corner-right, body .ui-corner-br {
  border-bottom-right-radius: 0
}

/* Override jQuery-ui styling for ui-dialog */
body .ui-dialog {
  padding: 0
}

body .ui-dialog .ui-widget-header {
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  border: none;
  background-color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  background-image: none
}

body .ui-dialog .ui-dialog-title {
  padding: 5px;
  font-weight: normal
}

body .ui-dialog .ui-dialog-buttonpane button {
  font-family: <?php echo $GLOBALS['cfg']['FontFamily'] ?>;
  color: <?php echo $GLOBALS['cfg']['ButtonColor'] ?>;
  background-color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  background-image: none;
  border: 1px solid <?php echo $GLOBALS['cfg']['ButtonBackground'] ?>
}

body .ui-dialog .ui-dialog-buttonpane button.ui-state-hover {
  background-color: <?php echo $GLOBALS['cfg']['ButtonHover'] ?>;
  border: 1px solid <?php echo $GLOBALS['cfg']['ButtonHover'] ?>
}

body .ui-dialog .ui-dialog-buttonpane button.ui-state-active {
  background-color: #333;
  border: 1px solid #333
}

/* Selection */

::selection {
  background: #b3d4fc;
  text-shadow: none
}
