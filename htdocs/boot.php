<?php

require '../lib/Haanga.php';

Haanga::configure(array(
    'template_dir' => '../templates/',
    'cache_dir' => '../compiled/',
    'bootstrap' => function() {
        require 'custom_tags.php';
    },
    'compiler' => array(
        'strip_whitespace' => TRUE,
        'global' => array('menu_items', 'lang'),
    ),
));

session_start();

if (isset($_GET['lang'])) {
    if (strlen($_GET['lang']) == 2 && preg_match("/[a-z]+/", $_GET['lang']) && is_dir('../templates/'.$_GET['lang'])) {
        $_SESSION['lang'] = $_GET['lang'];
    }
}

/* by default use English */
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

$menu_items = array(
    '/' => _('Home'), 
    '/documentation/Introduction#install' => _('Installation'),
    '/documentation' => _('Documentation'),
    'http://github.com/crodas/Haanga' => _('Source code'),
    '/support' => _('Support'),
);

