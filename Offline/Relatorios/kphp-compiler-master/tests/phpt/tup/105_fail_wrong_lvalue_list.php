@kphp_should_fail
<?php
require_once 'kphp_tester_include.php';

function demo() {
    $t = tuple(1, 'str');
    list($int, $string, $nothing) = $t;
    echo $nothing;          // compilation error "Using Unknown type"
    // without usage of $nothing, it generates cpp code, but fails to compile it
    // it's not ok, but do not know how to correct this
}

demo();
