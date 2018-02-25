<?php

function tri($a,$b,$c){
    $d=array();
    foreach($a as $e){
        $d[$e[$b].'-'.$e['id']]=$e;
    }
    if($c=='desc'){
        krsort($d);
    }else{
        ksort($d);
    }
    return $d;
}