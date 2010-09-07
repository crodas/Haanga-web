<?php
function is_tpl_valid()
{
    try {
        $function = Haanga::compile($_POST['template']);
        return TRUE;
    } catch (Exception $e) {
        // show $e->getMessage() somewhere
        return FALSE;
    }
}
