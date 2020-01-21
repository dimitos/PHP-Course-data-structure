<?php

function zzz($dirWay){
    $arr = scandir($dirWay);
    foreach ($arr as $key) {
        $myArray[$key] = $arr[$key];
        //echo '<br>' . $myArray[$key] . ' ';

        $str = strstr($myArray[$key], '.');

//        if (!$str) {
//            $dir = $dirWay + $myArray[$key] . '/';
//            //echo 'false';
//            $myArray[$key] = zzz($dir);
//        }


    }
    return $myArray;
}


$dirName = '/';
$array = zzz($dirName);
var_dump($array);
