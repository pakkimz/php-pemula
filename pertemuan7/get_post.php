<?php
$x = 18;

function tampilX() {
  global $x;
  echo $x;
}
tampilX();
echo "<br>";
echo $x;

// SUPERGLOBALS
// variable global milik PHP
// merupakan Array associative

var_dump($_GET);
var_dump($_POST);
/* var_dump($_SERVER); */
echo $_SERVER["SERVER_NAME"];
?>
