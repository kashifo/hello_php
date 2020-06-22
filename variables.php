<!DOCTYPE html>
<html>
<body>

<?php
$a=5;
$b=10;
$c = $a + $b;

echo "a=" .$a .", b=" .$b;

function printScope(){
  global $c;
  echo "c = " . $c;

  $GLOBALS['y'] = 0;
}

printScope();

function staticDemo(){
  static $x = 1;
  echo $x;
  $x++;
}

staticDemo();
staticDemo();
staticDemo();


?>

</body>
</html>
