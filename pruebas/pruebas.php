<?php


function igual($num){
    return $num==10;
}


$array2 = [6, 7, 8, 9, 10, 11, 12];


$res=array_filter($array2, function($numero){
    if($numero==12){
        echo 'Numero encotrado';
    }else{
        echo 'no encontrado';
    }
    // return $numero==12;
});

// print_r($res);

// https://www.php.net/manual/es/function.array-filter.php

?>