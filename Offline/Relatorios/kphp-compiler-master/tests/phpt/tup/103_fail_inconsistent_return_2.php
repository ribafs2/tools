@kphp_should_fail
<?php
require_once 'kphp_tester_include.php';

function getMe($arg) {
    return $arg
        ? tuple(1, 'str')
        : array(1, 'str');
}

function demo() {
    $t = getMe(true);
}

demo();
