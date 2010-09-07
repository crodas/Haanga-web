<?php
$HAANGA_VERSION  = '1.0.4';
/* Generated from /home/crodas/projects/playground/haanga/web/templates/en/main.html */
function haanga_09200ac8989a22478b6bf548f0592183f0c1b36e($vars, $return=FALSE, $blocks=array())
{
    global $menu_items, $lang;
    extract($vars);
    if ($return == TRUE) {
        ob_start();
    }
    $buffer1  = ' <div class="post"> <h3 class="title">Welcome to Haanga\'s home</h3> <div style="clear: both;">&nbsp;</div> <div class="entry"> <p>Haanga is a template engine that uses Django syntax. In the beginning it was developed for Menéame, but we decided to release it as an independent project so it can be used by anyone :-)</p> <p>Some Hangaa’s features:</p> <ul> <li>Human readable.</li> <li>Easy to use and mantain.</li> <li>Highly efficient because every template is “compiled” into a PHP script.</li> <li>The generated code is ready to take advantage from any PHP optimizer (like xcache).</li> </ul> <h3>Why a new template engine?</h3> <ul> <li>At <a href="http://meneame.net/">Meneame</a> performance is prioritary. <ol> <li>The compilation is only made in the worst case (when there is no template or the template is newer than the generated)</li> <li>Usually, only a small piece of Haanga is loaded –the one that checks and determinates if it’s necessary a compilation.</li> <li>Generated code is optimized. <ol> <li>One function is generated.</li> <li>Everything is <span class="caps">PHP</span> (no context changes between <span class="caps">HTML</span> and <span class="caps">PHP</span>)</li> </ol></li> </ol></li> <li>Django’s syntax is beautiful :-)</li> </ul> <h3>Beginnings of the project</h3> <p>It all started with a <a href="http://twitter.com/gallir/status/16256084676">tweet</a>, <a href="http://meneame.net" target="_blank">Meneame</a> (an open source digg-like site from Spain) was looking for an efficient template engine.</p> <p>A few days later I began with some outlines for the lexer, the parser and the rudimentary code generator (all the <a href="http://github.com/crodas/Haanga/tree/devel-prototype">prototype record</a> is public)</p> <p>The name of the project it’s from a Guarani word –Ha’anga- which means “draw” or “shape”</p> <h3>Using Haanga</h3> <p>In order to use Haanga into any project, <a href="/documentation/introduction#install">after install</a>, you must configure it. A basic configuration looks like this:</p> <pre><code class=\'php\'>&lt;?php

require &quot;lib/Haanga.php&quot;;

Haanga::configure(array(
    \'template_dir\' =&gt; \'../templates/\',
    \'cache_dir\' =&gt; \'../compiled/\',
));
</code></pre> <p>Suppose we want a template which prints a given username and a URL if it is defined:</p> <pre><code class=\'django\'>&lt;h1&gt;
    Hi there, I\'m {{user}}
    {% if url %}
        and my URL is &lt;a href=&quot;{{url|safe}}&quot;&gt;{{url}}&lt;/a&gt;
    {% endif %}
&lt;/h1&gt;
</code></pre> <p>Now, let\'s load the template from PHP:</p> <pre><code class=\'php\'>&lt;?php
$user = \'crodas\';
$url  = \'http://meneame.net/user/crodas\';
$vars = compact(\'user\', \'url\');

Haanga::Load(\'sample_template.html\', $vars);
</code></pre> <h3>Who are behind Haanga?</h3> <ul> <li><a href="http://cesarodas.com/">crodas</a>: main developer</li> <li><a href="http://gallir.wordpress.org">Ricardo Galli</a>: Original idea, bug hunter, and features</li> </ul> </div> </div> ';
    $blocks['main']  = (isset($blocks['main']) ? (strpos($blocks['main'], '{{block.1b3231655cebb7a1f783eddf27d254ca}}') === FALSE ? $blocks['main'] : str_replace('{{block.1b3231655cebb7a1f783eddf27d254ca}}', $buffer1, $blocks['main'])) : $buffer1);
    echo Haanga::Load('layout.html', $vars, TRUE, $blocks);
    if ($return == TRUE) {
        return ob_get_clean();
    }
}