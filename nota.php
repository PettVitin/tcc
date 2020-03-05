<?php
if(
    !isset($_REQUEST["numero1"]) ||
        $_REQUEST["numero1"] >10 || $_REQUEST["numero1"] <0||

    !isset($_REQUEST["numero2"]) ||
        $_REQUEST["numero2"] >10 || $_REQUEST["numero1"] <0||

    !isset($_REQUEST["numero3"]) ||
        $_REQUEST["numero3"] >10 || $_REQUEST["numero1"] <0||

    !isset($_REQUEST["numero4"]) ||
        $_REQUEST["numero4"] >10 || $_REQUEST["numero1"] <0

){
    echo "parâmetros inválidos. Não dá pra fazer a conta.";
    exit;
}

$numero1 = $_REQUEST["numero1"];
$numero2 = $_REQUEST["numero2"];
$numero3 = $_REQUEST["numero3"];
$numero4 = $_REQUEST["numero4"];

if( !is_numeric($numero1)){
    echo "Você informou parâmetro que não é número";
        exit;
}

if( !is_numeric($numero2)){
    echo "Você informou parâmetro que não é número";
        exit;
}

if( !is_numeric($numero3)){
    echo "Você informou parâmetro que não é número";
        exit;
}

if( !is_numeric($numero4)){
    echo "Você informou parâmetro que não é número";
        exit;
}

$media= ($numero1 + $numero2 + $numero3 + $numero4)/4;

if($media >=0 && $media <2){
    $situação= "Muito ruim";
}
elseif($media >=2 && $media <5){
    $situação= "Ruim";
}
elseif($media >=5 && $media <7){
    $situação= "Regular";
}
elseif($media >=7 && $media <9){
    $situação= "Bom";
}
else{
    $situação= "Muito bom";
}


$resposta["media"]= $media;
$resposta["situacao"]=$situação;
echo json_encode($resposta);
exit;
?>
</body>
</html>