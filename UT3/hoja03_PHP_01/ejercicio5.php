<?php
for ($a = 100; $a < 1000; $a++) {
$b=$a;
$c=0;
$d=1;
while($b>0){
    $ult=$b%10;
    $b=(int)($b/10);
 $c=$ult+$c;
 $d=$ult*$d;
}

    if ($c==$d) {
        print"En el numero ".$a." la suma de sus digitos es igual al producto de los mismos.<br/>";
    }
}