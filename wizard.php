<?php
// function that shows all ASCII characters
// for ($x = 32; $x < 255; $x++) {
//   echo $x . " - " . chr($x);
// }
session_start();
$_SESSION['id'] = session_id();
$_SESSION['name'] = "Boolean-user";
$_SESSION['pwd'] = '';


//set default values for form inputs
$length = 7;
$repeat = false;
$letters = true;
$numbers = false;
$special = false;

if (isset($_GET['pwd-length'])) {
  $length = intval($_GET['pwd-length']);
} else {
  $letters = false;
}

if (isset($_GET['repeat-char'])) {
  $repeat = true;
} else {
  $letters = false;
}

if (!isset($_GET['letters'])) {
  $letters = false;
} else {
  $letters = true;
}

if (isset($_GET['numbers'])) {
  $numbers = $_GET['numbers'];
} else {
  $numbers = false;
}

if (isset($_GET['special'])) {
  $special = $_GET['special'];
} else {
  $special = false;
}

if ($_GET) {
  foreach ($_GET as $key => $value) {
    switch ($key) {
      case 'pwd-length':
        $length = intval($value);
        break;
      case 'repeat-char':
        $repeat = true;
        break;
      case 'letters':
        $letters = true;
        break;
      case 'numbers':
        $numbers = true;
        break;
      case 'special':
        $special = true;
        break;
    }
  }
}
