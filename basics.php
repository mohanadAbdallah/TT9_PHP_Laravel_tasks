<?php

$string = "hello mohanad";

$j=0;

while(!empty($string[$j])){
    $j++;
}
for( $i=($j-1) ; $i>=0 ; $i--){
    echo $string[$i];
}