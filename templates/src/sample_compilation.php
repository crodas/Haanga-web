<?php
$function = Haanga::compile("Hi {{user}}! Welcome here");
echo $function(array('user' => 'crodas'));
