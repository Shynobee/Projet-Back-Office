<?php
/*echo '<pre>';
var_dump($_SESSION['client']);
echo '</pre>';*/
function filter($table){
    $tab2 = array();
    $tab = $_SESSION['client'];
    foreach($table as $key => $value){
        foreach($tab as $ref){
            if(strpos($ref[$key],$value)){
                array_push($tab2,$ref);    
            }
        }
        $tab = $tab2;   
    }
}
/*echo '<pre>';
var_dump($tab2);
echo '</pre>';*/