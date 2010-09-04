<?php

class Haanga_Extension_Tag_SourceCode
{
    public static function generator($cmp, $args)
    {
        if (count($args) != 1 || !isset($args[0]['string'])) {
            throw new Haanga_Compiler_Exception("Invalid arguments");
        }
        $file = '../templates/src/'.$args[0]['string'];

        /* disable whitespace */
        $wspace = Haanga_Compiler::getOption('strip_whitespace');
        Haanga_Compiler::setOption('stip_whitespace', TRUE);

        $hcode = hcode();
        $cmp->do_print($hcode, "<pre><code>");
        $cmp->do_print($hcode, htmlspecialchars(file_get_contents($file)));
        $cmp->do_print($hcode, "</code></pre>");


        /* restore the previous value */
        Haanga_Compiler::setOption('stip_whitespace', $wspace);

        return $hcode;
    }
}
