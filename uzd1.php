<?php

$out = '';
if (isset($_POST['k1']) && $_POST['k1'] != '') {
    $k1 = $_POST['k1'];
    $k2 = $_POST['k2'];
    $k3 = $_POST['k3'];
    if (($k1 + $k2 > $k3) && ($k2 + $k3 > $k1) && ($k1 + $k3 > $k2)) {
        $out = 'Trikampis gali būti sudarytas';
    } else {
        $out = 'Trikampis negali būti sudarytas';
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Pirma Užduotis</title>
</head>

<body>
    <?php include('nav.php') ?>
    <div class="container">
        <h1>Ar galima sudaryti trikampį?</h1>
        <p>1. Įvedami skaičiai a, b, c (kraštinių ilgiai). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir rezultatą išvestų.</p>
        <form action="" method="POST">
            <div class="col-2">
            <input class="form-control" type="text" name="k1" placeholder="Kraštinė a"><br>
            <input class="form-control" type="text" name="k2" placeholder="Kraštinė b"><br>
            <input class="form-control" type="text" name="k3" placeholder="Kraštinė c"><br>
            </div>
            <button class="btn btn-primary mt-2">Tikrinti</button>
        </form>
        <hr>
        <h2>Atsakymas:  <?= $out ?></h2>
       
    </div>
</body>

</html>