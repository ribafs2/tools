<?php

namespace Classes\Inheritance;

class Base {
    const C1 = 'BaseConst1';
    const C2 = 'BaseConst2';

    public static $f1 = 'BaseField1';
    private static $f2 = 'BaseField2';
    static public $f3 = 'BaseField3';
    static private $f4 = 'BaseField4';

    private static function test1() {

    }

    protected static function test2() {

    }

    static private function test3() {

    }

    static protected function test4() {

    }

    public static function const_test1() {
        echo self::C1."\n";
        echo static::C1."\n";
        echo parent::C1."\n";
    }

    public static function const_test2() {
        echo Child11::C1."\n";
        echo Child1::C1."\n";
        echo Base::C1."\n";
        echo "\n";
        echo self::C1."\n";
        echo static::C1."\n";
    }

    static public function const_test3() {
        echo self::C2."\n";
        echo static::C2."\n";
        echo parent::C2."\n";
    }

    static public function const_test4() {
        echo self::C2."\n";
        echo static::C2."\n";
    }
}
