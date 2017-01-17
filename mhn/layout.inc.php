<?php
$colorScheme = 'purple';	// black | orange | brown | blue | teal | red | indigo | grey | purple

$GLOBALS['cfg']['scheme'] = $colorScheme;
switch($colorScheme){
	case 'black':
		$GLOBALS['cfg']['cPri']             = '#0A0A0A'; //600
		$GLOBALS['cfg']['cSec']             = '#2C2D2C'; //500
		$GLOBALS['cfg']['cLte']             = '#AAAAAA'; //100
		$GLOBALS['cfg']['white']            = '#E2E2E2'; //50
	break;
	case 'orange':
		$GLOBALS['cfg']['cPri']             = '#FB8C00'; //600
		$GLOBALS['cfg']['cSec']             = '#8BC34A'; //500
		$GLOBALS['cfg']['cLte']             = '#FFE0B2'; //100
		$GLOBALS['cfg']['white']            = '#FFF3E0'; //50
	break;
	case 'brown':
		$GLOBALS['cfg']['cPri']             = '#6D4C41'; //600
		$GLOBALS['cfg']['cSec']             = '#F44336'; //500
		$GLOBALS['cfg']['cLte']             = '#D7CCC8'; //100
		$GLOBALS['cfg']['white']            = '#EFEBE9'; //50
	break;
	case 'blue':
		$GLOBALS['cfg']['cPri']             = '#1E88E5'; //600
		$GLOBALS['cfg']['cSec']             = '#607D8B'; //500
		$GLOBALS['cfg']['cLte']             = '#BBDEFB'; //100
		$GLOBALS['cfg']['white']            = '#E3F2FD'; //50
	break;
	case 'teal':
		$GLOBALS['cfg']['cPri']             = '#00897B'; //600
		$GLOBALS['cfg']['cSec']             = '#03A9F4'; //500
		$GLOBALS['cfg']['cLte']             = '#B2DFDB'; //100
		$GLOBALS['cfg']['white']            = '#E0F2F1'; //50
	break;
	case 'red':
		$GLOBALS['cfg']['cPri']             = '#E53935'; //600
		$GLOBALS['cfg']['cSec']             = '#607D8B'; //500
		$GLOBALS['cfg']['cLte']             = '#FFCDD2'; //100
		$GLOBALS['cfg']['white']            = '#FFEBEE'; //50
	break;
	case 'indigo':
		$GLOBALS['cfg']['cPri']             = '#3949AB'; //600
		$GLOBALS['cfg']['cSec']             = '#9C27B0'; //500
		$GLOBALS['cfg']['cLte']             = '#C5CAE9'; //100
		$GLOBALS['cfg']['white']            = '#E8EAF6'; //50
	break;
	case 'grey':
		$GLOBALS['cfg']['cPri']             = '#757575'; //600
		$GLOBALS['cfg']['cSec']             = '#795548'; //500
		$GLOBALS['cfg']['cLte']             = '#F5F5F5'; //100
		$GLOBALS['cfg']['white']            = '#FAFAFA'; //50
	break;
	default:
		$GLOBALS['cfg']['cPri']             = '#5E35B1'; //600
		$GLOBALS['cfg']['cSec']             = '#E91E63'; //500
		$GLOBALS['cfg']['cLte']             = '#D1C4E9'; //100
		$GLOBALS['cfg']['white']            = '#EDE7F6'; //50
}

$GLOBALS['cfg']['NaviWidth']                = 240;
$GLOBALS['cfg']['NaviColor']                = '#000';
$GLOBALS['cfg']['NaviBackground']           = '#fff';
$GLOBALS['cfg']['NaviPointerColor']         = '#000';
$GLOBALS['cfg']['NaviPointerBackground']    = '#ddd';

$GLOBALS['cfg']['MainColor']                = '#444';
$GLOBALS['cfg']['MainBackground']           = '#fff';
$GLOBALS['cfg']['BrowsePointerColor']       = '#000';
$GLOBALS['cfg']['BrowsePointerBackground']  = '#cfc';
$GLOBALS['cfg']['BrowseMarkerColor']        = '#000';
$GLOBALS['cfg']['BrowseMarkerBackground']   = '#fc9';

$GLOBALS['cfg']['FontFamily']       = '"Roboto","Open Sans","Segoe UI Light","Segoe UI",sans-serif;';
$GLOBALS['cfg']['FontFamilyFixed']  = 'monospace,"Lucida Console","Courier New"';

$GLOBALS['cfg']['ThBackground']     = '#D3DCE3';
$GLOBALS['cfg']['ThColor']          = '#000';
$GLOBALS['cfg']['BgOne']            = '#E5E5E5';
$GLOBALS['cfg']['BgTwo']            = '#D5D5D5';

function shadeColor($hex,$percent){
	$hash = '';
	if (stristr($hex,'#')) {
		$hex = str_replace('#','',$hex);
		$hash = '#';
	}
	$rgb = array(hexdec(substr($hex,0,2)), hexdec(substr($hex,2,2)), hexdec(substr($hex,4,2)));
	for ($i=0; $i<3; $i++) {
		if ($percent > 0) {
			$rgb[$i] = round($rgb[$i] * $percent) + round(255 * (1-$percent));
		} else {
			$positivePercent = $percent - ($percent*2);
			$rgb[$i] = round($rgb[$i] * $positivePercent) + round(0 * (1-$positivePercent));
		}
		if ($rgb[$i] > 255) {
			$rgb[$i] = 255;
		}
	}
	$hex = '';
	for($i=0; $i < 3; $i++) {
		$hexDigit = dechex($rgb[$i]);
		if(strlen($hexDigit) == 1) {
		$hexDigit = "0" . $hexDigit;
		}
		$hex .= $hexDigit;
	}
	return $hash.$hex;
}
