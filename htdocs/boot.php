<?php

require "../lib/Haanga.php";

Haanga::configure(array(
    'template_dir' => '../templates/',
    'cache_dir' => '../compiled/',
    'bootstrap' => function() {
        require "custom_tags.php";
    },
    'compiler' => array(
        'strip_whitespace' => TRUE,
        'global' => array('menu_items'),
    ),
));

$lang = "en";
$menu_items = array(
    '/' => _('Home'), 
    '/documentation/Introduction#install' => _('Installation'),
    '/documentation' => _('Documentation'),
    'http://github.com/crodas/Haanga' => _('Source code'),
);

