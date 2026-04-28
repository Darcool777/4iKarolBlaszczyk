<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T69b - tablica dwuwymiarowa sumy</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
<header>
    <h1>T69b - tablica dwuwymiarowa sumy</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>
    <p>Napisz program, który do dwuwymiarowej tablicy o wymiarach 5 x 3 wpisuje liczby pseudolosowe z zakresu <10,99>, wyświetla tą tablicę, a następnie obliczy:
        Sumy wartości w poszczególnych wierszach.
        Sumę maksymalnych wartości w poszczególnych kolumnach.</p>
            <?php
            $tablica = array(array(0,0,0), array(0,0,0),array(0,0,0),array(0,0,0),array(0,0,0));
            for ($i=0; $i<5; $i++) {
                for($j=0; $j<5; $j++) {
                $tablica[$i][$j] = rand(10,99);
                }
            }
            for($i=0; $i<5; $i++) {
                for($j=0; $j<3; $j++) {
                    echo $tablica[$i][$j]." ";
                }
                echo "<br>";
            }
            echo "<br>Wyniki<br>";
            $s1 = $tablica[0][0] + $tablica[0][1] + $tablica[0][2];
            $s2 = $tablica[1][0] + $tablica[1][1] + $tablica[1][2];
            $s3 = $tablica[2][0] + $tablica[2][1] + $tablica[2][2];
            $s4 = $tablica[3][0] + $tablica[3][1] + $tablica[3][2];
            $s5 = $tablica[4][0] + $tablica[4][1] + $tablica[4][2];
            echo "S1 = ".$tablica[0][0]." + ".$tablica[0][1]." + ".$tablica[0][2]." = ".$s1."<br>";
            echo "S2 = ".$tablica[1][0]." + ".$tablica[1][1]." + ".$tablica[1][2]." = ".$s2."<br>";
            echo "S3 = ".$tablica[2][0]." + ".$tablica[2][1]." + ".$tablica[2][2]." = ".$s3."<br>";
            echo "S4 = ".$tablica[3][0]." + ".$tablica[3][1]." + ".$tablica[3][2]." = ".$s4."<br>";
            echo "S5 = ".$tablica[4][0]." + ".$tablica[4][1]." + ".$tablica[4][2]." = ".$s5."<br>";
            $kolumna_1 = array($tablica[0][0], $tablica[1][0], $tablica[2][0], $tablica[3][0], $tablica[4][0]);
            $kolumna_2 = array($tablica[0][1], $tablica[1][1], $tablica[2][1], $tablica[3][1], $tablica[4][1]);
            $kolumna_3 = array($tablica[0][2], $tablica[1][2], $tablica[2][2], $tablica[3][2], $tablica[4][2]);
            $maksymalna_kolumna_1 = max($kolumna_1);
            $maksymalna_kolumna_2 = max($kolumna_2);
            $maksymalna_kolumna_3 = max($kolumna_3);
            $sumaMax = $maksymalna_kolumna_1+$maksymalna_kolumna_2+$maksymalna_kolumna_3;
            echo "SumaMax = ".$maksymalna_kolumna_1." + ".$maksymalna_kolumna_2." + ".$maksymalna_kolumna_3." = ".$sumaMax."<br>";
            ?>

</section>
</body>
</html>
