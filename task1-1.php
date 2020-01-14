<?php
var_dump($_GET);
$previous = $_GET['id'];
$dir = '/' . $_GET['id'] . '/';
$arr = scandir($dir);

foreach($arr as $key=>$value) {
    echo <<<php
        <a href="?id=$value">$value</a><br>
php;
}