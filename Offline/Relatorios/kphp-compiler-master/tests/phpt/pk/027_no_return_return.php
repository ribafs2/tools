@kphp_should_fail
/no_return/
<?php

/**
 * @kphp-no-return
 */ 
function f() {
  if(1) {
    exit(1);
  }
}

/**
 * @return int
 */
function g() {
  if (1) {
    return 5;
  }
  f();
  return "5";
}

g();
