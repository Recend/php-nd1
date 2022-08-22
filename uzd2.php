<?php

$out = "";
$count = "";

if (isset($_POST['metai']) && is_numeric($_POST['metai'])) {
    $metai = $_POST['metai'];
    if ($metai < 1896) {
        $out = 'Olimpiados dar nebuvo ';
    }elseif ($metai % 4 == 0) {
        $out = 'Olimpiniai metai nr. ';
        $count = (($metai - 1896) / 4) + 1;
    }else{
        $out = 'Neolimpiniai metai';
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
    <title>Antra Užduotis</title>
</head>

<body>
    <?php include('nav.php') ?>
    <div class="container">
        <h1>Sužinokite ar tai olimpiniai metai </h1>
        <p>2. Pirmosios vasaros olimpinės žaidynės įvyko 1896 m. Atėnuose. Po to jos vyko arba turėjo vykti kas ketveri metai, t.y. 1900 m. – antrosios, 1904 m. – trečiosios ir t.t. Neįvykusioms žaidynėms skiriamas eilės numeris, o jų metai vis tiek laikomi olimpiniais. Tinklapyje turi būti įvedami metai, nustatykite olimpinių žaidimų numerį, jei metai yra olimpiniai arba praneškite, kad metai ne olimpiniai. Tinkalpyje turi būti išvedama ar tai buvo olimpiniai metai ar ne, jei tai buvo olimpiniai metai taip pat išvesti ir jų numerį.</p>
        <form action="" method="POST">
            <div class="col-2">
            <input class="form-control" type="number" name="metai" placeholder="Įveskite metus"><br>
            </div>
            <button class="btn btn-primary mt-2">Tikrinti</button>
        </form>
        <hr>
        <h2>Atsakymas: <?=$out . $count ?></h2>
    </div>
</body>

</html>