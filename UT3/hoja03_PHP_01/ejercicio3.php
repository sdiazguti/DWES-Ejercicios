<?php
$a=123456654321;
$b=$a;
$c=0;
while ($b>0) {
    $pri=$b/100;
    $pri=(int)($pri);
    
    $ult=$b%10;
    
    $c=$c*10+$ult;
    
    $b=(int)($b/10);
    ;
}
if ($a==$c) {
   
    print"El numero ".$a." es capicua";
}
else {
    print"El numero ".$a." no es capicua";
}
