<?php
header("Content-type:text/html; charset=utf8");

$agencia = "";
$conta = "";
$senha = "";
$quantia = "";

if(isset($_POST["agencia"]) && !empty($_POST["agencia"])
&&isset($_POST["conta"]) && !empty($_POST["conta"])
&&isset($_POST["senha"]) && !empty($_POST["senha"])
&&isset($_POST["quantia"]) && !empty($_POST["quantia"])
&&isset($_POST["sacar"])
){

$agencia = $_POST["agencia"];
$conta = $_POST["conta"];
$senha = $_POST["senha"];
$quantia = $_POST["quantia"];
    
$nota100 = 0;
$nota50 = 0;
$nota20 = 0;
$nota10 = 0;
$nota5 = 0;
$nota2 = 0;
$restoD = 0;

if($quantia > 100){
    
    $nota100 = $quantia / 100;
    $restoD =  $quantia % 100;
}

if($restoD >= 50){
    $nota50 = $restoD / 50;
    $restoD =  $restoD % 50;
}
if($restoD >= 20){
    $nota20 = $restoD / 20;
    $restoD =  $restoD % 20;
}
if($restoD >= 10){
    $nota10 = $restoD / 10;
    $restoD =  $restoD % 10;
}
if($restoD >= 5){
    $nota5 = $restoD / 5;
    $restoD =  $restoD % 5;
}
if($restoD >= 2){
    $nota2 = $restoD / 2;
    $restoD =  $restoD % 2;
}
}else{
    header("location:index.html");
}
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <style>
        body{
            margin: 0;
        }
        label{
            border:solid 1px black;
            width:20%;
            height:100%;
        }
        #div1{
            display:grid;
            height:100%;
        }
        img{
            width:200px;
            height:150px;
        }

    </style>
</head>
<body>
    <div id="div1">
        <div>
            <img src="nota_100"><br><br>
            <label for="quant100"><?php echo floor($nota100);?></label>
        </div>
        <div>    
            <img src="nota_50"><br><br>
            <label for="quant50"><?php echo floor($nota50);?></label>
        </div>
        <div>
            <img src="nota_20"><br><br>
            <label for="quant20"><?php echo floor($nota20);?></label>
        </div>
        <div>
            <img src="nota_10"><br><br>
            <label for="quant10"><?php echo floor($nota10);?></label>
        </div>
        <div>
            <img src="nota_5"><br><br>
            <label for="quant5"><?php echo floor($nota5);?></label>
        </div>
        <div>
            <img src="nota_2"><br><br>
            <label for="quant2"><?php echo floor($nota2);?></label>
        </div>
    </div>
</body>
</html>