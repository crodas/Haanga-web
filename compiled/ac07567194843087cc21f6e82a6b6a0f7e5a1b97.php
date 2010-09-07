<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /home/crodas/projects/playground/haanga/web/templates/layout.html */
function haanga_ac07567194843087cc21f6e82a6b6a0f7e5a1b97($vars, $return=FALSE, $blocks=array())
{
    global $menu_items, $lang;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> <html xmlns="http://www.w3.org/1999/xhtml"> <head> <meta name="keywords" content="php, template, templating, haanga, django" /> <meta name="description" content="Haanga - '._('über efficient template engine for PHP').'" /> <meta http-equiv="content-type" content="text/html; charset=utf-8" /> <meta name="Author" content="crodas, meneame" /> <meta name="Content-Language" content="'.(empty($lang) == TRUE ? 'en' : $lang).'" /> <meta name="robots" content="index,follow, all" /> <script src="/js/hightlight.pack.js" type="text/javascript"></script> <script type="text/javascript"> hljs.initHighlightingOnLoad(); </script> <title>Haanga - '._('über efficient template engine for PHP').'</title> <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen" /> <script type="text/javascript"> var _gaq = _gaq || []; _gaq.push([\'_setAccount\', \'UA-6269845-7\']); _gaq.push([\'_trackPageview\']); (function() { var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true; ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\'; var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s); })(); </script> </head> <body> <div id="wrapper"> <div id="header-wrapper"> <div id="header"> <div id="logo"> <h1><a href="#"><span>ha</span>anga </a></h1> <p>Django style for PHP</p> </div> <div id="menu"> ';
    $buffer1  = ' <ul> ';
    foreach ($menu_items as  $url => $title) {
        $buffer1 .= ' <li';
        if ($_SERVER['REQUEST_URI'] == $url OR (isset($select) AND $select == $url)) {
            $buffer1 .= ' class="current_page_item"';
        }
        $buffer1 .= '> <a href="'.htmlspecialchars($url).'">'.htmlspecialchars($title).'</a></li> ';
    }
    $buffer1 .= ' </ul> ';
    echo (isset($blocks['menu']) ? (strpos($blocks['menu'], '{{block.1b3231655cebb7a1f783eddf27d254ca}}') === FALSE ? $blocks['menu'] : str_replace('{{block.1b3231655cebb7a1f783eddf27d254ca}}', $buffer1, $blocks['menu'])) : $buffer1).' </div> </div> </div> <!-- end #header --> <div id="page"> <div id="page-bgtop"> <div id="page-bgbtm"> <div id="content"> ';
    $buffer1  = '';
    echo (isset($blocks['main']) ? (strpos($blocks['main'], '{{block.1b3231655cebb7a1f783eddf27d254ca}}') === FALSE ? $blocks['main'] : str_replace('{{block.1b3231655cebb7a1f783eddf27d254ca}}', $buffer1, $blocks['main'])) : $buffer1).' <div style="clear: both;">&nbsp;</div> </div> <!-- end #content --> <div id="sidebar"> <ul>  <li> <p><strong>'._('Fast').':</strong> '._('Haanga <em>compiles</em> down the template to plain optimized PHP code the first time. ').' </p> <p><strong>'._('Secure').':</strong> '._('By default only a secure subset of filters/tags can be used, and no PHP code can be injected.').' </p> </li> <p><em> Speak several languages? or found a bug on this page?. <a href="http://github.com/crodas/Haanga-web/tree/master/templates/">Fork us</a> on github, modify the templates and request a merge. </em></p>  </ul> </div> <!-- end #sidebar --> <div style="clear: both;">&nbsp;</div> </div> </div> </div> <!-- end #page --> </div> <div id="footer"> <p>Copyleft (c) '.date('Y').' Meneame Comunications SL and crodas. All <em>left</em> reserved. Design by <a href="http://www.freecsstemplates.org/"> CSS Templates</a>.</p> </div> <!-- end #footer --> </body> </html> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}