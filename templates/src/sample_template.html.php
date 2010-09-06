<?php
$HAANGA_VERSION  = '1.0.3';
/* Generated from /src/sample_template.html */
function haanga_9340daa8989898a989a89a($vars, $return=FALSE, $blocks=array())
{
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    echo '<h1> Hi there, I\'m '.htmlspecialchars($user).' ';
    if (empty($url) === FALSE) {
        echo ' and my URL is <a href="'.$url.'">'.htmlspecialchars($url).'</a> ';
    }
    echo ' </h1> ';
    if ($return == TRUE) {
        return ob_get_clean();
    }
}
