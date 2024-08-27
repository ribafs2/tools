<?php

namespace Classes;

class A
{
  /** @var int */
  var $a = 0;

  public function printA() {
    echo "this->a = ", $this->a, "\n";
  }

  /**
   * @return self
   */
  public function getThis() {
    return $this;
  }

  /**
   * @param int $a
   * @return A
   */
  public function setA($a) {
    $this->a = $a;
    return $this;
  }
}
