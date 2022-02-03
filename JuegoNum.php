<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url("dados.jpeg");
        }

        input,
        .btn{
            width: 100%;
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
</head>
<body>
    <div class="container">
            <form action="JuegoNumVal.php" method="post">
                <legend>Número inferior</legend>
                <input type="Number" name="numInf" value="numInf" required>
                <legend>Número superior</legend>
                <input type="Number" name="numSup" value="numSup" required>
                <input class="btn" type="submit" value="Enviar">
            </form>
    </div>

</body>
</html>