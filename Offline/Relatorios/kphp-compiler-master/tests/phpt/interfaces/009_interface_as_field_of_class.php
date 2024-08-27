@ok
<?php

require_once 'kphp_tester_include.php';

class C {
    /** @var Classes\IDo */
    public $ido = null;

    public function do_it()
    {
        $this->ido->do_it(1, 2);
    }

    /**
     * @return \Classes\IDo
     */
    public function get_ido() {
        return $this->ido;
    }
}

$c = new C();
$c->ido = new Classes\A();
$c->do_it();

$c->ido = new Classes\B();
$c->do_it();

$c->get_ido()->do_it(10, 20);
