<?php
session_start();
session_destroy();
if (isset($_SESSION['username'])) {
  echo "Welcome, " . $_SESSION['username'];
  echo "<br><a href='logout.php'>Logout</a>";
} else {
  header('Location: inicio.php');
}
?>