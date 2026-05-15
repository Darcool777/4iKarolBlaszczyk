<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z12 - 5 pseudolosowych</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
<header>
    <h1>Z12 - 5 pseudolosowych</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który dla podanych wartości całkowitych min i max, gdzie min < max i min > 0 oblicza 5 liczb
        pseudolosowych z zakresu
        <min
                , max>, wyświetla te liczby, a następnie oblicza i wyświetla ich sumę, iloczyn i średnią.
    </p>
    <form action="index.php" method="post">
        <label for="min">Podaj wartość minimalną</label><input type="number" id="min" name="min"><br>
        <label for="max">Podaj wartość maksymalną</label><input type="number" id="max" name="max"><br>
        <input type="submit" value="Oblicz 5 liczb pseudoklasowych">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (is_numeric($_POST['min']) && is_numeric($_POST['max'])) {
            $min = $_POST['min'];
            $max = $_POST['max'];
            if($min>PHP_INT_MAX) exit("<span class='danger'>Wartość przekroczyła dozwolony zakres.</span>");
            if($max>PHP_INT_MAX) exit("<span class='danger'>Wartość przekroczyła dozwolony zakres.</span>");
            $p1 = rand($min, $max);
            $p2 = rand($min, $max);
            $p3 = rand($min, $max);
            $p4 = rand($min, $max);
            $p5 = rand($min, $max);
            echo "Wylosowane liczby<br>";
            echo "<ul>";
            echo "<li>p1 = $p1</li>";
            echo "<li>p2 = $p2</li>";
            echo "<li>p3 = $p3</li>";
            echo "<li>p4 = $p4</li>";
            echo "<li>p5 = $p5</li>";
            echo "</ul>";
            $suma = $p1 + $p2 + $p3 + $p4 + $p5;
            $iloczyn = $p1 * $p2 * $p3 * $p4 * $p5;
            $srednia = $suma / 5;
            echo "Suma = $p1 + $p2 + $p3 + $p4 + $p5 = $suma<br>";
            echo "Iloczyn = $p1 * $p2 * $p3 * $p4 * $p5 = $iloczyn<br>";
            echo "Średnia = $srednia";
        } else {
            echo "Musisz wprowadzić wartości liczbowe!";
        }
    }
    ?>
</section>
</body>
</html>
