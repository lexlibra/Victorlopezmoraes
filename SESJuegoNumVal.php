<?php



$inferior= $_REQUEST['numInf'];
$superior= $_REQUEST['numSup'];
$numero= $_REQUEST['numero'];
$rangoFallo =($inferior>=$superior);


if($rangoFallo){
    header("URL: SESJuegoNum.php");
}

$numRan= rand($inferior,$superior);

if(!empty($_POST['numero'])){
    session_start();
    $_SESSION['partida']=$numero;
    //$numeroJugado = $_POST['numJug'];
    $numRan = $_POST['numRan'];
    $intentos = $_POST['intentos'];
    $numero= $_POST['numero'];
    $juego= $numRan == $numero;
    if(isset($juego)){
        echo "Enhorabuena, has acertado. Has necesitado ". $intentos. " intentos";
        echo "Puedes empezar otra partida";
        header("Location: SESJuegoNumGanado.php");
    }else{
        $intentos++;
        echo "Has fallado. Llevas un total de: ". $intentos. " intentos". " rand  ". $numRan;
        
    }
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
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
            <input type="hidden" name="intentos" value="<?= $intentos??"" ?>">
            <legend>Número Jugado</legend>
            <input id="numero" type="Number" required name="numero" value="<?= $numero ?>" />
            <input type="submit" value="Enviar de nuevo">

        </form>
</body>
</html>