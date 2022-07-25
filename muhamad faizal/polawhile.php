<?php

$a= (int)readline("inputkan angka : ");
$p= (int)readline("inputkan panjang : ");
$b=1;
while ($a<=$p)
{
 $b=1;while ($b<=$a)
{
    echo "*"    . $b++;
                }
    echo "\n";        $a++;
                }

?>