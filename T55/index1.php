<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>T551 - funkcje wbudowane</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>
<header>
    <h1>T551 - funkcje wbudowane</h1>
    <h2>Autor: Karol Błaszczyk</h2>
    <hr>
</header>
<section>
    <p>Dana jest tablica zawierająca liczby. Napisz funkcję, która po otrzymaniu tej tablicy jako argumentu zwraca sumę dwóch najmniejszych liczb zapisanych w tablicy.</p>

    <form method="POST">
        <label for="liczby">
            Podaj liczby oddzielone przecinkami:
        </label>

        <input
                type="text"
                id="liczby"
                name="liczby"
                placeholder="np. 1,2,3,4"
                required
        >

        <button type="submit">Oblicz</button>
    </form>


    <?php
    function sumaDwochNajmniejszych(array $tablica): int|float
    {
        $liczby = array_map('floatval', $tablica);

        sort($liczby);

        return $liczby[0] + $liczby[1];
    }

    $wynik = null;
    $blad = "";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $dane = trim($_POST["liczby"] ?? "");

        if (empty($dane)) {
            $blad = "Wprowadź liczby.";
        } else {

            $tablica = explode(",", $dane);

            $tablica = array_filter($tablica, fn($x) => trim($x) !== "");

            foreach ($tablica as $element) {
                if (!is_numeric(trim($element))) {
                    $blad = "Wszystkie wartości muszą być liczbami.";
                    break;
                }
            }

            if (!$blad && count($tablica) < 2) {
                $blad = "Podaj co najmniej dwie liczby.";
            }

            if (!$blad) {
                $wynik = sumaDwochNajmniejszych($tablica);


            }
        }
    }
    ?>

    <?php if ($blad): ?>
        <div class="error">
            <?= htmlspecialchars($blad) ?>
        </div>
    <?php endif; ?>

    <?php if ($wynik !== null): ?>
        <div class="result">
            Suma dwóch najmniejszych liczb wynosi:
            <strong><?= htmlspecialchars($wynik) ?></strong>
        </div>
    <?php endif; ?>
    </div>

</section>
</body>
</html>
