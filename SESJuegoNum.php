<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            position: relative;
            left: 40%;
            margin-top:10%;
            border: 2px solid black;
            width: 250px;
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <div>
        <form action="SESJuegoNumVal.php" method="post">
            <legend>Número inferior</legend>
            <input type="Number" name="numInf" value="numInf" required>
            <legend>Número superior</legend>
            <input type="Number" name="numSup" value="numSup" required>
            <legend>Tu Número</legend>
            <input type="Number" name="numero" value="numero" required>
           <!-- <input type= "hidden" <? $_GET[$rangoFallo].$msg="El rango introducido es erróneo" ?> name="msg" value="fallo">-->
            <input type="submit" value="Enviar">

        </form>
    </div>

</body>
</html>