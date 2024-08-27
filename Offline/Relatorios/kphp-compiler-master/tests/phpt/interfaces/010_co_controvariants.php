@ok
<?php

interface MyInterface {
    /**
     * @param int $a
     * @return mixed
     */
    public function foo($a);
}

class CovariantImpl implements MyInterface {
    /**
     * @param int $a
     * @return int
     */
    public function foo($a) {
        return 10;
    }
}

class ControvariantImpl implements MyInterface {
    /**
     * @param mixed $a
     * @return mixed
     */
    public function foo($a) {
        if ($a) {
            $a = 10;
        } else {
            $a = "asdf";
        }

        return $a;
    }
}

/** @var MyInterface $m */
$m = new CovariantImpl();
var_dump($m->foo(10));

$m = new ControvariantImpl();
var_dump($m->foo(0));
