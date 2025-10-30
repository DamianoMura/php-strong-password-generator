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
        $repeat = $value;
        break;
      case 'letters':
        $letters = $value;
        break;
      case 'numbers':
        $numbers = $value;
        break;
      case 'special':
        $special = $value;
        break;
    }
  }
  $_SESSION['pwd'] = generate($length, $repeat, $letters, $numbers, $special);
  header('Location: show.php');
}


function generate($length, $repeat, $letters, $numbers, $special)
{
  $password = '';
  $characters = '';

  if ($letters) {
    $characters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  if ($numbers) {
    $characters .= '0123456789';
  }
  if ($special) {
    $characters .= '!@#$%^&*()_+-=[]{}|;:,.<>?';
  }

  $charactersLength = strlen($characters);

  if ($charactersLength == 0) {
    return 'Please select at least one character type.';
  }

  while (strlen($password) < $length) {
    $randomChar = $characters[rand(0, $charactersLength - 1)];
    if ($repeat || strpos($password, $randomChar) === false) {
      $password .= $randomChar;
    }
  }

  return $password;
}
