<?php

$out = "";

if (isset($_POST['metai']) && is_numeric($_POST['metai'])) {
    $metai = $_POST['metai'];
    if ($metai >= 0) {
        switch (($metai - 984) % 10) {
            case 0:
            case 1;
                $out = 'Žalia spalva';
                break;
            case 2:
            case 3:
                $out = 'Raudona spalva';
                break;
            case 4:
            case 5:
                $out = 'Geltona spalva';
                break;
            case 6:
            case 7:
                $out = 'Balta spalva';
                break;
            case 8:
            case 9:
                $out = 'Juoda spalva';
                break;
        }
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
    <title>Trečia užduotis</title>
</head>

<body>
    <?php include('nav.php') ?>
    <div class="container">
        <h1>Senovės Japonų kalendorius</h1>
        <p>3. Senovės japonų kalendorių sudarė 60 metų ciklas. Visi metai cikle buvo sunumeruoti nuo 1 iki 60 ir suskirstyti poromis, kurių kiekviena turėjo savo spalvą (žalią, raudoną, geltoną, baltą ar juodą). Ciklo metų spalvos buvo paskirstytos taip:
        <pre> 1, 2, 11, 12, 21, 22, …, 51, 52 metai – žalia spalva;
 3, 4, 13, 14, 23, 24, …, 53, 54 metai – raudona spalva;
 5, 6, 15, 16, 25, 26, …, 55, 56 metai – geltona spalva;
 7, 8, 17, 18, 27, 28, …, 57, 58 metai – balta spalva;
 9, 10, 19, 20, 29, 30, …, 59, 60 metai – juoda spalva.</pre>

        Žinoma, kad naujasis 60 metų ciklas prasidėjo 1984-aisiais ir baigsis 2043-iaisiais metais; 1984-ieji ir 1985-ieji buvo žalios spalvos metai, 1986-ieji ir 1987-ieji buvo raudonos spalvos metai, 2043-ieji bus juodos spalvos metai. Sukurkite puslapį kuriame būtų įvedami metai ir būtų išvedama kokia yra įvestų metų spalva pagal japonų kalendorių.</p>
        <form action="" method="POST">
            <div class="col-2">
            <input class="form-control" type="number" name="metai" placeholder="Įveskite metus"> <br>
            </div>
            <button class="btn btn-primary mt-2">Tikrinti</button>
        </form>
        <hr>
        <h2>Atsakymas: <?= $out ?> </h2>

    </div>

</body>

</html>