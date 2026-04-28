<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T69a - tablica asocjacyjna</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
<header>
    <h1>T69a - tablica asocjacyjna</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>
    <p>Po zapoznaniu się  z materiałem napisz skrypt, w którym zdefiniuj tablicę asocjacyjną - 5-elementową. W tablicy indeksami są nazwy państw, a wartościami ich stolice.</p>
            <?php
            $tablica = array(
                'Polska' => 'Warszawa',
                'Niemcy' => 'Berlin',
                'Francja' => 'Paryż',
                'Włochy' => 'Rzym',
                'Hiszpania' => 'Madryt'
            );
            echo "<pre>";
            print_r($tablica);
            echo "</pre>";
            ?>

</section>
</body>
</html>
