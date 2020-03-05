<?php

    if(
        !isset($_REQUEST["numero1"] )    ||
                $_REQUEST["numero1"] == ""||
        !isset($_REQUEST["numero2"] )    ||
                $_REQUEST["numero2"] == ""
    ){
        echo "Parâmetros inválidos. Não dápra fazer a conta.";
        exit;
    }

    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];


    $msg=""
        if(!is_numeric($numero1){
            $msg. ="Você informou o parâmetro número 1 inválido";
        }

        if(!is_numeric($numero2) ){
            $msg. ="Você informou o parâmetro número 2 inválido";
        }

        if($msg!= ""){
            echo $msg:
            exit;
        }

    $resultado = $numero1 + $numero2;

    $resposta["total"] = $resultado;

    echo json_encode($resposta);
    exit;
?>