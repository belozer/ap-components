<?php
return function ($bh) {
 $bh->match("avatar_default_category__image", function ($ctx, $json){
     //return [
         //'block' => 'image',
         //'mix' => [ 'block' => $json->block, 'elem' => 'image'],
         //'content' => '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 28 26"><path d="M9.286 8.357q0 1.16-.813 1.973t-1.973.813-1.973-.813-.812-1.973.812-1.973T6.5 5.57t1.973.814.813 1.973zm14.857 5.572v6.5H3.713v-2.787L8.358 13l2.32 2.32 7.43-7.428zm1.393-10.216H2.322q-.19 0-.326.138t-.138.326V21.82q0 .19.138.327t.326.138h23.214q.19 0 .326-.138T26 21.82V4.18q0-.19-.138-.326t-.326-.138zm2.32.465V21.82q0 .958-.68 1.64t-1.64.68H2.322q-.958 0-1.64-.68t-.68-1.64V4.18q0-.96.68-1.64t1.64-.682h23.214q.958 0 1.64.682t.68 1.64z"/></svg>',
     //];
 });
};
