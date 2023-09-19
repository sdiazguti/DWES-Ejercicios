<?php

$a=11;
$b=0;
for ($c = 1; $c <= $a; $c++) {
    if ($a % $c == 0) {
        $b=$b+1;
    }
}

if ($a==1 or $b==2) {
    print $a." es primo.";
}else {
    print $a." no es primo";
}