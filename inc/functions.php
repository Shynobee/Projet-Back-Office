<?php

function filter($table,$tab){
    foreach($table as $key => $value){
        $tab2 = array();
        foreach($tab as $ref){
            $str = strtolower($ref[$key]);
            $substr = strtolower($value);
            if(strpos($str,$substr)!==false){
                array_push($tab2,$ref);      
            }   
        }
        $tab = $tab2;
    }
    return $tab;
}
