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
  <form action="" method="GET">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Digite su nomnbre">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellido</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Digite su apellido">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Cédula</label>
            <input type="number" name="cedula" class="form-control" id="exampleFormControlInput1" placeholder="Digite su cédula">
        </div>
        <button type="submit" name="enviar" class="btn btn-outline-info">Enviar</button>
    </form>
<?php
$edad = 0;

if (isset($_GET['enviar'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $cedula = $_GET['cedula'];

    echo "Nombre :".$nombre."<br>";
    echo "Apellido :".$apellido."<br>";
    echo "Cédula :".$cedula."<br>";
}
?>


</div>
</body>
</html>    