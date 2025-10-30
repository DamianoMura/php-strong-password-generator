<?php
session_start();
if (isset($_SESSION['name']) && isset($_SESSION['pwd']) && $_SESSION['pwd'] != '') {
  echo 'Username: ' . $_SESSION['name'];
  echo '<br>';
  echo 'generated Password: ' . $_SESSION['pwd'];
} else {
  header('Location: index.php');
}
