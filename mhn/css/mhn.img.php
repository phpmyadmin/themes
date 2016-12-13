<?php
error_reporting('ALL^NOTICE');
$get = htmlspecialchars(isset($_REQUEST['i'])?$_REQUEST['i']:null,ENT_QUOTES);
if(!in_array($get,array('main-bg','host','home','logout','help','sqlhelp','cog','reload','db','db-grp','db-new','db-del','plus','minus','tbl-ops','theme','lang','sql','status','rights','export','import','app','vars','asci','engine','plugin','more','props','table-add','pause','column-add','search','find-replace','events','event-add','browse','track','triggers','trigger-add','designer','routines','routine-add','centralColumns','centralColumns-add','centralColumns-del','insrow','edit','views','view-add','drop','key','unique','index','index-add','spatial','ftext','print','tblanalyse','move','normalize','collapseall','link','unlink','data-full','data-empty','lightbulb','lightbulb-off','passwd','favourite','comment','search-plus','notice','error','success','usredit','usradd','usrcheck','usrdrop','sort-asc','sort-desc','bookmark','go-top','console','window-new'))){
    header('Content-type:text/plain');
    exit('Access Denied');
}
function make_icon($i){
    $svg = '';
    $txt = htmlspecialchars(isset($_REQUEST['c'])?$_REQUEST['c']:'#555',ENT_QUOTES);
    $txt = str_replace('h_','#',$txt);
    $svg.='<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">';
    if($i=='main-bg'):
        $a = htmlspecialchars(isset($_REQUEST['a'])?$_REQUEST['a']:'#EF6C00',ENT_QUOTES);
        $b = htmlspecialchars(isset($_REQUEST['b'])?$_REQUEST['b']:'#E65100',ENT_QUOTES);
        $c = htmlspecialchars(isset($_REQUEST['c'])?$_REQUEST['c']:'#E0F7FA',ENT_QUOTES);
        $svg.='<svg version="1.1" id="background" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1280px" height="800px" viewBox="0 0 1280 800" enable-background="new 0 0 1280 800" xml:space="preserve">';
        $svg.='<g><defs><filter id="dropshadow" height="130%"><feGaussianBlur in="SourceAlpha" stdDeviation="10"/><feOffset dx="10" dy="10" result="offsetblur"/><feComponentTransfer><feFuncA type="linear" slope="0.2"/></feComponentTransfer><feMerge><feMergeNode/><feMergeNode in="SourceGraphic"/></feMerge></filter></defs>';
        $svg.='<rect fill="'.str_replace('h_','#',$c).'" width="1280" height="800"/><polygon fill="'.str_replace('h_','#',$b).'" points="1280,572.496 1280,0 452.806,0" filter="url(#dropshadow)"/><polygon fill="'.str_replace('h_','#',$a).'" points="1280,499 1280,0 559,0" filter="url(#dropshadow)"/></g></svg>';
    else:
    $svg.='<svg version="1.1" id="PMA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">';
    switch($i){
        case 'host':
            $svg.='<g id="server">';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="1,2 1,11 8,11 15,11 15,2"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M8,15v-4V15z"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="5,15 8,15 11,15"/>';
            $svg.='</g>';
        break;
        case 'home':
            $svg.='<polygon id="home" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="6,15 2,15 2,6.134 7.594,1.083 14,5.877 14,15 10,15 10,9 6,9 "/>';
        break;
        case 'logout':
            $svg.='<g id="exit"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="2,11 2,15 14,15 14,1 2,1 2,1 2,5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="8" x2="10" y2="8"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="7,12 3,8 7,4"/></g>';
        break;
        case 'help':
            $svg.='<g id="help"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="7.958" cy="8.042" r="6.667"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" d="M7.644,9.849 c0,0-0.001-0.663,0.022-0.801C7.749,8.534,8.319,8.006,9.11,7.395c0.792-0.611,0.625-1.889,0.264-2.362 C9.013,4.561,8.249,4.007,6.985,4.478S5.612,6.214,5.612,6.214"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="7.628" y1="10.535" x2="7.656" y2="12.313"/></g>';
        break;
        case 'sqlhelp':
            $svg.='<g id="sqlhelp"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="13.4,3.813 11.111,1 2,1 2,15 13,15 13,8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="6" x2="9" y2="6"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="9" x2="11" y2="9"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="12" x2="11" y2="12"/></g>';
        break;
        case 'cog':
            $svg.='<path id="setting" fill="'.$txt.'" d="M14.903,6.241h-0.796c-0.117-0.475-0.288-0.928-0.506-1.353l0.524-0.524c0.408-0.408,0.408-1.069,0-1.476 ';
            $svg.='l-1.012-1.012c-0.408-0.408-1.069-0.408-1.476,0l-0.453,0.453c-0.443-0.261-0.921-0.469-1.425-0.615V1.097 ';
            $svg.='c0-0.576-0.467-1.044-1.044-1.044H7.284c-0.577,0-1.044,0.467-1.044,1.044v0.615C5.737,1.859,5.259,2.067,4.816,2.328L4.363,1.875 ';
            $svg.='c-0.408-0.408-1.069-0.408-1.476,0L1.875,2.887c-0.408,0.408-0.408,1.069,0,1.476l0.524,0.524C2.181,5.313,2.011,5.766,1.893,6.241 ';
            $svg.='H1.097c-0.577,0-1.044,0.467-1.044,1.044v1.431c0,0.577,0.467,1.044,1.044,1.044h0.94c0.139,0.413,0.32,0.807,0.538,1.177l-0.7,0.7 ';
            $svg.='c-0.408,0.408-0.408,1.069,0,1.476l1.012,1.012c0.408,0.408,1.069,0.408,1.476,0l0.772-0.772c0.351,0.18,0.721,0.327,1.106,0.439 ';
            $svg.='v1.11c0,0.577,0.467,1.044,1.044,1.044h1.431c0.577,0,1.044-0.467,1.044-1.044v-1.11c0.385-0.112,0.755-0.259,1.106-0.439 ';
            $svg.='l0.772,0.772c0.408,0.408,1.069,0.408,1.476,0l1.012-1.012c0.408-0.408,0.408-1.069,0-1.476l-0.7-0.7 ';
            $svg.='c0.218-0.37,0.399-0.764,0.538-1.177h0.94c0.576,0,1.044-0.467,1.044-1.044V7.284C15.947,6.708,15.479,6.241,14.903,6.241z ';
            $svg.=' M12.059,7.753c0,0.43-0.068,0.845-0.192,1.234c-0.13,0.406-0.322,0.784-0.565,1.124c-0.328,0.459-0.749,0.846-1.235,1.135 ';
            $svg.='c-0.394,0.234-0.831,0.403-1.297,0.492c-0.25,0.048-0.507,0.074-0.77,0.074c-0.264,0-0.521-0.026-0.77-0.074 ';
            $svg.='c-0.465-0.089-0.903-0.258-1.297-0.492c-0.487-0.289-0.907-0.676-1.235-1.135c-0.243-0.34-0.435-0.718-0.565-1.124 ';
            $svg.='C4.009,8.597,3.941,8.183,3.941,7.753c0-0.264,0.026-0.521,0.074-0.77C4.083,6.628,4.197,6.291,4.35,5.976 ';
            $svg.='C4.699,5.261,5.252,4.664,5.933,4.26c0.26-0.154,0.539-0.281,0.833-0.374C7.155,3.762,7.57,3.694,8,3.694 ';
            $svg.='c0.43,0,0.845,0.068,1.234,0.192c0.294,0.094,0.573,0.22,0.833,0.374c0.681,0.404,1.234,1.001,1.582,1.716 ';
            $svg.='c0.153,0.315,0.267,0.652,0.335,1.006C12.033,7.232,12.059,7.489,12.059,7.753z"/>';
        break;
        case 'reload':
            $svg.='<g id="refresh"><path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" d="M11.844,10.971c0,0,1.502-5.368-2.82-7.736 C5.158,1.117,1.079,4.038,1.101,7.959c0.018,3.178,2.271,5.01,5.125,5.409c2.219,0.31,3.744-1.136,3.744-1.136"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" points="8.459,7.653 11.844,11.066 14.973,7.506"/></g>';
        break;
        case 'db':
            $svg.='<path id="database" fill="'.$txt.'" d="M8,15.896c-3.737,0-6.768-1.011-6.768-2.256c0-0.681,0-1.425,0-2.256c0-0.196,0.098-0.382,0.239-0.564 C2.226,11.792,4.85,12.512,8,12.512s5.774-0.72,6.529-1.692c0.141,0.182,0.239,0.368,0.239,0.564c0,0.653,0,1.346,0,2.256 C14.768,14.885,11.736,15.896,8,15.896z M8,11.384c-3.737,0-6.768-1.011-6.768-2.256c0-0.681,0-1.425,0-2.256 c0-0.12,0.045-0.236,0.106-0.351l0,0c0.034-0.072,0.079-0.143,0.133-0.213C2.226,7.279,4.85,8,8,8s5.774-0.721,6.529-1.692 c0.054,0.07,0.099,0.141,0.133,0.213l0,0c0.061,0.115,0.106,0.231,0.106,0.351c0,0.653,0,1.346,0,2.256 C14.768,10.373,11.736,11.384,8,11.384z M8,6.872c-3.737,0-6.768-1.011-6.768-2.256c0-0.356,0-0.733,0-1.128 c0-0.359,0-0.731,0-1.128c0-1.245,3.031-2.256,6.768-2.256c3.736,0,6.768,1.011,6.768,2.256c0,0.352,0,0.725,0,1.128 c0,0.345,0,0.709,0,1.128C14.768,5.861,11.736,6.872,8,6.872z M8,1.232c-2.492,0-4.512,0.504-4.512,1.128S5.508,3.488,8,3.488 s4.512-0.504,4.512-1.128S10.492,1.232,8,1.232z"/>';
        break;
        case 'db-grp':
            $svg.='<g id="database-group"><polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="4,10 4,10 1,10 1,10 1,1 1,1 4,1 4,1"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="15,15 15,15 1,15 1,15 1,13 1,13 15,13 15,13"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="15,10 15,10 12,10 12,10 12,1 12,1 15,1 15,1"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="9,10 9,10 7,10 7,10 7,1 7,1 9,1 9,1"/></g>';
        break;
        case 'db-new':
            $svg.='<g id="database-add"><path fill="'.$txt.'" d="M5.851,15.896c-3.063,0-5.547-0.829-5.547-1.849c0-0.558,0-1.168,0-1.849c0-0.161,0.08-0.313,0.196-0.462 c0.618,0.796,2.769,1.387,5.351,1.387s4.733-0.59,5.351-1.387c0.116,0.149,0.196,0.302,0.196,0.462c0,0.535,0,1.103,0,1.849 C11.398,15.067,8.913,15.896,5.851,15.896z M5.851,12.198c-3.063,0-5.547-0.829-5.547-1.849c0-0.558,0-1.168,0-1.849 c0-0.098,0.037-0.193,0.087-0.288l0,0c0.028-0.059,0.065-0.117,0.109-0.175c0.618,0.796,2.769,1.387,5.351,1.387 s4.733-0.591,5.351-1.387c0.044,0.057,0.081,0.116,0.109,0.175l0,0c0.05,0.094,0.087,0.19,0.087,0.288c0,0.535,0,1.103,0,1.849 C11.398,11.369,8.913,12.198,5.851,12.198z M5.851,8.499c-3.063,0-5.547-0.828-5.547-1.849c0-0.292,0-0.601,0-0.925 c0-0.294,0-0.599,0-0.925c0-1.021,2.484-1.849,5.547-1.849c3.063,0,5.547,0.828,5.547,1.849c0,0.288,0,0.595,0,0.925 c0,0.283,0,0.581,0,0.925C11.398,7.671,8.913,8.499,5.851,8.499z M5.851,3.877c-2.042,0-3.698,0.413-3.698,0.925 s1.656,0.925,3.698,0.925s3.698-0.413,3.698-0.925S7.893,3.877,5.851,3.877z"/>';
            $svg.='<circle fill="#FFFFFF" stroke="'.$txt.'" stroke-miterlimit="10" cx="11.517" cy="4.483" r="3.863"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="9" y1="4.5" x2="14" y2="4.5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="11.5" y1="2" x2="11.5" y2="7"/></g>';
        break;
        case 'db-del':
            $svg.='<g id="deltbl"><path fill="'.$txt.'" d="M5.851,15.896c-3.063,0-5.547-0.829-5.547-1.849c0-0.558,0-1.168,0-1.849c0-0.161,0.08-0.313,0.196-0.462 c0.618,0.796,2.769,1.387,5.351,1.387s4.733-0.59,5.351-1.387c0.116,0.149,0.196,0.302,0.196,0.462c0,0.535,0,1.103,0,1.849 C11.398,15.067,8.913,15.896,5.851,15.896z M5.851,12.198c-3.063,0-5.547-0.829-5.547-1.849c0-0.558,0-1.168,0-1.849 c0-0.098,0.037-0.193,0.087-0.288l0,0c0.028-0.059,0.065-0.117,0.109-0.175c0.618,0.796,2.769,1.387,5.351,1.387 s4.733-0.591,5.351-1.387c0.044,0.057,0.081,0.116,0.109,0.175l0,0c0.05,0.094,0.087,0.19,0.087,0.288c0,0.535,0,1.103,0,1.849 C11.398,11.369,8.913,12.198,5.851,12.198z M5.851,8.499c-3.063,0-5.547-0.828-5.547-1.849c0-0.292,0-0.601,0-0.925 c0-0.294,0-0.599,0-0.925c0-1.021,2.484-1.849,5.547-1.849c3.063,0,5.547,0.828,5.547,1.849c0,0.288,0,0.595,0,0.925 c0,0.283,0,0.581,0,0.925C11.398,7.671,8.913,8.499,5.851,8.499z M5.851,3.877c-2.042,0-3.698,0.413-3.698,0.925 s1.656,0.925,3.698,0.925s3.698-0.413,3.698-0.925S7.893,3.877,5.851,3.877z"/>';
            $svg.='<circle fill="#FFFFFF" stroke="'.$txt.'" stroke-miterlimit="10" cx="11.517" cy="4.483" r="3.863"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="9" y1="4.5" x2="14" y2="4.5"/></g>';
        break;
        case 'plus':
            $svg.='<g id="plus"><circle fill="#fff" stroke="'.$txt.'" stroke-miterlimit="10" cx="8.333" cy="7.604" r="5.604"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="5" y1="7.5" x2="12" y2="7.5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="8.5" y1="4" x2="8.5" y2="11"/></g>';
        break;
        case 'minus':
            $svg.='<g id="minus"><circle fill="#fff" stroke="'.$txt.'" stroke-miterlimit="10" cx="8.333" cy="7.604" r="5.604"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="5" y1="7.5" x2="12" y2="7.5"/></g>';
        break;
        case 'tbl-ops':
            $svg.='<g id="table-option"><path fill="'.$txt.'" d="M14.02,7.145h-0.575c-0.306-0.865-1.13-1.486-2.1-1.486s-1.794,0.621-2.1,1.486H1.98c-0.369,0-0.669,0.299-0.669,0.669 c0,0.369,0.299,0.669,0.669,0.669h7.217c0.26,0.942,1.122,1.635,2.147,1.635s1.886-0.693,2.147-1.635h0.529 c0.369,0,0.669-0.3,0.669-0.669C14.688,7.445,14.389,7.145,14.02,7.145z"/>';
            $svg.='<path fill="'.$txt.'" d="M14.02,12.942H6.756c-0.306-0.865-1.13-1.486-2.1-1.486s-1.794,0.621-2.1,1.486H1.98c-0.369,0-0.669,0.3-0.669,0.669 S1.611,14.28,1.98,14.28h0.529c0.26,0.942,1.122,1.635,2.147,1.635s1.886-0.693,2.147-1.635h7.217c0.369,0,0.669-0.3,0.669-0.669 S14.389,12.942,14.02,12.942z"/>';
            $svg.='<path fill="'.$txt.'" d="M1.98,2.909h0.529c0.26,0.942,1.122,1.635,2.147,1.635s1.886-0.693,2.147-1.635h7.217c0.369,0,0.669-0.299,0.669-0.669 s-0.299-0.669-0.669-0.669H6.756c-0.306-0.865-1.13-1.486-2.1-1.486s-1.794,0.621-2.1,1.486H1.98c-0.369,0-0.669,0.299-0.669,0.669 S1.611,2.909,1.98,2.909z"/></g>';
        break;
        case 'theme':
            $svg.='<g id="theme"><g><g><path fill="'.$txt.'" d="M15.558,0.073c-0.733,0.579-5.433,6.254-7.207,7.844C7.461,8.712,7.899,9.374,7.899,9.374 c0.265,0.027,0.53,0.424,0.53,0.424c0.517,0.059,1.325-0.795,2.73-2.995c1.887-2.956,4.664-6.572,4.664-6.572 C16.009-0.139,15.558,0.073,15.558,0.073z"/>';
            $svg.='<path fill="'.$txt.'" d="M6.673,9.87c-0.87,1.523-2.104,1.037-2.104,1.132c0,0.45,1.554,0.92,2.433,0.704c1.078-0.265,1.363-1.153,1.363-1.602 C8.365,9.653,7.266,8.834,6.673,9.87z"/></g>';
            $svg.='<path fill="'.$txt.'" d="M9.772,11.837c-0.654-0.139-1.18-0.341-1.598-0.592c-0.238,0.297-0.595,0.558-1.116,0.686 c-0.164,0.041-0.352,0.061-0.56,0.061c-0.881,0-2.161-0.386-2.161-0.991c0-0.107,0.07-0.2,0.174-0.233 c0.03-0.009,0.061-0.014,0.1-0.014c0.031,0,0.065,0.003,0.109,0.006c0.059,0.005,0.133,0.01,0.219,0.01 c0.632,0,1.148-0.342,1.534-1.017c0.096-0.167,0.201-0.29,0.309-0.381C6.165,6.89,8.183,3.574,6.475,3.574 c-3.503,0-6.342,2.779-6.342,6.207c0,3.428,2.84,6.206,6.342,6.206C9.978,15.988,11.772,12.26,9.772,11.837z M4.864,4.686 c0.393,0,0.711,0.319,0.711,0.711c0,0.393-0.318,0.711-0.711,0.711c-0.392,0-0.71-0.318-0.71-0.711 C4.154,5.005,4.472,4.686,4.864,4.686z M3.042,6.225c0.528,0,0.956,0.428,0.956,0.956c0,0.528-0.428,0.956-0.956,0.956 c-0.528,0-0.957-0.428-0.957-0.956C2.085,6.654,2.513,6.225,3.042,6.225z M0.857,10.169c0-0.678,0.549-1.228,1.228-1.228 c0.678,0,1.228,0.55,1.228,1.228c0,0.678-0.55,1.228-1.228,1.228C1.407,11.397,0.857,10.847,0.857,10.169z M4.269,15.043 c-0.828,0-1.5-0.671-1.5-1.5c0-0.828,0.672-1.499,1.5-1.499c0.829,0,1.5,0.672,1.5,1.499C5.769,14.372,5.098,15.043,4.269,15.043z"/></g></g>';
        break;
        case 'lang':
            $svg.='<path id="lang" fill="'.$txt.'" d="M14.809,13.931C7.956,11.75,7.947,11.75,7.947,11.75c-0.142,0.063-6.498,2.207-6.587,2.207 c-0.071,0-0.133-0.044-0.16-0.115c0-0.009-0.009-0.018-0.009-0.026V4.259C1.2,4.232,1.209,4.188,1.227,4.17 C1.28,4.108,1.351,4.09,1.404,4.073c0.026-0.009,0.567-0.186,1.321-0.443V0.225L7.672,1.98c0.062-0.018,5.576-1.924,5.656-1.924 c0.098,0,0.178,0.071,0.178,0.186v3.706l1.303,0.417V13.931z M7.69,11.484V2.335L1.537,4.401v9.14L7.69,11.484z M6.422,9.428 C6.307,9.374,5.784,9.082,5.651,8.993C5.518,8.904,5.012,8.488,4.95,8.461c-0.319,0.488-0.727,1.063-1.188,1.604 c-0.16,0.187-0.638,0.789-0.931,0.976c-0.044,0.026-0.301,0.053-0.337,0.035c0.142-0.106,0.55-0.611,0.727-0.815 ';
            $svg.='c0.222-0.257,1.276-1.729,1.454-2.066c0.187-0.336,0.745-1.454,0.771-1.56c-0.089-0.009-0.789,0.23-0.975,0.292 C4.294,6.98,3.807,7.096,3.771,7.123C3.736,7.158,3.762,7.264,3.745,7.3C3.727,7.335,3.567,7.415,3.47,7.433 c-0.088,0.026-0.292,0.036-0.417,0C2.938,7.406,2.832,7.291,2.805,7.247c0,0-0.035-0.053-0.044-0.204 c0.106-0.036,0.284-0.044,0.479-0.098C3.435,6.892,3.913,6.75,4.17,6.661c0.257-0.088,0.754-0.274,0.904-0.31 c0.16-0.027,0.559-0.292,0.771-0.363c0.213-0.071,0.363-0.16,0.373-0.116c0.009,0.044,0,0.24-0.009,0.293 C6.2,6.209,5.775,7.042,5.713,7.175C5.677,7.247,5.429,7.716,5.03,8.337c0.142,0.062,0.443,0.186,0.567,0.248 C5.748,8.656,6.803,9.1,6.856,9.117s0.15,0.426,0.133,0.496C6.972,9.676,6.537,9.472,6.422,9.428z M5.137,5.553 C5.048,5.722,4.826,5.837,4.693,5.89C4.56,5.943,4.338,5.997,4.161,5.997c-0.08-0.009-0.239-0.036-0.434-0.23 ';
            $svg.='C3.621,5.651,3.541,5.34,3.576,5.376C3.612,5.411,3.869,5.447,3.984,5.42c0.115-0.027,0.39-0.106,0.514-0.142 c0.133-0.044,0.399-0.115,0.488-0.124c0.088,0,0.16,0.035,0.186,0.15C5.199,5.456,5.154,5.518,5.137,5.553z M12.237,14.046 l-0.479,1.419l-0.354-0.585c-0.718,0.461-1.604,0.815-2.447,0.957c-0.257,0.054-0.55,0.106-0.807,0.106H7.406 c-0.94,0-2.651-0.559-3.396-1.1c-0.053-0.044-0.071-0.079-0.071-0.142c0-0.098,0.071-0.168,0.16-0.168 c0.08,0,0.497,0.257,0.612,0.31c0.798,0.399,1.915,0.763,2.811,0.763c1.108,0,1.861-0.142,2.872-0.576 c0.293-0.133,0.55-0.302,0.824-0.452l-0.381-0.647L12.237,14.046z M13.159,3.833V0.464L8.08,2.202L13.159,3.833z M13.443,11.005 l-1.604-5.824l-0.887-0.275L9.037,9.658l0.904,0.274l0.399-0.975l1.87,0.577l0.328,1.196L13.443,11.005z M11.919,8.461l-1.232-0.372 l0.674-1.64L11.919,8.461z"/>';
        break;
        case 'sql':
            $svg.='<g id="sql"><polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="15,1 1,1 1,5 1,15 15,15"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="5" x2="1" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="9" x2="12" y2="9"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="12" x2="12" y2="12"/></g>';
        break;
        case 'status':
            $svg.='<g id="status"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,1 1,15 15,15"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="8" x2="4" y2="12"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="7" y1="12" x2="7" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10" y1="12" x2="10" y2="7"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13" y1="12" x2="13" y2="2"/></g>';
        break;
        case 'rights':
            $svg.='<g id="user"><path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15,15H1v-3c0,0,3.469-2,7-2c3.719,0,7,2,7,2V15z"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="8.031" cy="4.75" r="3.625"/></g>';
        break;
        case 'export':
            $svg.='<g id="export"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,3 1,3 1,15 14,15 14,9"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M6.728,11.23c0,0-0.057-3.068,2.689-5.593c2.17-1.995,5.151-2.35,5.151-2.35"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="11.545,1.051 14.568,3.287 13.573,6.261"/></g>';
        break;
        case 'import':
            $svg.='<g id="import"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,3 1,3 1,15 14,15 14,9"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14.311,2.423c0,0-3.068-0.057-5.593,2.689c-1.995,2.17-2.35,5.151-2.35,5.151"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="4.132,7.24 6.368,10.263 10.342,9.268"/></g>';
        break;
        case 'app':
            $svg.='<g id="app"><rect x="1" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5" height="5"/>';
            $svg.='<rect x="1" y="10" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5" height="5"/>';
            $svg.='<rect x="10" y="10" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5" height="5"/>';
            $svg.='<rect x="10" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5" height="5"/></g>';
        break;
        case 'vars':
            $svg.='<g id="code"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.137,6.19 4.446,7.881 5.948,9.384"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="12.394,6.19 14.085,7.881 12.583,9.384"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9.895" y1="5.956" x2="8.636" y2="9.626"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="13.19,3.158 10.844,1 2,1 2,15 14,15 14,12"/></g>';
        break;
        case 'asci':
            $svg.='<g id="charset"><line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="1" x2="14" y2="1"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="4" x2="14" y2="4"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="8" x2="14" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="12" x2="14" y2="12"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="15" x2="14" y2="15"/></g>';
        break;
        case 'engine':
            $svg.='<g id="storage"><rect x="1" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14" height="4"/>';
            $svg.='<rect x="3" y="6" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10" height="8"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M6,9h4H6z"/></g>';
        break;
        case 'plugin':
            $svg.='<path id="plugin" fill="'.$txt.'" d="M14.111,7.681h-1.146V4.625c0-0.84-0.688-1.528-1.528-1.528H8.382V1.951c0-1.069-0.84-1.91-1.91-1.91 s-1.91,0.84-1.91,1.91v1.146H1.507c-0.84,0-1.528,0.688-1.528,1.528v2.903h1.146c1.146,0,2.062,0.917,2.062,2.062 s-0.917,2.063-2.062,2.063h-1.146v2.903c0,0.84,0.687,1.528,1.528,1.528H4.41v-1.146c0-1.146,0.917-2.063,2.063-2.063 s2.063,0.917,2.063,2.063v1.146h2.903c0.84,0,1.528-0.688,1.528-1.528V11.5h1.146c1.069,0,1.91-0.84,1.91-1.91 S15.181,7.681,14.111,7.681L14.111,7.681z"/>';
        break;
        case 'more':
            $svg.='<g id="more"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="8.114" cy="2.496" r="1.241"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="8.114" cy="13.759" r="1.241"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="8.114" cy="8.127" r="1.241"/></g>';
        break;
        case 'props':
            $svg.='<g id="props"><rect x="1" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14" height="4"/>';
            $svg.='<rect x="1" y="11" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<rect x="11" y="11" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="3" y2="11"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13" y1="5" x2="13" y2="11"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="5" y1="13" x2="11" y2="13"/></g>';
        break;
        case 'table-add':
            $svg.='<g id="props-add"><rect x="1" y="11" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<rect x="11" y="11" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<rect x="1" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="3" y2="11"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11" y1="2" x2="11" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="5" x2="14" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="5" y1="13" x2="11" y2="13"/></g>';
        break;
        case 'pause':
            $svg.='<g id="pause"><rect x="3" y="3" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="10"/>';
            $svg.='<rect x="10" y="3" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="10"/></g>';
        break;
        case 'column-add':
            $svg.='<g id="column-add"><rect x="3" y="3" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="10"/>';
            $svg.='<rect x="10" y="8" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="5"/>';
            $svg.='<polygon fill="'.$txt.'" points="11.047,6.34 11.047,3.734 8.459,3.734 8.459,2.645 11.047,2.645 11.047,0.058 12.149,0.058 12.149,2.645 14.735,2.645 14.735,3.734 12.149,3.734 12.149,6.34"/></g>';
        break;
        case 'search':
            $svg.='<g id="search"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="6.594" cy="6.781" r="5.406"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.088" y1="10.904" x2="14.207" y2="15.022"/></g>';
        break;
        case 'find-replace':
            $svg.='<g id="find-replace"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="6.854" cy="5.145" r="4.103"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4.202" y1="8.274" x2="1.076" y2="11.399"/>';
            $svg.='<path fill="'.$txt.'" d="M7.042,14.083v1.897h1.897l5.49-5.54l-1.897-1.897L7.042,14.083L7.042,14.083z M15.876,8.992 c0.2-0.2,0.2-0.499,0-0.699l-1.148-1.148c-0.2-0.2-0.499-0.2-0.699,0l-0.898,0.898l1.897,1.897L15.876,8.992L15.876,8.992z"/></g>';
        break;
        case 'events':
            $svg.='<g id="events"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="8.031" cy="8.01" r="6.844"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="8,4 8,8 10.896,10.896"/></g>';
        break;
        case 'event-add':
            $svg.='<g id="event-add"><polygon fill="'.$txt.'" points="11.14,16.004 11.14,13.091 8.204,13.091 8.204,11.081 11.14,11.081 11.14,8.167 13.097,8.167 13.097,11.081 16.04,11.081 16.04,13.091 13.097,13.091 13.097,16.004"/>';
            $svg.='<path fill="'.$txt.'" d="M2.188,8.01c0-3.222,2.622-5.844,5.844-5.844c3.219,0,5.838,2.616,5.843,5.833h2c-0.006-4.32-3.521-7.833-7.843-7.833 c-4.325,0-7.844,3.519-7.844,7.844c0,4.315,3.502,7.826,7.813,7.843v-2C4.792,13.836,2.188,11.222,2.188,8.01z"/>';
            $svg.='<path fill="'.$txt.'" d="M8,3C7.448,3,7,3.448,7,4v3.565l-2.786,2.599c-0.404,0.377-0.426,1.01-0.049,1.413c0.197,0.212,0.464,0.318,0.731,0.318 c0.245,0,0.489-0.089,0.682-0.269l3.104-2.896C8.885,8.542,9,8.277,9,8V4C9,3.448,8.552,3,8,3z"/></g>';
        break;
        case 'browse':
            $svg.='<g id="browse"><line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="2" x2="8" y2="2"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="2.753" cy="2.755" r="1.406"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="8" x2="8" y2="8"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="2.753" cy="8.058" r="1.406"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="14" x2="8" y2="14"/>';
            $svg.='<ellipse fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="2.723" cy="13.568" rx="1.377" ry="1.406"/></g>';
        break;
        case 'track':
            $svg.='<g id="tracking"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="7.979" cy="8.104" r="5.188"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="1" x2="8" y2="3"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="8" x2="13" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="15" x2="8" y2="13"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="8" x2="3" y2="8"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="7.917" cy="8.167" r="0.479"/></g>';
        break;
        case 'triggers':
            $svg.='<g id="triggers"><path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15,7.542C15,10.004,13.004,12,10.542,12H5.458C2.996,12,1,10.004,1,7.542V7.458C1,4.996,2.996,3,5.458,3h5.083 C13.004,3,15,4.996,15,7.458V7.542z"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M12,7.5C12,6.672,11.328,6,10.5,6l0,0C9.672,6,9,6.672,9,7.5l0,0C9,8.328,9.672,9,10.5,9l0,0C11.328,9,12,8.328,12,7.5L12,7.5z"/></g>';
        break;
        case 'trigger-add':
            $svg.='<g id="trigger-add"><path fill="'.$txt.'" d="M5.5,11C4.122,11,3,9.879,3,8.5C3,7.122,4.122,6,5.5,6S8,7.122,8,8.5C8,9.879,6.878,11,5.5,11z M5.5,8 C5.224,8,5,8.224,5,8.5S5.224,9,5.5,9S6,8.776,6,8.5S5.776,8,5.5,8z"/>';
            $svg.='<path fill="'.$txt.'" d="M8,13v-1H5.458C3.551,12,2,10.448,2,8.458C2,6.551,3.551,5,5.458,5h5.083C12.449,5,14,6.584,14,8.574 C14,9.504,13.627,10,13.029,11h2.397C15.79,10,16,9.386,16,8.491C16,5.482,13.552,3,10.542,3H5.458C2.449,3,0,5.449,0,8.542 C0,11.552,2.449,14,5.458,14h2.083C7.683,14,8,13.989,8,13.979V13L8,13z"/>';
            $svg.='<polygon fill="'.$txt.'" points="11.061,16.015 11.061,13.782 8.811,13.782 8.811,12.241 11.061,12.241 11.061,10.009 12.561,10.009 12.561,12.241 14.816,12.241 14.816,13.782 12.561,13.782 12.561,16.015"/></g>';
        break;
        case 'designer':
            $svg.='<g id="designer"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,1 15,1 15,11 1,11 1,1"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="5" x2="12" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="14" x2="15" y2="14"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="2" y1="12.5" x2="3" y2="12.5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13" y1="12.5" x2="14" y2="12.5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="4" y1="8.5" x2="12" y2="8.5"/></g>';
        break;
        case 'routines':
            $svg.='<g id="routines"><rect x="9" y="9" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="6" height="6"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5,13c0-1.105-0.895-2-2-2l0,0c-1.105,0-2,0.895-2,2l0,0c0,1.105,0.895,2,2,2l0,0C4.105,15,5,14.105,5,13L5,13z"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15,3c0-1.105-0.895-2-2-2l0,0c-1.105,0-2,0.895-2,2l0,0c0,1.105,0.895,2,2,2l0,0C14.105,5,15,4.105,15,3L15,3z"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5,3c0-1.105-0.895-2-2-2l0,0C1.895,1,1,1.895,1,3l0,0c0,1.105,0.895,2,2,2l0,0C4.105,5,5,4.105,5,3L5,3z"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="11,3 3,3 3,11"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9" y1="9" x2="3" y2="3"/></g>';
        break;
        case 'routine-add':
            $svg.='<g id="routine-add"><rect x="8" y="8" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="2" height="2"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5,13c0-1.105-0.895-2-2-2l0,0c-1.105,0-2,0.895-2,2l0,0c0,1.105,0.895,2,2,2l0,0C4.105,15,5,14.105,5,13L5,13z"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M15,3c0-1.105-0.895-2-2-2l0,0c-1.105,0-2,0.895-2,2l0,0c0,1.105,0.895,2,2,2l0,0C14.105,5,15,4.105,15,3L15,3z"/>';
            $svg.='<path fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M5,3c0-1.105-0.895-2-2-2l0,0C1.895,1,1,1.895,1,3l0,0c0,1.105,0.895,2,2,2l0,0C4.105,5,5,4.105,5,3L5,3z"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="11,3 3,3 3,11"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="9" y1="9" x2="3" y2="3"/>';
            $svg.='<polygon fill="'.$txt.'" points="12.25,16.003 12.25,13.771 10,13.771 10,12.229 12.25,12.229 12.25,9.997 13.75,9.997 13.75,12.229 16.006,12.229 16.006,13.771 13.75,13.771 13.75,16.003"/></g>';
        break;
        case 'centralColumns':
            $svg.='<g id="central-column"><line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="8" x2="15" y2="8"/>';
            $svg.='<rect x="1" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="12"/>';
            $svg.='<rect x="8" y="4" fill="'.$txt.'" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="9"/>';
            $svg.='<line stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="1" x2="15" y2="15"/></g>';
        break;
        case 'centralColumns-add':
            $svg.='<g id="centeral-column-add"><line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="10" x2="15" y2="10"/>';
            $svg.='<rect x="1" y="3" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="12"/>';
            $svg.='<rect x="8" y="8" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="7"/>';
            $svg.='<line stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="8" x2="15" y2="15"/>';
            $svg.='<polygon fill="'.$txt.'" points="12.305,5.845 12.305,3.659 10.103,3.659 10.103,2.15 12.305,2.15 12.305,-0.035 13.774,-0.035 13.774,2.15 15.982,2.15 15.982,3.659 13.774,3.659 13.774,5.845"/></g>';
        break;
        case 'centralColumns-del':
            $svg.='<g id="central-column-remove"><line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="1" y1="10" x2="15" y2="10"/>';
            $svg.='<rect x="1" y="3" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="12"/>';
            $svg.='<rect x="8" y="8" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="7"/>';
            $svg.='<line stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="8" x2="15" y2="15"/>';
            $svg.='<polygon fill="'.$txt.'" points="10.049,5.027 11.68,3.396 10.036,1.753 11.162,0.628 12.805,2.271 14.436,0.64 15.531,1.736 13.901,3.366 15.548,5.014 14.423,6.14 12.775,4.492 11.145,6.122"/></g>';
        break;
        case 'insrow':
            $svg.='<g id="insrow"><rect x="1" y="5" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="10" height="10"/>';
            $svg.='<rect x="10" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="5" height="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="11" y1="5.125" x2="4.125" y2="12"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="4,9 4,12 7,12"/></g>';
        break;
        case 'edit':
            $svg.='<path id="edit" fill="'.$txt.'" d="M0,12.589v3.369h3.369l9.752-9.841L9.752,2.748L0,12.589L0,12.589z M15.692,3.546 c0.355-0.355,0.355-0.887,0-1.241l-2.039-2.039c-0.355-0.355-0.887-0.355-1.241,0l-1.596,1.596l3.369,3.369L15.692,3.546 L15.692,3.546z"/>';
        break;
        case 'views':
            $svg.='<g id="views"><path fill="'.$txt.'" d="M8.614,11.115c-1.836,0-3.573-0.778-4.892-2.19C3.559,8.752,3.569,8.479,3.742,8.317c0.174-0.162,0.446-0.153,0.609,0.021 c1.155,1.236,2.668,1.917,4.263,1.917c2.05,0,3.938-1.121,5.096-3.013c-1.158-1.892-3.046-3.013-5.096-3.013 c-2.125,0-4.077,1.206-5.221,3.225c-0.117,0.207-0.38,0.28-0.587,0.162c-0.207-0.117-0.279-0.38-0.162-0.587 c1.298-2.293,3.53-3.661,5.97-3.661c2.439,0,4.671,1.369,5.97,3.661c0.074,0.132,0.074,0.293,0,0.424 C13.285,9.746,11.053,11.115,8.614,11.115z"/>';
            $svg.='<path fill="'.$txt.'" d="M8.614,5.09c-1.187,0-2.152,0.965-2.152,2.152s0.965,2.152,2.152,2.152s2.152-0.965,2.152-2.152S9.8,5.09,8.614,5.09z M8.614,8.533c-0.712,0-1.291-0.579-1.291-1.291S7.902,5.95,8.614,5.95S9.905,6.53,9.905,7.242S9.325,8.533,8.614,8.533z"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 6,15 1,15 1,1 15,1 15,4"/></g>';
        break;
        case 'view-add':
            $svg.='<g id="view-add"><path fill="'.$txt.'" d="M8.614,10.115c-1.836,0-3.573-0.778-4.892-2.19C3.559,7.752,3.569,7.479,3.742,7.317c0.174-0.162,0.446-0.153,0.609,0.021 c1.155,1.236,2.668,1.917,4.263,1.917c2.05,0,3.938-1.121,5.096-3.013c-1.158-1.892-3.046-3.013-5.096-3.013 c-2.125,0-4.077,1.206-5.221,3.225c-0.117,0.207-0.38,0.28-0.587,0.162c-0.207-0.117-0.279-0.38-0.162-0.587 c1.298-2.293,3.53-3.661,5.97-3.661c2.439,0,4.671,1.369,5.97,3.661c0.074,0.132,0.074,0.293,0,0.424 C13.285,8.746,11.053,10.115,8.614,10.115z"/>';
            $svg.='<path fill="'.$txt.'" d="M8.614,4.09c-1.187,0-2.152,0.965-2.152,2.152s0.965,2.152,2.152,2.152s2.152-0.965,2.152-2.152S9.8,4.09,8.614,4.09z M8.614,7.533c-0.712,0-1.291-0.579-1.291-1.291S7.902,4.95,8.614,4.95S9.905,5.53,9.905,6.242S9.325,7.533,8.614,7.533z"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6,12 6,15 1,15 1,1 15,1 15,4"/>';
            $svg.='<polygon fill="'.$txt.'" points="12.518,16 12.518,13.93 10.432,13.93 10.432,12.501 12.518,12.501 12.518,10.432 13.908,10.432 13.908,12.501 16,12.501 16,13.93 13.908,13.93 13.908,16"/></g>';
        break;
        case 'drop':
            $svg.='<path id="drop" fill="'.$txt.'" d="M8,16c-4.418,0-8-3.582-8-8s3.582-8,8-8s8,3.582,8,8S12.418,16,8,16z M4,7v2h8V7H4z"/>';
        break;
        case 'key':
            $svg.='<path id="key" fill="'.$txt.'" d="M11.457,0c-2.51,0-4.543,2.034-4.543,4.543c0,0.348,0.039,0.685,0.114,1.01l-6.945,6.943v1.136l1.136,1.136H3.49 l1.136-1.136v-1.136h1.136V11.36h1.136v-1.136h2.272l1.257-1.257c0.332,0.076,0.676,0.117,1.031,0.117 c2.51,0,4.543-2.034,4.543-4.543S13.964,0,11.457,0z M6.897,7.953l-5.679,5.679v-1.136l5.679-5.679V7.953z M12.576,4.545 c-0.626,0-1.136-0.509-1.136-1.136s0.509-1.136,1.136-1.136s1.136,0.509,1.136,1.136S13.203,4.545,12.576,4.545z"/>';
        break;
        case 'unique':
            $svg.='<g id="unique"><rect x="2" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="12" height="12"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="4" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="8" x2="4" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="11" x2="4" y2="11"/>';
            $svg.='<path fill="'.$txt.'" d="M10.937,4.546h0.89v3.887c0,0.676-0.077,1.212-0.231,1.61c-0.153,0.397-0.429,0.721-0.828,0.97 c-0.399,0.249-0.922,0.374-1.571,0.374c-0.631,0-1.146-0.109-1.547-0.326c-0.401-0.217-0.687-0.531-0.858-0.943 S6.536,9.146,6.536,8.434V4.546h0.89v3.882c0,0.584,0.054,1.015,0.163,1.292c0.109,0.277,0.295,0.49,0.56,0.64 c0.265,0.15,0.588,0.225,0.97,0.225c0.655,0,1.121-0.148,1.401-0.445c0.278-0.296,0.417-0.867,0.417-1.711V4.546z"/></g>';
        break;
        case 'index':
            $svg.='<g id="index"><rect x="2" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="12" height="12"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="4" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="8" x2="4" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="11" x2="4" y2="11"/>';
            $svg.='<path fill="'.$txt.'" d="M11.435,6.936c-0.025-0.072-0.089-0.123-0.164-0.134l-2.298-0.33l1.054-2.353 c0.028-0.063,0.023-0.137-0.015-0.195C9.975,3.866,9.91,3.831,9.841,3.831H6.632c-0.11,0-0.201,0.087-0.205,0.197L6.28,8.209 c-0.004,0.104,0.072,0.195,0.175,0.21l1.597,0.23l-2.137,3.858c-0.05,0.091-0.025,0.204,0.059,0.265 c0.036,0.026,0.078,0.038,0.12,0.038c0.055,0,0.11-0.023,0.151-0.066l5.148-5.601C11.445,7.088,11.461,7.008,11.435,6.936z"/></g>';
        break;
        case 'index-add':
            $svg.='<g id="index-add"><rect x="2" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="12" height="12"/>';
            $svg.='<path fill="'.$txt.'" d="M8.188,6.238c-0.02-0.056-0.069-0.096-0.127-0.104L6.28,5.878l0.817-1.823 c0.022-0.049,0.017-0.106-0.012-0.151C7.056,3.858,7.006,3.831,6.952,3.831H4.465c-0.085,0-0.156,0.068-0.159,0.153L4.192,7.224 C4.189,7.305,4.248,7.375,4.328,7.387l1.238,0.178l-1.657,2.99c-0.039,0.07-0.019,0.158,0.046,0.206 c0.028,0.02,0.06,0.03,0.093,0.03c0.043,0,0.086-0.017,0.117-0.051l3.99-4.341C8.195,6.355,8.208,6.293,8.188,6.238z"/>';
            $svg.='<polygon fill="'.$txt.'" points="9.394,12.188 9.394,10.265 7.484,10.265 7.484,9.461 9.394,9.461 9.394,7.552 10.207,7.552 10.207,9.461 12.116,9.461 12.116,10.265 10.207,10.265 10.207,12.188"/></g>';
        break;
        case 'spatial':
            $svg.='<g id="spatial"><rect x="2" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="12" height="12"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="4" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="8" x2="4" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="11" x2="4" y2="11"/>';
            $svg.='<path fill="'.$txt.'" d="M6.432,9.143l1.043-0.164c0.059,0.418,0.222,0.738,0.489,0.961s0.642,0.334,1.122,0.334c0.484,0,0.844-0.099,1.078-0.296 s0.352-0.429,0.352-0.694c0-0.238-0.104-0.426-0.311-0.563c-0.145-0.094-0.504-0.213-1.078-0.357 c-0.773-0.195-1.31-0.364-1.608-0.507s-0.525-0.34-0.68-0.592S6.607,6.734,6.607,6.43c0-0.277,0.063-0.534,0.19-0.771 s0.3-0.433,0.519-0.589C7.48,4.949,7.704,4.847,7.987,4.763s0.587-0.126,0.911-0.126c0.488,0,0.917,0.07,1.286,0.211 s0.642,0.331,0.817,0.571s0.297,0.562,0.363,0.964l-1.031,0.141c-0.047-0.32-0.183-0.57-0.407-0.75s-0.542-0.27-0.952-0.27 c-0.484,0-0.83,0.08-1.037,0.24S7.627,6.092,7.627,6.307c0,0.137,0.043,0.26,0.129,0.369C7.842,6.789,7.977,6.883,8.16,6.957 c0.105,0.039,0.416,0.129,0.932,0.27c0.746,0.199,1.267,0.362,1.562,0.489s0.526,0.312,0.694,0.554S11.6,8.813,11.6,9.172 c0,0.352-0.103,0.683-0.308,0.993s-0.501,0.551-0.888,0.721s-0.824,0.255-1.313,0.255c-0.809,0-1.425-0.168-1.849-0.504 S6.549,9.803,6.432,9.143z"/></g>';
        break;
        case 'ftext':
            $svg.='<g id="ftext"><rect x="2" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="12" height="12"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="4" y2="5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="8" x2="4" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="11" x2="4" y2="11"/>';
            $svg.='<polygon fill="'.$txt.'" points="8.558,11.703 8.558,5.171 6.118,5.171 6.118,4.297 11.988,4.297 11.988,5.171 9.538,5.171 9.538,11.703"/></g>';
        break;
        case 'print':
            $svg.='<g id="print"><rect x="1" y="4" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14" height="6"/>';
            $svg.='<rect x="5" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="6" height="3"/>';
            $svg.='<rect x="5" y="7" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="6" height="7"/></g>';
        break;
        case 'tblanalyse':
            $svg.='<g id="tblanalyse"><rect x="1" y="1" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14" height="4"/>';
            $svg.='<rect x="1" y="11" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<rect x="11" y="8" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="4" height="4"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="3" y1="5" x2="3" y2="11"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="13" y1="5" x2="13" y2="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="5" y1="13" x2="11" y2="10"/></g>';
        break;
        case 'move':
            $svg.='<g id="move-column"><polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="10,3 10,1 1,1 1,15 10,15 10,13"/>';
            $svg.='<rect x="4" y="4" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="3" height="8"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="15" y1="8" x2="10" y2="8"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="12.826,10.915 9.854,7.944 13.027,4.771"/></g>';
        break;
        case 'normalize':
            $svg.='<g id="magic"><path fill="'.$txt.'" d="M15.43,2.998c0-0.162-0.058-0.315-0.172-0.429L13.37,0.681c-0.115-0.115-0.268-0.172-0.429-0.172 c-0.162,0-0.315,0.057-0.429,0.172L0.247,12.945c-0.115,0.115-0.172,0.268-0.172,0.429c0,0.162,0.057,0.315,0.172,0.429 l1.888,1.888c0.115,0.115,0.267,0.172,0.429,0.172s0.315-0.058,0.429-0.172L15.257,3.427C15.372,3.313,15.43,3.16,15.43,2.998z M11.166,5.792l-1.021-1.021l2.795-2.794l1.021,1.021L11.166,5.792z"/>';
            $svg.='<polygon fill="'.$txt.'" points="2.259,2.693 2.545,1.758 3.48,1.472 2.545,1.186 2.259,0.251 1.973,1.186 1.038,1.472 1.973,1.758"/>';
            $svg.='<polygon fill="'.$txt.'" points="4.738,3.876 5.311,5.745 5.883,3.876 7.752,3.303 5.883,2.731 5.311,0.862 4.738,2.731 2.869,3.303"/>';
            $svg.='<polygon fill="'.$txt.'" points="8.362,2.693 8.648,1.758 9.583,1.472 8.648,1.186 8.362,0.251 8.077,1.186 7.142,1.472 8.077,1.758"/>';
            $svg.='<polygon fill="'.$txt.'" points="14.752,7.29 14.466,6.355 14.18,7.29 13.245,7.576 14.18,7.862 14.466,8.797 14.752,7.862 15.687,7.576"/></g>';
        break;
        case 'collapseall':
            $svg.='<g id="collapseall"><circle fill="none" stroke="'.$txt.'" stroke-miterlimit="10" cx="7.079" cy="7.35" r="6.35"/>';
            $svg.='<circle fill="#FFFFFF" stroke="'.$txt.'" stroke-miterlimit="10" cx="8.212" cy="8.483" r="6.35"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-miterlimit="10" x1="4" y1="8.5" x2="12" y2="8.5"/></g>';
        break;
        case 'link':
            $svg.='<g id="link"><rect x="4.5" y="7.5" fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="7" height="1"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,12.5 0.5,12.5 0.5,3.5 6.5,3.5 6.5,5.5 2.5,5.5 2.5,10.5 6.5,10.5"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,12.5 15.5,12.5 15.5,3.5 9.5,3.5 9.5,5.5 13.5,5.5 13.5,10.5 9.5,10.5"/></g>';
        break;
        case 'unlink':
            $svg.='<g id="unlink"><polygon fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="6.5,12.5 0.5,12.5 0.5,3.5 6.5,3.5 6.5,5.5 2.5,5.5 2.5,10.5 6.5,10.5"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="9.5,12.5 15.5,12.5 15.5,3.5 9.5,3.5 9.5,5.5 13.5,5.5 13.5,10.5 9.5,10.5"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="5.688" y1="2.188" x2="4.391" y2="0.891"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.391" y1="2.188" x2="11.688" y2="0.891"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="5.688" y1="13.891" x2="4.391" y2="15.188"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="10.391" y1="13.891" x2="11.688" y2="15.188"/></g>';
        break;
        case 'data-full':
            $svg.='<circle id="data-full" fill="'.$txt.'" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="7.953" cy="8.016" r="6.984"/>';
        break;
        case 'data-empty':
            $svg.='<circle id="data-empty" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="7.953" cy="8.016" r="6.984"/>';
        break;
        case 'lightbulb':
            $svg.='<g id="eye"><path fill="'.$txt.'" d="M8,3.692C2.462,3.692,0,8,0,8s2.462,4.308,8,4.308S16,8,16,8S13.538,3.692,8,3.692z M8,10.462 c-1.359,0-2.462-1.102-2.462-2.462S6.641,5.538,8,5.538S10.462,6.641,10.462,8S9.359,10.462,8,10.462z"/>';
            $svg.='<path fill="'.$txt.'" d="M8,6.154C6.98,6.154,6.154,6.98,6.154,8S6.98,9.846,8,9.846S9.846,9.02,9.846,8S9.02,6.154,8,6.154z M8,8.615 C7.66,8.615,7.385,8.34,7.385,8C7.385,7.66,7.66,7.385,8,7.385C8.34,7.385,8.615,7.66,8.615,8C8.615,8.34,8.34,8.615,8,8.615z"/></g>';
        break;
        case 'lightbulb-off':
            $svg.='<path id="eye-slash" fill="'.$txt.'" d="M3.144,11.01C0.995,9.742,0,8,0,8s2.462-4.308,8-4.308c0.803,0,1.541,0.091,2.216,0.245L8.553,5.601 C8.375,5.56,8.19,5.538,8,5.538C6.641,5.538,5.538,6.641,5.538,8c0,0.19,0.022,0.375,0.062,0.553L3.144,11.01L3.144,11.01 L3.144,11.01z M5.784,12.062C6.459,12.217,7.197,12.308,8,12.308c5.538,0,8-4.308,8-4.308s-0.995-1.742-3.144-3.01l-2.457,2.457 C10.44,7.625,10.462,7.81,10.462,8c0,1.359-1.102,2.462-2.462,2.462c-0.19,0-0.375-0.022-0.553-0.062L5.784,12.062L5.784,12.062 L5.784,12.062z M9.846,8c0,0.472-0.18,0.945-0.541,1.305S8.472,9.846,8,9.846L9.846,8L9.846,8L9.846,8z M8,6.154 c-0.472,0-0.945,0.18-1.305,0.541C6.334,7.055,6.154,7.528,6.154,8L8,6.154L8,6.154L8,6.154z M12.923,2.462L2.462,12.923 l0.615,0.615L13.538,3.077L12.923,2.462L12.923,2.462z"/>';
        break;
        case 'passwd':
            $svg.='<g id="password"><rect x="1" y="6" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14" height="9"/>';
            $svg.='<rect x="5" y="2" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="6" height="4"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="7.932" cy="9.151" r="0.807"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="10" x2="8" y2="12"/></g>';
        break;
        case 'favourite':
            $svg.='<path id="star" fill="'.$txt.'" d="M11.876,15.279c-0.423-0.235-4.032-2.239-4.032-2.239s-3.743,1.885-4.061,2.045 c-0.317,0.159-1.072-0.09-0.943-0.753c0.129-0.663,0.866-4.443,0.866-4.443S0.949,7.083,0.54,6.693 C0.13,6.302,0.281,5.609,0.993,5.522S5.426,4.98,5.426,4.98s1.958-3.748,2.139-4.091C7.746,0.545,8.49,0.52,8.677,0.919 c0.186,0.399,1.949,4.179,1.949,4.179s4.238,0.709,4.591,0.774c0.547,0.102,0.589,0.776,0.26,1.082 C15.148,7.26,12.12,10.08,12.12,10.08s0.634,4.195,0.698,4.71C12.883,15.305,12.299,15.514,11.876,15.279z"/>';
        break;
        case 'comment':
            $svg.='<path id="comment" fill="'.$txt.'" d="M16,1.6C16,0.72,15.28,0,14.4,0H1.6C0.72,0,0,0.72,0,1.6v9.6c0,0.88,0.72,1.6,1.6,1.6h11.2L16,16V1.6L16,1.6z M12.8,9.6H3.2V8h9.6V9.6L12.8,9.6z M12.8,7.2H3.2V5.6h9.6V7.2L12.8,7.2z M12.8,4.8H3.2V3.2h9.6V4.8L12.8,4.8z"/>';
        break;
        case 'search-plus':
            $svg.='<g id="search-plus"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="4.916" cy="9.339" r="3.728"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" x1="7.326" y1="12.182" x2="10.166" y2="15.022"/>';
            $svg.='<polygon fill="'.$txt.'" points="11.846,8.43 11.846,5.961 9.359,5.961 9.359,4.258 11.846,4.258 11.846,1.79 13.506,1.79 13.506,4.258 16,4.258 16,5.961 13.506,5.961 13.506,8.43"/></g>';
        break;
        case 'notice':
            $svg.='<g id="notice"><line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="6" x2="8" y2="10"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="11" x2="8" y2="13"/>';
            $svg.='<polygon fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="7.997,0.949 15.078,15 0.917,15"/></g>';
        break;
        case 'error':
            $svg.='<g id="info"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="7.958" cy="8.042" r="6.667"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="4" x2="8" y2="9"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="8" y1="10" x2="8" y2="12"/></g>';
        break;
        case 'success':
            $svg.='<g id="success"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="7.958" cy="8.042" r="6.667"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" points="3.875,7.385 6.958,10.469 11.896,5.531"/></g>';
        break;
        case 'usredit':
            $svg.='<g id="user-edit"><polygon fill="'.$txt.'" points="8.476,12.735 8.476,14.307 10.048,14.307 14.6,9.714 13.028,8.141 8.476,12.735"/>';
            $svg.='<path fill="'.$txt.'" d="M15.8,8.514c0.166-0.166,0.166-0.414,0-0.579l-0.952-0.952c-0.166-0.166-0.414-0.166-0.579,0l-0.745,0.745L15.097,9.3 L15.8,8.514L15.8,8.514z"/>';
            $svg.='<path fill="'.$txt.'" d="M7.57,7.695c0.815-0.613,1.351-1.578,1.351-2.674c0-1.85-1.505-3.354-3.354-3.354S2.212,3.171,2.212,5.021 c0,1.086,0.527,2.044,1.331,2.658c-1.682,0.399-2.978,1.146-3.05,1.189C0.188,9.048,0,9.375,0,9.729V11c0,0.553,0.448,1,1,1h6.292 l3.163-3.163C10.202,8.686,9.076,8.058,7.57,7.695z M5.566,3.667c0.747,0,1.354,0.607,1.354,1.354S6.313,6.375,5.566,6.375 c-0.747,0-1.354-0.607-1.354-1.354S4.82,3.667,5.566,3.667z M2.785,10C3.531,9.714,4.517,9.431,5.5,9.431 c1.042,0,2.03,0.284,2.76,0.569H2.785z"/></g>';
        break;
        case 'usradd':
            $svg.='<g id="user-add"><path fill="'.$txt.'" d="M7.57,7.695c0.815-0.613,1.351-1.578,1.351-2.674c0-1.85-1.505-3.354-3.354-3.354S2.212,3.171,2.212,5.021 c0,1.086,0.527,2.044,1.331,2.658c-1.682,0.399-2.978,1.146-3.05,1.189C0.188,9.048,0,9.375,0,9.729V11c0,0.553,0.448,1,1,1h6.292 l3.163-3.163C10.202,8.686,9.076,8.058,7.57,7.695z M5.566,3.667c0.747,0,1.354,0.607,1.354,1.354S6.313,6.375,5.566,6.375 c-0.747,0-1.354-0.607-1.354-1.354S4.82,3.667,5.566,3.667z M2.785,10C3.531,9.714,4.517,9.431,5.5,9.431 c1.042,0,2.03,0.284,2.76,0.569H2.785z"/>';
            $svg.='<polygon fill="'.$txt.'" points="11.931,16 11.931,13.582 9.494,13.582 9.494,11.912 11.931,11.912 11.931,9.494 13.556,9.494 13.556,11.912 16,11.912 16,13.582 13.556,13.582 13.556,16"/></g>';
        break;
        case 'usrcheck':
            $svg.='<g id="user-check"><path fill="'.$txt.'" d="M7.57,6.961c0.815-0.613,1.351-1.578,1.351-2.674c0-1.85-1.505-3.354-3.354-3.354S2.212,2.437,2.212,4.287 c0,1.086,0.527,2.044,1.331,2.658c-1.682,0.399-2.978,1.146-3.05,1.189C0.188,8.314,0,8.641,0,8.996v1.271C0,10.819,0.448,11,1,11 h6.292l3.163-3.03C10.202,7.819,9.076,7.324,7.57,6.961z M5.566,2.933c0.747,0,1.354,0.607,1.354,1.354S6.313,5.642,5.566,5.642 c-0.747,0-1.354-0.607-1.354-1.354S4.82,2.933,5.566,2.933z M2.785,9C3.531,9,4.517,8.431,5.5,8.431C6.542,8.431,7.53,9,8.26,9 H2.785z"/>';
            $svg.='<polygon fill="'.$txt.'" points="10.054,13.816 8.166,11.94 9.451,10.646 11.339,12.523 14.741,9.1 16,10.351 12.598,13.774 11.313,15.067"/></g>';
        break;
        case 'usrdrop':
            $svg.='<g id="user-remove"><path fill="'.$txt.'" d="M7.57,7.695c0.815-0.613,1.351-1.578,1.351-2.674c0-1.85-1.505-3.354-3.354-3.354S2.212,3.171,2.212,5.021 c0,1.086,0.527,2.044,1.331,2.658c-1.682,0.399-2.978,1.146-3.05,1.189C0.188,9.048,0,9.375,0,9.729V11c0,0.553,0.448,1,1,1h6.292 l3.163-3.163C10.202,8.686,9.076,8.058,7.57,7.695z M5.566,3.667c0.747,0,1.354,0.607,1.354,1.354S6.313,6.375,5.566,6.375 c-0.747,0-1.354-0.607-1.354-1.354S4.82,3.667,5.566,3.667z M2.785,10C3.531,9.714,4.517,9.431,5.5,9.431 c1.042,0,2.03,0.284,2.76,0.569H2.785z"/>';
            $svg.='<polygon fill="'.$txt.'" points="9.87,14.471 11.58,12.761 9.857,11.037 11.037,9.857 12.761,11.58 14.471,9.87 15.619,11.019 13.909,12.729 15.637,14.457 14.457,15.637 12.729,13.909 11.019,15.619"/></g>';
        break;
        case 'sort-asc':
            $svg.='<polyline id="sort-asc" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="12.364,6.818 8,11.182 3.636,6.818"/>';
        break;
        case 'sort-desc':
            $svg.='<polyline id="sort-asc" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="3.636,10.182 8,5.818 12.364,10.182"/>';
        break;
        case 'bookmark':
            $svg.='<polygon id="bookmark" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="2,15 2,1 14,1 14,15 7.958,6.958 "/>';
        break;
        case 'go-top':
            $svg.='<path id="go-top" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M2.428,12.091L8,6.519l5.572,5.572 M2,4h12"/>';
        break;
        case 'console':
            $svg.='<g id="console"><rect x="1" y="6" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="14" height="9"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="1,6 1,2 15,2 15,6"/>';
            $svg.='<polygon fill="'.$txt.'" points="3.869,12.351 3.869,11.246 6.612,10.168 3.869,9.102 3.869,8.004 7.799,9.703 7.799,10.641"/>';
            $svg.='<rect fill="'.$txt.'" x="8.095" y="11.583" width="4.563" height="0.998"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" x1="7" y1="4" x2="15" y2="4"/></g>';
        break;
        case 'window-new':
            $svg.='<g id="window-new"><rect x="5" y="5" fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="9" height="9"/>';
            $svg.='<polyline fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="11,3 11,2 2,2 2,11 3,11"/></g>';
        break;
        default:
            $svg.='<g id="default"><circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-miterlimit="10" cx="7.958" cy="8.042" r="6.667"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" cx="5.454" cy="6.105" r="0.195"/>';
            $svg.='<circle fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" cx="10.138" cy="6.105" r="0.195"/>';
            $svg.='<line fill="none" stroke="'.$txt.'" stroke-width="2" stroke-linejoin="round" stroke-miterlimit="10" x1="5" y1="10" x2="11" y2="10"/></g>';
    }
    $svg.='</svg>';
    endif;
    echo $svg;
}
if(isset($get) && !empty($get)):
    header('Content-type:image/svg+xml');
    make_icon($get);
endif;