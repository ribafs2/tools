<?php

namespace Classes;

class DerivedClassWithMagic extends BaseClassWithMagic {
    /**
     * @return int
     */
    static public function do_magic2() {
      return self::demo("123");
    }
}

