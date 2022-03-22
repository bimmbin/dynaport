<?php


function implode_key($glue, $arr, $key){
    $arr2=array();
    foreach($arr as $f){
        if(!isset($f[$key])) continue;
        $arr2[]=$f[$key];
    }
    return implode($glue, $arr2);
}