@ok
<?php
$restore_link = 'blabla'; 

/**
 * @param string $x
 */
function f($x) {
  switch ($x) {
  case 'full':
    $restore_link = '������� ����� 1';
    break;
  case 'wkview': 
    $restore_link = '������� ����� 2';
    break;
  default:
    $restore_link = '��������� �����';
  }
  var_dump ($restore_link);
}
f ("f");
f ("w");
f ("full");
f ("wkview");
f ("");
f ("sgfd");


/**
 * @param int $x
 */
function g($x) {
  switch ($x) {
  default:
  case 'test':
    var_dump (123);
  }
}
g (123);
