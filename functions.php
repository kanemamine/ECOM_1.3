<?php
function Nametest($name){
    if (strlen($name) > 10){
        $rep =[
            'isValide' => FALSE,
            'msg' => 'Trop de caractéres'
        ];
    }elseif(strlen($name) < 2){
        $rep =[
            'isValide' => FALSE,
            'msg' => 'Peu de caractéres'
        ];
    }else{
        return TRUE;
    };
}

?>