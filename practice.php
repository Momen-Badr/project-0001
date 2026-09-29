<?php

function calc_vat($num){

$vat= $num + $num*.14;
echo "the price after VAT is $vat";

}


calc_vat(1000);