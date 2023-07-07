<?php
session_start();

if (isset($_SESSION['user_id'])) {
  //principal
  header("location: principal.php");
} else if (isset($_SESSION['user_id'])) {
  //cliente
  header("location: cliente.php");
} else if (isset($_SESSION['user_id'])) {
  //funcionario
  header("location: funcionario.php");
} else if (isset($_SESSION['user_id'])) {
  //veiculo
  header("location: veiculo.php");
} else if (isset($_SESSION['user_id'])) {
  //venda
  header("location: venda.php");
} else if (isset($_SESSION['user_id'])) {
  //sobre
  header("location: sobre.php");
} else {
  //login
  header("location: login.php");
}

?>