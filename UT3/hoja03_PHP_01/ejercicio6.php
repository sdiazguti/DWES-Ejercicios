<?php
$a=0;
$b=1;
$c;
for ($i = 1; $i < 50; $i++) {
    print $a."<br/>";
    
    $c=$a+$b;
    $a=$b;
    $b=$c;
}

