@ok
<?php

class B {
    public function __construct(int $x) {}
}

class D extends B {
}

class B2 {
    public function __construct(int $x) {}
}

class D2 extends B2 {
}

$d = new D(10);
$d2 = new D2(10);
var_dump("OK");
