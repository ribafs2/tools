<?php

namespace Classes;

class A implements IDo {
    /**
     * @param int $a
     * @param int $b
     */
    public function do_it($a, $b) { var_dump("A; a=".$a."; b=".$b); }
}
