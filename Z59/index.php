<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z59 - ocena procent</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Z59 - ocena procent</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>

<section>

    <p>
        Napisz program, który dla podanego wyniku procentowego testów studenckich wystawia ocenę według następującej zasady:
        5 - 90% do 100%
        4,5 - 80% do 89%
        4 - 70% do 79%
        3,5 - 60% do 69%
        3 - 50% do 59%
        2 - poniżej 50%
    </p>

    <form action="index.php" method="post">

        <label for="a">Podaj wynik studenta (%) = </label>
        <input type="number" id="a" name="a"><br><br>

        <input type="submit" value="Sprawdź ocenę">

    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $a = $_POST['a'];

        if (filter_var($a, FILTER_VALIDATE_INT) !== false) {

            if ($a >= 0 && $a <= 100) {

                echo "Wynik studenta: $a%<br><br>";

                if ($a >= 90) {
                    echo "Ocena: 5";
                }
                elseif ($a >= 80) {
                    echo "Ocena: 4.5";
                }
                elseif ($a >= 70) {
                    echo "Ocena: 4";
                }
                elseif ($a >= 60) {
                    echo "Ocena: 3.5";
                }
                elseif ($a >= 50) {
                    echo "Ocena: 3";
                }
                else {
                    echo "Ocena: 2";
                }

            } else {
                echo "Podaj liczbę od 0 do 100";
            }

        } else {
            echo "Podaj liczbę całkowitą";
        }
    }

    ?>

</section>
</body>
</html>