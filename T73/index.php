<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T73 - zamówienie dla piekarni</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
<header>
    <h1>T73 - zamówienie dla piekarni</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>


    <p>Zadanie polega na utworzeniu systemu umożliwiającego wykonanie zamówienia trzech produktów sprzedawanych w piekarni (dodaj własny pomysł). Użytkownik wypełnia formularz w którym zapisuje ilość zamówionych produktów. Skrypt oblicza należność za zamówione ilości produktów i wyświetla je w tabeli.
        Tyle wersja podstawowa. Jeśli interesuje Cię wyższa ocena rozbuduj swój skrypt o dodatkowe funkcjonalności.</p>


    <form action="index.php" method="post">


        <label>Imie:</label>
        <input type="text" name="imie" required>

        <label>Wiek:</label>
        <input type="number" name="wiek" required>

        <label>Liczba chleba (5 zł):</label>
        <input type="number" name="chleb" min="0" value="0">

        <label>Liczba pączków (4 zł):</label>
        <input type="number" name="paczek" min="0" value="0">

        <label>Liczba bagietek (3 zł):</label>
        <input type="number" name="bagietka" min="0" value="0">

        <label>Dostawa:</label>
        <select name="dostawa">
            <option value="0">Odbiór osobisty - 0 zł</option>
            <option value="10">Kurier - 10 zł</option>
            <option value="15">Paczkomat - 15 zł</option>
        </select>
        <br>
        <br>
        <label>Opakowanie:</label>
        <select name="opakowanie">
            <option value="0">Brak - 0 zł</option>
            <option value="5">Kolorowy papier - 5 zł</option>
            <option value="8">Złoty nadruk - 8 zł</option>
            <option value="12">Pakiet premium - 12 zł</option>
        </select>
        <br>
<br>
        <input type="submit" value="Złóż zamówienie">
    </form>

    <?php

    function czyPierwsza($liczba)
    {
        if($liczba < 2)
            return false;

        for($i = 2; $i <= sqrt($liczba); $i++)
        {
            if($liczba % $i == 0)
                return false;
        }

        return true;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $imie = $_POST["imie"];
        $wiek = $_POST["wiek"];

        $chleb = (int)$_POST["chleb"];
        $paczek = (int)$_POST["paczek"];
        $bagietka = (int)$_POST["bagietka"];

        $dostawa = (float)$_POST["dostawa"];
        $opakowanie = (float)$_POST["opakowanie"];

        if($wiek < 18)
        {
            echo "<p class='error'><b>Zamówienia mogą składać tylko osoby pełnoletnie!</b></p>";
        }
        else
        {
            $cenaChleb = 5;
            $cenaPaczek = 4;
            $cenaBagietka = 3;

            $gratisowePaczki = floor($paczek / 3);

            $kosztChleb = $chleb * $cenaChleb;
            $kosztPaczek = ($paczek - $gratisowePaczki) * $cenaPaczek;
            $kosztBagietka = $bagietka * $cenaBagietka;

            $sumaProduktow = $chleb + $paczek + $bagietka;

            $suma = $kosztChleb + $kosztPaczek + $kosztBagietka;

            $rabat = 0;

            if(czyPierwsza($sumaProduktow))
            {
                $rabat = $suma * 0.10;
                $suma -= $rabat;
            }

            $suma += $dostawa + $opakowanie;

            echo "<h2 class='success'>Podsumowanie zamówienia dla: $imie</h2>";

            echo "
        <table>
            <tr>
                <th>Produkt</th>
                <th>Wygląd produktu</th>
                <th>Ilość</th>
                <th>Koszt</th>
            </tr>

            <tr>
                <td>Chleb</td>
                <td><img src='chleb.jpg'></td>
                <td>$chleb</td>
                <td>$kosztChleb zł</td>
            </tr>

            <tr>
                <td>Pączki</td>
                <td><img src='paczki.jpg'></td>
                <td>$paczek</td>
                <td>$kosztPaczek zł</td>
            </tr>

            <tr>
                <td>Bagietki</td>
                <td><img src='bagietka.jpg'></td>
                <td>$bagietka</td>
                <td>$kosztBagietka zł</td>
            </tr>
        </table>
        ";

            echo "
<table class='podsumowanie'>
    <tr>
        <th>Podsumowanie</th>
        <th>Wartość</th>
    </tr>

    <tr>
        <td>Koszt dostawy</td>
        <td>$dostawa zł</td>
    </tr>

    <tr>
        <td>Koszt opakowania</td>
        <td>$opakowanie zł</td>
    </tr>
";

            if($gratisowePaczki > 0)
            {
                echo "
    <tr>
        <td>Gratisowe pączki</td>
        <td>$gratisowePaczki</td>
    </tr>
    ";
            }

            if($rabat > 0)
            {
                echo "
    <tr>
        <td>Rabat za liczbę pierwszą</td>
        <td>".round($rabat,2)." zł</td>
    </tr>
    ";
            }

            echo "
    <tr class='razem'>
        <td>Łączna kwota do zapłaty</td>
        <td>".round($suma,2)." zł</td>
    </tr>
</table>
";
        }
    }

    ?>

    </section>
</body>
</html>
