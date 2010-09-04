<?php

require "lib/Haanga.php";

Haanga::configure(array(
    'template_dir' => '../templates/',
    'cache_dir' => '../compiled/',
    'compiler' => array(
        'strip_whitespace' => TRUE,
        'global' => array('menu_items'),
    ),
));

?>
