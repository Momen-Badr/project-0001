<?php
declare(strict_types =1);
Const VAT=0.14;
$total=0;
 
function sales($amount){
 global $total;
 $vat=$amount * VAT;
 $price= $vat  + $amount;
 $total= $total+ $price;
 echo $total;
}
sales(100);
// sales(100);
