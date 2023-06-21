<?php
namespace A;

class Test {
     public function __construct() {
        echo __class__;
     }
}
const TEST = 'Test'; //define constant as the local namspace that we are in ...
define('TEST', 'T'); // define constant in the global namespace 


function test(){
    echo __FUNCTION__;
}
function strlen($str){
    echo __FUNCTION__;
}