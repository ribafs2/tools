@ok
<?php
require_once 'kphp_tester_include.php';

$z5 = new Classes\Z5NoProps();
$z5->sayHello();

Classes\Z5NoProps::sayHelloStatic();
