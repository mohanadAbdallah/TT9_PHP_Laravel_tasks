<?php
namespace B;

class Test {
     public function __construct() {
        echo __class__;
     }
}
const Test = 'Test';

function test(){
    echo __FUNCTION__;
}
function strlen($str){
    echo __FUNCTION__;
}