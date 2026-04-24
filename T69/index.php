<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T69 - czytanie danych z formularza i wykonywanie operacji matematycznych</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
<header>
    <h1>T69 - czytanie danych z formularza i wykonywanie operacji matematycznych</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>

    <form action="index.php" method="post">
        <label for="imie">Podaj imię:</label>
        <input type="text" id="imie" name="imie"><br>
        <label for="a">Podaj wartość a:</label><input type="text" id="a" name="a"><br>
        <label for="b">Podaj wartość b:</label><input type="text" id="b" name="b"><br>
        <label for="c">Podaj wartość c:</label><input type="text" id="c" name="c"><br>
        <label for="d">Podaj wartość d:</label><input type="text" id="d" name="d"><br>
        <input type="submit" value="Wyślij dane i wykonaj operację"><br>
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $imie = $_POST['imie'];
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];
        echo "<h3>WItaj $imie !!!!</h3><br>";
        $tablica = array($a, $b, $c, $d);
        echo "<pre>";
        var_dump($tablica);
        echo "</pre>";

        $tab_liczby = [];
        for ($i = 0; $i < 4; $i++) {
            if (is_numeric($tablica[$i])) {
                $tab_liczby[] = $tablica[$i];
            }
        }
        $ile_liczb = count($tab_liczby);
        echo "<br>Ile liczb jest w tablicy: $ile_liczb";
        if ($ile_liczb == 0) {
            echo "Brak liczb w tablicy<br>";
        } else {
            $suma = array_sum($tab_liczby);
            $srednia = $suma / $ile_liczb;
            echo "Suma liczb = tablicy: $suma<br>";
            echo "Srednia liczb = tablicy: $srednia<br>";
        }
    }
    ?>
</section>
</body>
</html>