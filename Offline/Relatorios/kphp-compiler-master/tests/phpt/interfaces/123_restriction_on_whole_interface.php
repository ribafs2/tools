@kphp_should_fail
<?php

require_once 'kphp_tester_include.php';

$a = function (Classes\RestrictedInterface $ri) { return $ri->run(10); };
$a(new Classes\RestrictedDerived());
 
