<?php
namespace Classes;

/**
 */
class RestrictedDerived implements RestrictedInterface {
    /**
     * @param int $x
     * @return int
     */
    public function run($x) {
        return 10;
    }
}
