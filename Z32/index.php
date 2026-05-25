<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z32 - większa z losowych</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Z32 - większa z losowych</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>

<section>
    <p>
        Napisz program, który losuje dwie liczby pseudolosowe z zakresu od a do b, wyświetla te liczby i określa która z nich jest większa, mniejsza, czy liczby są równe.
    </p>

    <form action="index.php" method="post">
        <label for="min">a (minimalna wartość):</label>
        <input type="number" id="min" name="min"><br>

        <label for="max">b (maksymalna wartość):</label>
        <input type="number" id="max" name="max"><br>

        <input type="submit" value="Oblicz liczby pseudolosowe">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (is_numeric($_POST['min']) && is_numeric($_POST['max'])) {

            $min = $_POST['min'];
            $max = $_POST['max'];

            if ($min <= $max) {

                $a = rand($min, $max);
                $b = rand($min, $max);

                echo "Pierwsza liczba: " . $a . "<br>";
                echo "Druga liczba: " . $b . "<br><br>";

                if ($a > $b) {
                    echo "$a > $b";
                } elseif ($a < $b) {
                    echo "$a < $b";
                } else {
                    echo "$a = $b";
                }

            } else {
                echo "Minimalna wartość musi być mniejsza lub równa maksymalnej.";
            }

        } else {
            echo "Wpisz poprawne liczby.";
        }
    }

    ?>

</section>
</body>
</html>