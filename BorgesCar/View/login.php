<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header('Location: home.php');
}

$errado = '';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'borgescar');

    $sql = "SELECT * FROM tb_usuario WHERE usu_username='$username' AND usu_password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['usu_codigo'];
        $_SESSION['user_name'] = $username;

        header('Location: principal.php');
    } else {
        $errado = '<p>Nome de usuário ou senha inválidos!</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/StyleLogin.css">
</head>

<body>
    <div class="page">
        <form action="login.php" method="post" class="formLogin">
            <div class="login d-flex" style="justify-content: center; justify-items: center;">
                <h1>Login<img src="../Imagens/logo p-2" width="32" height="32" style="text-align: right;"></h1>
            </div>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="usuario">Usuário</label>
            <input type="text" name="username" placeholder="Usuário" autofocus="true">
            <label for="password">Senha</label>
            <input type="password" name="password" placeholder="Senha">
            <?php echo $errado; ?>
            <a href="#">Esqueci minha senha</a>
            <input type="submit" name="login" value="Login" class="btn">
        </form>
        <div class="BGC">
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
            <h1>BORGES CAR BORGES CAR</h1>
        </div>
    </div>

</body>

</html>

<?php

/*
if (isset($_POST['usu_email']) && isset($_POST['usu_senha'])) {
    $email = htmlspecialchars($_POST['usu_email']);
    $senha = htmlspecialchars($_POST['usu_senha']);

    $conn = mysqli_connect('localhost', 'root', '', 'borgescar');


    $sql = "SELECT * FROM tb_usuario WHERE usu_email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "O nome de usuário já foi usado.";
        
    } else {
        $sql = "INSERT INTO tb_usuario (usu_email, usu_senha) VALUES ('$email', '$senha')";
        mysqli_query($conn, $sql);

        header('Location: principal.php');
    }
}
<form action="registro.php" method="post">
    <input type="text" name="usu_email" placeholder="usu_email">
    <input type="password" name="usu_senha" placeholder="usu_senha">
    <input type="submit" name="login" value="registrar">
</form>
*/

?>