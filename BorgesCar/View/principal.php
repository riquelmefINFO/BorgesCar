<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>

    <?php
    include "../Controller/Auth.php"; // Perform session validation 
    include "../componentes/navbar.php";
    ?>

    <div class="container mw-100">
        <div class="row" style="height: 100vh;">
            <?php include "../componentes/btn_barra.php"; ?>
            <div class="col-sm-10 m-0 p-1 bg-light" id="myGroup">
                <div class="container shadow p-3 my-5 bg-white rounded w-auto">

                    <h1 style="font-size: 300%; text-align: center;" class="font-weight-bold">
                        Gráfico de Vendas
                    </h1>

                    <section class="home-section">
                        <div class="text"></div>
                        <canvas id="graphs"></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
                        <script>
                            var ctx = document.getElementById("graphs").getContext('2d');
                            var chart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Decembro'],
                                    datasets: [{
                                        label: 'Vendas',
                                        data: [60, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120]
                                    }]
                                },
                                options: {
                                    title: {
                                        text: 'Vendas Mensais'
                                    }
                                }
                            });
                        </script>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php include "../componentes/script.php" ?>

</body>

</html>