<?
    
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


        if(!is_numeric($numero1){
            echo "Você informou o parâmetro número 1 inválido";
            exit;
        }

        if(!is_numeric($numero2) ){
            echo "Você informou o parâmetro número 2 inválido";
            exit;
        }


    $resultado = $numero1 + $numero2;



    if($resultado > 0){
        $sinal = "Positivo";

    }elseif($resultado < 0 ){
        $sinal = "negativo";

    }else{
        $sinal= "Neutro - Zero é Neutro"
    }

    $resposta["total"] = $resultado;
    $resposta["sinal"] = $sinal;
    echo json_encode($resposta);

    exit;
?>