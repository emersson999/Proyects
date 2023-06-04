<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/df0f283818.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/calculadora.css">
    <title>Calculadora</title>
</head>
<body>
    <a class="home" href="index.html#section-respuestas">
        <i class="fa-solid fa-house fa-2xl"></i>
    </a>
   <div class="main-frame-cal">
   <form action="" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Número 1:</label>
            <input type="number" name="n1" class="form-control" id="exampleFormControlInput1" placeholder="Digite número 1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput2">Número 2:</label>
            <input type="number" name="n2" class="form-control" id="exampleFormControlInput2" placeholder="Digite número 2">
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccione la operación:</label>
            <select class="form-control" name="tipo" id="exampleFormControlSelect1">
            <option value="1">Suma</option>
            <option value="2">Resta</option>
            <option value="3">Multiplicación</option>
            <option value="4">División</option>
            <a><i class="bi bi-house"></i></a>
            </select>
        </div>
        <button type="submit" name="operar" class="btn btn-outline-info">Operar</button>
    </form>
<?php
if (isset($_POST['operar'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $tipo = $_POST['tipo'];

    

    switch ($tipo) {
        case '1':
            $result = $n1 + $n2;
            break;
         case '2':
                $result = $n1 - $n2;
                break;
         case '3':
                 $result = $n1 * $n2;
                 break;
         case '4':
                $result = $n1 / $n2;
                break;
    }
    echo "<h1>".$result."</h1>";
    
}
?>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>