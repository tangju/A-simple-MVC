<?php
/**
 * Created by PhpStorm.
 * User: tang
 * Date: 7/14/14
 * Time: 10:39 AM
 */

$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$arr = array();
$roteArray = explode('/', $actual_link);
$j = 0;
for($i = 0; $i < sizeof($roteArray); $i++){
    if($roteArray[$i] === "index.php"){
        $arr['controllers'] = ucfirst($roteArray[$i+1]);
        $arr['actions'] = $roteArray[$i+2];
    }
}
$classFile = './controllers/'.$arr['controllers'].'.php';
$myFunction = $arr['actions'].'Action';
//echo $myFunction;
if(file_exists($classFile)){
    include ($classFile);
    $controllerObject = new $arr['controllers'];
    if(method_exists($controllerObject,$myFunction)){
        echo $arr['controllers'].'-'.$arr['actions'];
    }
    else{
        echo 'Sorry, the Action "'.$myFunction.'" not exist.';
    }
}
else{
    echo 'Sorry, the classFile "'.$classFile.'" not exist.';
}
//echo $arr['controllers'];
//echo $arr['actions'];
