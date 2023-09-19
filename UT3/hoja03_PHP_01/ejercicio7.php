<?php
$a=1;
$b=2;
$c;
for ($i = 0; $i < 10; $i++) {
    print$a."/".$b."<br/>";
    $c=$a;
    $a=++$a;
    $c=$b;
    $b=$b*2;
}