<?php
session_start();
if (isset($_SESSION['username'])) {
  echo 'Username: ' . $_SESSION['username'];
} else {
  header('Location: index.php');
}
