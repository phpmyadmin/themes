<?php

$GLOBALS['cfg']['NaviWidth']                = '250';
$GLOBALS['cfg']['FontFamily']               = '"Open Sans", "Segoe UI"';
$GLOBALS['cfg']['FontFamilyLight']          = '"Open Sans Light", "Segoe UI Light", "Segoe UI"; font-weight: 300';
$GLOBALS['cfg']['FontFamilyFixed']          = 'Consolas, Monospace, "Lucida Grande"';

/* Theme color scheme
 * Values: "teal", "redmond", "blueeyes", "mono", "win"
 * Set this value for the desired color scheme
 */

$scheme                                     = "Black";
$GLOBALS['cfg']['Scheme']                   = $scheme;

switch($scheme)
{
    case "Black":

        $GLOBALS['cfg']['NavigationTreePointerEnable']= 'true';
        $GLOBALS['cfg']['NaviColor']                = '#000000';
        $GLOBALS['cfg']['NaviBackground']           = '#000000';
        $GLOBALS['cfg']['NaviBackgroundLight']      = '#FFFFFF';
        $GLOBALS['cfg']['NaviPointerColor']         = '#FFFFFF';
        $GLOBALS['cfg']['NaviPointerBackground']    = '#FFFFFF';
        $GLOBALS['cfg']['NaviDatabaseNameColor']    = '#E6E6E6';
        $GLOBALS['cfg']['NaviHoverBackground']      = '#555555';
        $GLOBALS['cfg']['MainColor']                = '#FFFFFF';
        $GLOBALS['cfg']['MainBackground']           = '#000000';
        $GLOBALS['cfg']['BrowsePointerColor']       = '#FFFFFF';
        $GLOBALS['cfg']['BrowseMarkerColor']        = '#E6E6E6';
        $GLOBALS['cfg']['BrowseWarningColor']       = '#000000';
        $GLOBALS['cfg']['BrowseSuccessColor']       = '#01A31C';
        $GLOBALS['cfg']['BrowseGrayColor']          = '#CCCCCC';
        $GLOBALS['cfg']['BrowseMarkerBackground']   = '#000000';
        $GLOBALS['cfg']['BorderColor']              = '#000000';
        $GLOBALS['cfg']['ButtonColor']              = '#FFFFFF';
        $GLOBALS['cfg']['ButtonBackground']         = '#000000';
        $GLOBALS['cfg']['ButtonHover']              = '#333333';
        $GLOBALS['cfg']['ThBackground']             = '#000000';
        $GLOBALS['cfg']['ThDisabledBackground']     = '#000000';
        $GLOBALS['cfg']['ThColor']                  = '#FFFFFF';
        $GLOBALS['cfg']['ThPointerColor']           = '#FFFFFF';
        $GLOBALS['cfg']['BgOne']                    = '#262626';
        $GLOBALS['cfg']['BgTwo']                    = '#000000';
        $GLOBALS['cfg']['BlueHeader']               = '#000000';
        $GLOBALS['cfg']['Hover1']                   = '#000000';
        $GLOBALS['cfg']['ActiveText']               = '#3E87E3';
        break;
}
