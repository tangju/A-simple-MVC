<?php
/**
 * Created by PhpStorm.
 * User: tang
 * Date: 7/10/14
 * Time: 11:16 AM
 */

$string = "beautiful";
$time = "winter";

$str = 'This is a $string $time morning!';
echo $str. "<br>";
eval("\$str = \"$str\";");
echo $str;

