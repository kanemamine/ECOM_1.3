<?php

require_once("./functions.php");

if ($_POST){
    $name = $_POST['fname'];
    $nametest = Nametest($name);
    if (empty($name)){
        echo "</br> Nom Vide";
    }elseif(!$nametest['isValide']){
        echo $nametest['msg'];
    }else{
        echo "</br> Mon nom est : " . $name;
    }
}




?>