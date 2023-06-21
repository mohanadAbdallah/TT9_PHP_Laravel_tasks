<?php
namespace Test;

include __DIR__.'/namespaceA.php';
include __DIR__.'/namespaceB.php';

use A\Test;
use B\Test as TestB; // if we dont put this, will return collesion error << Duplicate >> Try it .. 


// $test = new Test();
// echo "<br>";
// $test = new TestB();

// echo "<br>";

// echo \A\strlen('demo');

echo TEST; //printing from the defined Cnstant with define ('', '');  