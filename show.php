<?php
session_start();
if (isset($_SESSION['username'])) {
  echo 'Username: ' . $_SESSION['username'];
  echo '<br>';
  echo 'Password: ' . $_SESSION['pwd'];
} else {
  header('Location: index.php');
}
