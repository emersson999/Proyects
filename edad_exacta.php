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
            <label for="exampleFormControlInput1">Verifique su edad exacta:</label>
            <input type="date" name="n_f" class="form-control" id="exampleFormControlInput1" placeholder="Digite número 1">
            </div>
            <br>
            <button type="submit" name="verificar" class="btn btn-outline-info">Calcular edad</button>
        </form>

    <?php

    if (isset($_POST['verificar'])){
        $n_f = new DateTime($_POST['n_f']);

        $date2 = new DateTime(date("y-m-d"));

        $diff = $n_f->diff($date2);

        $edad_actual = $diff->y;

        if($diff->y >=18){
            $mayor= "Es mayor de edad";
        }
        if($diff->y <=17){
            $mayor = "Es menor de edad";
        }

        echo "Su edad es: ".$edad_actual." años por tanto: ".$mayor;
    }
     ?>
    </div>
</body>
</html>