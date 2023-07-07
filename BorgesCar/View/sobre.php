<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/StyleSobre.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <?php
    include "../Controller/Auth.php"; // Perform session validation
    include "../componentes/navbar.php"
        ?>

    <div class="container mw-100">
        <div class="row" style="height: 100vh;">

            <?php
            include "../componentes/btn_barra.php"
                ?>

            <div class="col-sm-10 m-0 p-1 bg-light" id="myGroup">
                <div class="container">
                    <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                        <img src="../Imagens/sobre b.png" width="4%">
                        Sobre
                    </h1>
                    <div class="container shadow p-3 mb-5 bg-white rounded w-auto">

                        <div class="container">
                            <h1>Nossa equipe</h1>
                            <div class="wrapper">

                                <!--Vendedor2-->
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/riquelme.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Riquelme Fernandes</h3>
                                        <p>Full Stack</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Vendedor3-->
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/arryany.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Aryanny Almeida</h3>
                                        <p>designer</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/eryvan.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Eryvan de Almeida</h3>
                                        <p>Front-end</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Segunda Fileira-->

                            <div class="wrapper">
                                <!--Vendedor2-->
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/hansel.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Hansel Ferreira</h3>
                                        <p>Front-end</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!--Vendedor3-->
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/humberto.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Humberto Paulino</h3>
                                        <p>Scrum Master</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/leiliane.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Leiliane Barbosa</h3>
                                        <p>Back-Log</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Terceira Fileira-->

                            <div class="wrapper">
                                <!--Vendedor2-->
                                <div class="card">
                                    <div class="profile-img">
                                        <img src="../Imagens/miguel.jfif">
                                    </div>
                                    <div class="content">
                                        <h3>Miguel Pinheiro</h3>
                                        <p>designer</p>
                                        <div class="social-media">
                                            <a href="#" class="link"><i class="fa-brands fa-github"></i></a>
                                            <a href="#" class="link"><i class="fa-brands fa-linkedin"></i></a>
                                            <a href="#" class="link"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../componentes/script.php" ?>

</body>

</html>