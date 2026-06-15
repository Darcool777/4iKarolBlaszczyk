<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z71 - liczba cyfr</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z71 - liczba cyfr</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>

    <p>Napisz program, który dla podanej liczby całkowitej a większej od zera odpowie ile ma ona cyfr. Zadanie wykonaj realizując następujący algorytm:

        Zainicjuj zmienne pomocnicze:
        Ustaw zmienną b równą a.
        Ustaw licznik cyfr ile na 1.
        Dopóki b >= 10, wykonuj:
        Podziel b przez 10.
        Zwiększ licznik ile o 1.
        Wyświetl wynik ile.
        Zakończ działanie algorytmu.</p>

    <form action="z71.php" method="post">

        <label>Podaj liczbę:</label>
        <input type="number" name="liczba" min="1" required>
        <br><br>
        <input type="submit" value="Sprawdź">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $a = (int)$_POST["liczba"];

        if ($a <= 0)
        {
            echo "<p class='error'><b>Podana liczba musi być większa od zera!</b></p>";
        }
        else
        {
            $b = $a;
            $ile = 1;

            while ($b >= 10)
            {
                $b = (int)($b / 10);
                $ile++;
            }

            echo "<h2 class='success'>Wynik dla liczby: $a</h2>";
            echo "<p>Liczba <b>$a</b> ma <b>$ile</b> cyfr.</p>";
        }
    }

    ?>

</section>
</body>
</html>
