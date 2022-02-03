<?php

$inferior= $_REQUEST['numInf'];
$superior= $_REQUEST['numSup'];


$numRan= rand($inferior,$superior);
if(!empty($_POST['numJug'])){
    $numeroJugado = $_POST['numJug'];
    $numRan = $_POST['numRan'];
    $intentos = $_POST['intentos'];
    $juego= $numRan == $numeroJugado;
    if($juego){
        echo "Enhorabuena, has acertado. Has necesitado ". $intentos. " intentos";
        echo "Puedes empezar otra partida";
        header("Location: JuegoNumGanado.php");
    }else{
        $intentos++;
        echo "Has fallado. Llevas un total de: ". $intentos. " intentos";
        
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <style>
        body{
            background-image: url("dados.jpeg");
            color:white;
        }

        input,
        .btn{
            width: 25%;
            padding: 15px;
            border: none;
            border-radius: 4px;
            
            opacity: 0.85;
            display: inline-block;
            font-size: 17px;
            line-height: 20px;
            text-decoration: none;
        }

        .btn{
            background-color: rgb(201, 201, 201);
            margin-top: 20px;
            margin-left: 18px;

        }        

        .btn:hover {
            opacity: 1;
        }

        .container{
            position: relative;
            top:50%;
            right:-20%;
            margin-top: 200px;
            margin-right: -300px;
            width: 60%;
            display: flex;
            flex-direction: column;
            height: 400px;
            justify-content: center;
            align-items: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1em;
            background-color: lightslategray;
            opacity: 0.7;
            text-align: center;
            cursor:pointer;
            
        }

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" name="val">

            <input type="hidden" name="numInf" value="<?= $inferior ?>">           
            <input type="hidden" name="numSup" value="<?= $superior ?>">
            <input type="hidden" name="numRan" min="<?=$inferior ?>" max="<?=$superior ?>" value="<?= $numRan ?>">           
            <legend>Número Jugado</legend>
            <input id="numJug" type="Number" autofocus required name="numJug" min="<?=$inferior ?>" max="<?=$superior ?>" value="numJug" />
            <input type="hidden" name="intentos" value="<?= $intentos??"" ?>">
            <input type="submit" value="Enviar de nuevo">

        </form>
</body>
</html>