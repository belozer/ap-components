<?php
return function ($bh) {
 $bh->match("avatar_default__image", function ($ctx, $json){
     //return [
         //'block' => 'image',
         //'mix' => [ 'block' => $json->block, 'elem' => 'image'],
         //'content' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M9.732 10.98c-.345-.055-.353-1.005-.353-1.005s1.015-1.005 1.236-2.356c.595 0 .963-1.437.368-1.942.025-.532.765-4.177-2.982-4.177s-3.007 3.645-2.982 4.177c-.595.505-.228 1.942.368 1.942.221 1.351 1.236 2.356 1.236 2.356s-.008.95-.353 1.005c-1.113.177-5.268 2.01-5.268 4.02h14c0-2.01-4.155-3.843-5.268-4.02z"/></svg>',
     //];
 });
};
