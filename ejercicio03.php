
<?php
$x = 90;
$esPrimo = true; 

for ($i = 2; $i <= $x / 2; $i++) {
    if ($x % $i == 0) {
        $esPrimo = false; 
        break; 
    }
}

if ($esPrimo) {
    echo "$x es un número primo.\n";
} else {
    echo "$x no es un número primo.\n";
}


