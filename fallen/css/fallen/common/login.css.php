body#loginform {
  background-color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  margin: 0
}

body#loginform #page_content {
  background-color: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  height: 220px;
  margin: 0!important;
  margin-top: 10%!important;
  padding: 35px 20px 20px
}

body#loginform div.container {
  margin-left: auto;
  margin-right: auto;
  text-align: left;
  width: 48em
}

body#loginform div.container:before {
  background-color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  border-radius: 50%;
  box-shadow: 0 4px 2px rgba(14, 14, 14, 0.29);
  color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  content: "a";
  float: left;
  font-family: "<?php echo $font_family_icon ?>";
  font-size: 235px;
  height: 220px;
  line-height: 1;
  margin-right: 20px;
  margin-top: -10px;
  overflow: hidden;
  width: 230px
}

/* IE Setting for 'body#loginform div.container:before' */

.ie body#loginform div.container:before {
  border-radius: 0;
  box-shadow: 0 1px 1px rgba(14, 14, 14, 0.29);
}

body#loginform h1 {
  color: <?php echo $GLOBALS['cfg']['MainBackground'] ?>;
  display: inline-block;
  font-size: 2.5em;
  line-height: 2;
  margin-right: -50%;
  padding-top: 0;
  text-align: left
}

body#loginform a.logo {
  display: none
}

body#loginform fieldset legend {
  display: none
}

body#loginform .item {
  margin-bottom: 10px
}

body#loginform input.textfield {
  background: <?php echo $GLOBALS['cfg']['NaviColor'] ?>;
  border: 1px solid #fff;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  color: <?php echo $GLOBALS['cfg']['ThColor'] ?>;
  margin: 0;
  width: 100%
}

body#loginform input.textfield:hover, body#loginform input.textfield:focus {
  background-color: #fff;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  color: #333;
  margin: 0
}

body#loginform input[type=submit] {
  background-color: #fff;
  border: none;
  box-shadow: 0 1px 1px <?php echo $GLOBALS['cfg']['MainColor'] ?>;
  color: #444;
  margin: 0;
  padding: 7px
}

body#loginform input[type=submit]:hover {
  background-color: #eee
}

body#loginform input[type=submit]:focus {
  background-color: #ddd;
  box-shadow: none
}

body#loginform select {
  background: <?php echo $GLOBALS['cfg']['NaviBackground'] ?>;
  border: 1px solid #fff;
  color: <?php echo $GLOBALS['cfg']['NaviColor'] ?>;
  margin: 0!important;
  min-width: 100%;
  padding-left: 0!important
}

body#loginform select:hover {
  border: 1px solid <?php echo $GLOBALS['cfg']['NaviColor'] ?>;
}

body#loginform br {
  display: none
}

body#loginform fieldset {
  background: none;
  border: none;
  margin-top: 0;
  margin-bottom: 10px;
  padding: 0
}

body#loginform fieldset:first-child {
  border-bottom: none;
  margin: 0;
  margin-bottom: 0
}

body#loginform fieldset.tblFooters {
  border: none;
  clear: none;
  margin: 0
}

body#loginform .error {
  box-shadow: 0 1px 1px #666;
  float: left;
  margin-top: -280px;
  width: 48em
}

body#loginform form.login label {
  display: none
}
