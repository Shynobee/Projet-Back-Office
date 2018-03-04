<?php

function filter($table,$tab){

    $tab2 = array();
    
    foreach($table as $key => $value){
        
        
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
