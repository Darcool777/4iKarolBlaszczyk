<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z36 - podzielność liczb</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Z36 - podzielność liczb</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>

<section>
    <p>
        Napisz program, który:
        dla liczb całkowitych (program powinien sprawdzić, czy liczby są całkowite) A i B sprawdza czy A jest podzielne przez B (wykorzystaj funkcję zwracającą resztę z dzielenia).
    </p>

    <form action="index.php" method="post">
        <label for="a">a:</label>
        <input type="number" id="a" name="a"><br>

        <label for="b">b:</label>
        <input type="number" id="b" name="b"><br>

        <input type="submit" value="Oblicz liczby pseudolosowe">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $a = $_POST['a'];
        $b = $_POST['b'];

        echo "Pierwsza liczba: " . $a . "<br>";
        echo "Druga liczba: " . $b . "<br><br>";

        if (
                filter_var($a, FILTER_VALIDATE_INT) !== false &&
                filter_var($b, FILTER_VALIDATE_INT) !== false
        ) {

            if ($b != 0) {

                if ($a % $b == 0) {
                    echo "$a jest podzielne przez $b";
                } else {
                    echo "$a nie jest podzielne przez $b";
                }

            } else {
                echo "Nie można dzielić przez 0";
            }

        } else {
            echo "Podaj liczby całkowite";
        }
    }

    ?>

</section>
</body>
</html>