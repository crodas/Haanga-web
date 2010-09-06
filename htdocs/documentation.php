<?php
require "boot.php";

if (!isset($_GET['doc'])) {
    $_GET['doc'] = '';
}

switch (strtolower($_GET['doc'])) {
case 'introduction':
case 'haanga-for-template-designers':
case 'haanga-for-developers':
case 'recipes':
    $template = strtolower($_GET['doc']).".html";
    break;
case '':
    $template = "documentation.html";
    break;
default:
    header("location: /documentation");
    die();
}

Haanga::Load($lang.'/'.$template);
