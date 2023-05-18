<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Document</title>
</head>
<body>
<div class="main-frame-cal">
  <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Verifique si es mayor de edad:</label>
            <input type="number" name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Verificar</button>
    </form>

    <?php

$edad = 0;

    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];

        if ($edad >=18){
            echo "<h1>Es mayor de edad</h1>";
        }
        if  (18 > $edad && 0 < $edad) {
            echo "<h1>Es menor de edad</h1>";
        }
        if($edad =! 'number' || $edad <= 0){
            echo "<h1>No valido</h1>";
        }
    }
    ?>
</div>
</body>
</html>