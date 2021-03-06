<?php
return function ($bh) {
     $bh->match("upward", function ($ctx, $json){
         $ctx
             ->mix([
                 'block' => 'scrollto',
                 'mods' => ['target' => 'position'],
                 'js' => true
             ])
             ->content([
                 'elem' => 'button',
                 'content' => '↑'
             ])
             ->js(true);
     });
};
