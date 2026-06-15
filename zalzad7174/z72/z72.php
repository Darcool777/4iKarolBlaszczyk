<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z72 - liczby do A</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z72 - liczby do A</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>

    <p>Napisz program, który dla podanej liczby całkowitej A, wyświetla liczby od 1 do A oddzielone średnikami o ile liczba A jest mniejsza od 100 w przypadku liczby większej wyświetla liczby jedynie do 100 i kończy działanie.</p>

    <form action="z72.php" method="post">

        <label>Podaj liczbę A:</label>
        <input type="number" name="liczba" required>
        <br><br>
        <input type="submit" value="Wyświetl">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $a = (int)$_POST["liczba"];

        $koniec = $a < 100 ? $a : 100;

        echo "<h2 class='success'>Wynik dla A = $a</h2>";

        $wynik = "";
        for ($i = 1; $i <= $koniec; $i++)
        {
            if ($i < $koniec)
                $wynik .= $i . ";";
            else
                $wynik .= $i;
        }

        echo "<p>$wynik</p>";

        if ($a > 100)
            echo "<p class='error'><b>Liczba A jest większa od 100 – wyświetlono tylko do 100.</b></p>";
    }

    ?>

</section>
</body>
</html>
