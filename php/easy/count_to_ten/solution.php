<?php
    // OPDRACHT
    // Schrijf een programma die de getallen 1 t/m 10 naar de console print
    // Gebruik hierbij een loop

    // // FOR LOOP
    for ($i = 1; $i <= 10; $i++ ) {
        echo "{$i}\n";
    }

    // // WHILE LOOP
    $i = 1;
    while ($i <= 10) {
        echo $i++ . "\n"; // POST INCREMENT
    }

    $a = 1;
    while ($a <= 10) {
        echo "{$a}\n";
        $a++;
    }

    // DO-WHILE LOOP
    $b = 1;
    do {
        echo "{$b}\n";
        $b++;
    } while ($b <= 10);
?>
