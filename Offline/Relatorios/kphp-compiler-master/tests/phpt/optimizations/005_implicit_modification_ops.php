@ok
<?php

/**
 * @param mixed $x
 */
function non_const_foreach($x) {
    foreach ([1] as $x) {}
}

/**
 * @param mixed $x
 */
function non_const_foreach_key($x) {
    foreach ([1] as $x => $_) {}
}

/**
 * @param mixed $x
 */
function non_const_foreach_value($x) {
    foreach ([1] as $_ => $x) {}
}

/**
 * @param mixed $xs
 */
function non_const_foreach_ref($xs) {
    foreach ($xs as &$x) { $x = 20; }
}

/**
 * @param mixed $x
 */
function non_const_list($x) {
    if (0) {
        list(, $x) = [1, 2];
    } else {
        list(, $x) = ["1", "2"];
    }
    var_dump($x);
}

/**
 * @param mixed $x
 */
function const_and_ref(&$x) {
    var_dump($x);
}

/**
 * @param mixed $xs
 */
function unset_non_const($xs) {
    unset($xs[0]);
}

/**
 * @param mixed $x
 */
function const_var_dump($x) {
    var_dump($x);
}

$x = true ? 10 : "asdf";
non_const_foreach($x);
non_const_foreach_key($x);
non_const_foreach_value($x);

$xs = true ? [1, 2] : "asfd";
non_const_foreach_ref($xs);

non_const_list($x);
const_var_dump($x);
const_and_ref($x);
unset_non_const($xs);
