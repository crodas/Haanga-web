<?php
$user = 'crodas';
$url  = 'http://meneame.net/user/crodas';
$vars = compact('user', 'url');

Haanga::Load('sample_template.html', $vars);
