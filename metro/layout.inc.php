<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * configures general layout
 * for detailed layout configuration please refer to the css files
 *
 * @package PhpMyAdmin-theme
 * @subpackage pmahomme
 */

$GLOBALS['cfg']['NaviWidth']                = '250';
$GLOBALS['cfg']['FontFamily']               = 'Open Sans';
$GLOBALS['cfg']['FontFamilyLight']          = '"Open Sans Light"';
$GLOBALS['cfg']['FontFamilyFixed']          = 'Consolas, "Courier New", Courier, Monospace, "Lucida Grande"';

/* Theme color scheme
 * Values: "teal", "redmond", "blueeyes", "mono", "win"
 * Set this value for the desired color scheme
 */

$scheme                                     = "win";

switch($scheme)
{
	case "win":
		
		$GLOBALS['cfg']['NaviColor']                = '#EEEEEE';
		$GLOBALS['cfg']['NaviBackground']           = '#377796';
		$GLOBALS['cfg']['NaviBackgroundLight']      = '#428EB4';
		$GLOBALS['cfg']['NaviPointerColor']         = '#333333';
		$GLOBALS['cfg']['NaviPointerBackground']    = '#377796';
		$GLOBALS['cfg']['NaviDatabaseNameColor']    = '#333333';
		$GLOBALS['cfg']['NaviHoverBackground']      = '#428EB4';
		$GLOBALS['cfg']['MainColor']                = '#333333';
		$GLOBALS['cfg']['MainBackground']           = '#FFFFFF';
		$GLOBALS['cfg']['BrowsePointerColor']       = '#377796';
		$GLOBALS['cfg']['BrowseWarningColor']       = '#D44A26';
		$GLOBALS['cfg']['BrowseSuccessColor']       = '#01A31C';
		$GLOBALS['cfg']['BrowseGrayColor']          = '#CCCCCC';
		$GLOBALS['cfg']['BrowseMarkerBackground']   = '#EEEEEE';
		$GLOBALS['cfg']['BorderColor']              = '#DDDDDD';
		$GLOBALS['cfg']['ButtonColor']              = '#FFFFFF';
		$GLOBALS['cfg']['ButtonBackground']         = '#377796';
		$GLOBALS['cfg']['ButtonHover']              = '#428EB4';
		$GLOBALS['cfg']['ThBackground']             = '#F7F7F7';
		$GLOBALS['cfg']['ThDisabledBackground']     = '#F3F3F3';
		$GLOBALS['cfg']['ThColor']                  = '#666666';
		$GLOBALS['cfg']['ThPointerColor']           = '#000000';
		$GLOBALS['cfg']['BgOne']                    = '#F7F7F7';
		$GLOBALS['cfg']['BgTwo']                    = '#FFFFFF';
		$GLOBALS['cfg']['BlueHeader']               = '#3A7EAD';
		break;
	
	case "teal":
		
		$GLOBALS['cfg']['NaviColor']                = '#FFFFFF';
		$GLOBALS['cfg']['NaviBackground']           = '#004D60';
		$GLOBALS['cfg']['NaviBackgroundLight']      = '#04627C';
		$GLOBALS['cfg']['NaviPointerColor']         = '#FFFFFF';
		$GLOBALS['cfg']['NaviPointerBackground']    = '#004D60';
		$GLOBALS['cfg']['NaviDatabaseNameColor']    = '#FFFFFF';
		$GLOBALS['cfg']['NaviHoverBackground']      = '#216475';
		$GLOBALS['cfg']['MainColor']                = '#333333';
		$GLOBALS['cfg']['MainBackground']           = '#FFFFFF';
		$GLOBALS['cfg']['BrowsePointerColor']       = '#004d60';
		$GLOBALS['cfg']['BrowseWarningColor']       = '#D44A26';
		$GLOBALS['cfg']['BrowseSuccessColor']       = '#01A31C';
		$GLOBALS['cfg']['BrowseGrayColor']          = '#CCCCCC';
		$GLOBALS['cfg']['BrowseMarkerBackground']   = '#EEEEEE';
		$GLOBALS['cfg']['BorderColor']              = '#DDDDDD';
		$GLOBALS['cfg']['ButtonColor']              = '#FFFFFF';
		$GLOBALS['cfg']['ButtonBackground']         = '#AAAAAA';
		$GLOBALS['cfg']['ButtonHover']              = '#000000';
		$GLOBALS['cfg']['ThBackground']             = '#F7F7F7';
		$GLOBALS['cfg']['ThDisabledBackground']     = '#F3F3F3';
		$GLOBALS['cfg']['ThColor']                  = '#666666';
		$GLOBALS['cfg']['ThPointerColor']           = '#000000';
		$GLOBALS['cfg']['BgOne']                    = '#F7F7F7';
		$GLOBALS['cfg']['BgTwo']                    = '#FFFFFF';
		$GLOBALS['cfg']['BlueHeader']               = '#3A7EAD';
		break;
	
	case "redmond":
	
		$GLOBALS['cfg']['NaviColor']                = '#FFFFFF';
		$GLOBALS['cfg']['NaviBackground']           = '#780505';
		$GLOBALS['cfg']['NaviBackgroundLight']      = '#A10707';
		$GLOBALS['cfg']['NaviPointerColor']         = '#FFFFFF';
		$GLOBALS['cfg']['NaviPointerBackground']    = '#780505';
		$GLOBALS['cfg']['NaviDatabaseNameColor']    = '#FFFFFF';
		$GLOBALS['cfg']['NaviHoverBackground']      = '#A10707';
		$GLOBALS['cfg']['MainColor']                = '#333333';
		$GLOBALS['cfg']['MainBackground']           = '#FFFFFF';
		$GLOBALS['cfg']['BrowsePointerColor']       = '#780505';
		$GLOBALS['cfg']['BrowseWarningColor']       = '#D44A26';
		$GLOBALS['cfg']['BrowseSuccessColor']       = '#01A31C';
		$GLOBALS['cfg']['BrowseGrayColor']          = '#CCCCCC';
		$GLOBALS['cfg']['BrowseMarkerBackground']   = '#EEEEEE';
		$GLOBALS['cfg']['BorderColor']              = '#DDDDDD';
		$GLOBALS['cfg']['ButtonColor']              = '#FFFFFF';
		$GLOBALS['cfg']['ButtonBackground']         = '#AAAAAA';
		$GLOBALS['cfg']['ButtonHover']              = '#000000';
		$GLOBALS['cfg']['ThBackground']             = '#F7F7F7';
		$GLOBALS['cfg']['ThDisabledBackground']     = '#F3F3F3';
		$GLOBALS['cfg']['ThColor']                  = '#666666';
		$GLOBALS['cfg']['ThPointerColor']           = '#000000';
		$GLOBALS['cfg']['BgOne']                    = '#F7F7F7';
		$GLOBALS['cfg']['BgTwo']                    = '#FFFFFF';
		$GLOBALS['cfg']['BlueHeader']               = '#3A7EAD';
		break;
		
	case "blueeyes":
	
		$GLOBALS['cfg']['NaviColor']                = '#FFFFFF';
		$GLOBALS['cfg']['NaviBackground']           = '#377796';
		$GLOBALS['cfg']['NaviBackgroundLight']      = '#428EB4';
		$GLOBALS['cfg']['NaviPointerColor']         = '#FFFFFF';
		$GLOBALS['cfg']['NaviPointerBackground']    = '#377796';
		$GLOBALS['cfg']['NaviDatabaseNameColor']    = '#FFFFFF';
		$GLOBALS['cfg']['NaviHoverBackground']      = '#428EB4';
		$GLOBALS['cfg']['MainColor']                = '#333333';
		$GLOBALS['cfg']['MainBackground']           = '#FFFFFF';
		$GLOBALS['cfg']['BrowsePointerColor']       = '#377796';
		$GLOBALS['cfg']['BrowseWarningColor']       = '#D44A26';
		$GLOBALS['cfg']['BrowseSuccessColor']       = '#01A31C';
		$GLOBALS['cfg']['BrowseGrayColor']          = '#CCCCCC';
		$GLOBALS['cfg']['BrowseMarkerBackground']   = '#EEEEEE';
		$GLOBALS['cfg']['BorderColor']              = '#DDDDDD';
		$GLOBALS['cfg']['ButtonColor']              = '#FFFFFF';
		$GLOBALS['cfg']['ButtonBackground']         = '#377796';
		$GLOBALS['cfg']['ButtonHover']              = '#000000';
		$GLOBALS['cfg']['ThBackground']             = '#F7F7F7';
		$GLOBALS['cfg']['ThDisabledBackground']     = '#F3F3F3';
		$GLOBALS['cfg']['ThColor']                  = '#666666';
		$GLOBALS['cfg']['ThPointerColor']           = '#000000';
		$GLOBALS['cfg']['BgOne']                    = '#F7F7F7';
		$GLOBALS['cfg']['BgTwo']                    = '#FFFFFF';
		$GLOBALS['cfg']['BlueHeader']               = '#3A7EAD';
		break;
		
	case "mono":
	
		$GLOBALS['cfg']['NaviColor']                = '#FFFFFF';
		$GLOBALS['cfg']['NaviBackground']           = '#666666';
		$GLOBALS['cfg']['NaviBackgroundLight']      = '#999999';
		$GLOBALS['cfg']['NaviPointerColor']         = '#FFFFFF';
		$GLOBALS['cfg']['NaviPointerBackground']    = '#666666';
		$GLOBALS['cfg']['NaviDatabaseNameColor']    = '#FFFFFF';
		$GLOBALS['cfg']['NaviHoverBackground']      = '#999999';
		$GLOBALS['cfg']['MainColor']                = '#333333';
		$GLOBALS['cfg']['MainBackground']           = '#FFFFFF';
		$GLOBALS['cfg']['BrowsePointerColor']       = '#666666';
		$GLOBALS['cfg']['BrowseWarningColor']       = '#666666';
		$GLOBALS['cfg']['BrowseSuccessColor']       = '#888888';
		$GLOBALS['cfg']['BrowseGrayColor']          = '#CCCCCC';
		$GLOBALS['cfg']['BrowseMarkerBackground']   = '#EEEEEE';
		$GLOBALS['cfg']['BorderColor']              = '#DDDDDD';
		$GLOBALS['cfg']['ButtonColor']              = '#FFFFFF';
		$GLOBALS['cfg']['ButtonBackground']         = '#AAAAAA';
		$GLOBALS['cfg']['ButtonHover']              = '#000000';
		$GLOBALS['cfg']['ThBackground']             = '#F7F7F7';
		$GLOBALS['cfg']['ThDisabledBackground']     = '#F3F3F3';
		$GLOBALS['cfg']['ThColor']                  = '#666666';
		$GLOBALS['cfg']['ThPointerColor']           = '#000000';
		$GLOBALS['cfg']['BgOne']                    = '#F7F7F7';
		$GLOBALS['cfg']['BgTwo']                    = '#FFFFFF';
		$GLOBALS['cfg']['BlueHeader']               = '#555555';
		break;
}

/* query window */

$GLOBALS['cfg']['QueryWindowWidth']         = 600;
$GLOBALS['cfg']['QueryWindowHeight']        = 400;

/* SQL Parser Settings Syntax colouring data */
$GLOBALS['cfg']['SQP']['fmtColor']      = array(
    'comment'            => '#808000',
    'comment_mysql'      => '',
    'comment_ansi'       => '',
    'comment_c'          => '',
    'digit'              => '',
    'digit_hex'          => 'teal',
    'digit_integer'      => 'teal',
    'digit_float'        => 'aqua',
    'punct'              => 'fuchsia',
    'alpha'              => '',
    'alpha_columnType'   => '#FF9900',
    'alpha_columnAttrib' => '#0000FF',
    'alpha_reservedWord' => '#990099',
    'alpha_functionName' => '#FF0000',
    'alpha_identifier'   => 'black',
    'alpha_charset'      => '#6495ed',
    'alpha_variable'     => '#800000',
    'quote'              => '#008000',
    'quote_double'       => '',
    'quote_single'       => '',
    'quote_backtick'     => ''
);

/* Chart colors */

 $GLOBALS['cfg']['chartColor'] = array(
    'gradientIntensity'       => 50,
    // The style of the chart title.
    'titleColor'              => '#666666',
    'titleBgColor'            => '#E5E5E5',
    // Chart border (0 for no border)
    'border'                  => '#DDDDDD',
    // Chart background color.
    'bgColor'                 => '#FBFBFB',
    // when graph area gradient is used, this is the color of the graph
    // area border
    'graphAreaColor'          => '#D5D9DD',
    // the background color of the graph area
    'graphAreaGradientColor'  => $GLOBALS['cfg']['BgTwo'],
    // the color of the grid lines in the graph area
    'gridColor'               => '#E6E6E6',
    // the color of the scale and the labels
    'scaleColor'              => '#D5D9DD',

 );

?>