<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z73 - liczby parzyste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z73 - liczby parzyste</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>

    <p>Napisz program, który dla podanej liczby A większej od 1 wyświetla liczby parzyste od 1 do A włącznie, oddzielone średnikami.</p>

    <form action="z73.php" method="post">

        <label>Podaj liczbę A:</label>
        <input type="number" name="liczba" min="2" required>
        <br><br>
        <input type="submit" value="Wyświetl">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $a = (int)$_POST["liczba"];

        if ($a <= 1)
        {
            echo "<p class='error'><b>Liczba A musi być większa od 1!</b></p>";
        }
        else
        {
            echo "<h2 class='success'>Liczby parzyste od 1 do $a:</h2>";

            $parzyste = [];
            for ($i = 1; $i <= $a; $i++)
            {
                if ($i % 2 == 0)
                    $parzyste[] = $i;
            }

            echo "<p>" . implode(";", $parzyste) . "</p>";
        }
    }

    ?>

</section>
</body>
</html>
