<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania PHP</title>
</head>
<body>

    <h2>Zadanie 1: Liczby podzielne przez 4 (od 4 do 200)</h2>
    <?php
    for ($i = 4; $i <= 200; $i++) {
        if ($i % 4 == 0) {
            echo $i . " ";
        }
    }
    ?>

<h2>Zadanie 2: Liczby podzielne przez 5 i 8 (od 4 do 200)</h2>
<?php
for ($i = 4; $i <= 200; $i++) {
    if ($i % 5 == 0 && $i % 8 == 0) {
        echo $i . " ";
    }
}
?>

<h2>Zadanie 3: Suma liczb od 11 do 17</h2>
<?php
$suma = 0;
for ($i = 11; $i <= 17; $i++) {
    $suma += $i;
}
echo "Suma: " . $suma;
?>

<h2>Zadanie 4: Liczby nieparzyste od 40 do 350</h2>
<?php
for ($i = 40; $i <= 350; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>

<h2>Zadanie 5: Liczby parzyste od 40 do 250</h2>
<?php
for ($i = 40; $i <= 250; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}
?>

</body>
</html>