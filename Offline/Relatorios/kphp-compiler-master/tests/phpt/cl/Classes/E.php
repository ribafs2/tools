<?php

namespace Classes;

class E
{
  var $a = 0;
  /** @var E */
  var $nextE;

  /**
   * @param int $val
   * @return E
   */
  public function makeNextE($val = 0) {
    if ($this->nextE)
      throw new \Exception("next e already initialized");
    $this->nextE = new E;
    $this->nextE->a = $val;
    return $this->nextE;
  }

  /**
   * @return self
   */
  public function getThis() {
    return $this;
  }

  public function setA(int $a): self {
    $this->a = $a;
    return $this;
  }
}
