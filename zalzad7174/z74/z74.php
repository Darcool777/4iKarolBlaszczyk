<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Z74 - wspinaczka na piętra</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>Z74 - wspinaczka na piętra</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>

    <p>Napisz program, który dla danej liczby całkowitej N wyświetla ciąg liczb w postaci ułamka zwykłego i dziesiętnego, prezentując wynik w specyficzny sposób. Na przykład dla N=3 program powinien wyświetlić:
        Piętro 1 > 1/1 - 1.000000
        Piętro 2 > > 1/2 - 0.500000
        Piętro 3 > > > 1/3 - 0.333333
        > > > > Koniec wspinaczki wracamy < < < <
        Piętro 3 > > >
        Piętro 2 > >
        Piętro 1 >
        Program powinien przyjmować N z formularza i weryfikować, czy jest to liczba całkowita dodatnia.</p>
    <form action="z74.php" method="post">

        <label>Liczba pięter (N):</label>
        <input type="number" name="n" min="1" required>
        <br><br>
        <input type="submit" value="Wspinaj się">

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $n = $_POST["n"];

        if (!is_numeric($n) || (int)$n != $n || $n <= 0)
        {
            echo "<p class='error'><b>Podaj poprawną liczbę całkowitą dodatnią!</b></p>";
        }
        else
        {
            $n = (int)$n;

            echo "<h2 class='success'>Wspinaczka dla N = $n</h2>";
            echo "<pre>";

            for ($i = 1; $i <= $n; $i++)
            {
                $strzalki = str_repeat("> ", $i);
                $ulamek = sprintf("%.6f", 1 / $i);
                echo "Piętro $i $strzalki 1/$i - $ulamek\n";
            }

            $powrot = str_repeat("> > ", $n + 1);
            echo "$powrot Koniec wspinaczki wracamy " . str_repeat("< < ", $n + 1) . "\n";

            for ($i = $n; $i >= 1; $i--)
            {
                $strzalki = str_repeat("> ", $i);
                echo "Piętro $i $strzalki\n";
            }

            echo "</pre>";
        }
    }

    ?>

</section>
</body>
</html>
