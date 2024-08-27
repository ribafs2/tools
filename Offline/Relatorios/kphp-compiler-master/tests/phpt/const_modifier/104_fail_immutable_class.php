@kphp_should_fail
/Field y of immutable class X should be immutable too, but class Y is mutable/
<?php

class Y {
  public $v = 1;
}

/** @kphp-immutable-class */
class X {
  /** @var Y | null */
  public $y = null;
}

$x = new X;
