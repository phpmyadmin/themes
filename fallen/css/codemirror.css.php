<?php
// Unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE')) {
    exit();
} ?>
/* ----------------------------------------------------- */

.CodeMirror {
  border: 1px solid #ccc;
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed'] ?>!important;
  direction: ltr;
  height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em
}

.CodeMirror * {
  font-family: <?php echo $GLOBALS['cfg']['FontFamilyFixed'] ?>
}

#inline_editor_outer .CodeMirror {
  height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.4) ?>em;
  margin-bottom: 10px
}

.insertRowTable .CodeMirror {
  height: <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 0.6); ?>em;
  width: <?php echo ceil($GLOBALS['cfg']['TextareaCols'] * 0.6); ?>em
}

#pma_console .CodeMirror {
  border: none
}

#pma_console .CodeMirror-gutters {
  background-color: initial;
  border: none
}

span.cm-keyword, span.cm-statement-verb {
  color: #909
}

span.cm-variable {
  color: black
}

span.cm-comment {
  color: #808000
}

span.cm-mysql-string {
  color: #008000
}

span.cm-operator {
  color: fuchsia
}

span.cm-mysql-word {
  color: black
}

span.cm-builtin {
  color: #f00
}

span.cm-variable-2 {
  color: #f90
}

span.cm-variable-3 {
  color: #00f
}

span.cm-separator {
  color: fuchsia
}

span.cm-number {
  color: teal
}

.autocomplete-column-name {
  display: inline-block
}

.autocomplete-column-hint {
  color: #666;
  display: inline-block;
  float: right;
  margin-left: 1em
}

.CodeMirror-hints {
  z-index: 200
}
