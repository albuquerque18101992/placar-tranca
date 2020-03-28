<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Link Font Awesome-->
    <script src="https://kit.fontawesome.com/e7b4566ef7.js" crossorigin="anonymous"></script>

    <title>Tranca</title>

    <style>
        * {
            background-color: #000E37;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <h1 class="text-center">PLACAR</h1>
        <form method="POST" action="processar_soma.php">
            <div class="row">
                <div class="col-md-4">
                    <label for="lastName"><i class="fas fa-user-friends"></i> Nome da Dupla 1</label>
                    <input type="text" name="jogador_um" class="form-control mb-3 btn-sm" placeholder="1" value="" autocomplete="off" required>
                    <label for=""></label>
                </div>
                <div class="col-md-4">
                    <label for="lastName"><i class="fas fa-user-friends"></i> Nome da Dupla 1</label>
                    <input type="text" name="jogador_dois" class="form-control mb-3 btn-sm" placeholder="2" value="" autocomplete="off" required>
                </div>
                <div class="col-md-4">
                    <label for="lastName"><i class="fas fa-caret-square-right"></i> Total Rodada</label>
                    <input type="text" name="total_dupla_um" class="form-control mb-3 btn-sm" maxlength="4" placeholder="2" value="" autocomplete="off" required>
                </div>
                <div class="col-md-12 mb-3">
                    <button type="button" class="btn btn-success btn-sm btn-block">Clicar para salvar nomes</button>
                </div>
                <label for=""></label>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="lastName"><i class="fas fa-user-friends"></i> Nome da Dupla 2</label>
                    <input type="text" name="jogador_tres" class="form-control mb-3 btn-sm" placeholder="3" value="" autocomplete="off" required>
                    <label for=""></label>
                </div>
                <div class="col-md-4">
                    <label for="lastName"><i class="fas fa-user-friends"></i> Nome da Dupla 2</label>
                    <input type="text" name="jogador_quatro" class="form-control mb-3 btn-sm" placeholder="4" value="" autocomplete="off" required>
                    <label for=""></label>
                </div>
                <div class="col-md-4">
                    <label for="lastName"><i class="fas fa-caret-square-right"></i> Total Rodada</label>
                    <input type="text" name="total_dupla_dois" class="form-control mb-3 btn-sm" maxlength="4" placeholder="2" value="" autocomplete="off" required>
                </div>
                <div class="col-md-12 mb-5">
                    <button type="button" class="btn btn-success btn-sm btn-block">Clicar para salvar nomes</button>
                </div>
            </div>
            <button class="btn btn-danger btn-sm btn-block mb-4" type="submit">Somar Tudo = TOTAL</button>
        </form>



        <?php
        include_once('conexao.php');
        $result_jogadores = "SELECT * FROM tb_jogadores";
        $resultado_jogadores = mysqli_query($conn, $result_jogadores);

        if (($resultado_jogadores) and ($resultado_jogadores->num_rows != 0)) {
        ?>

            <table class="table table-hover table-sm text-center table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th class="bg-info">Jogador 1</th>
                        <th class="bg-info">Jogador 2</th>
                        <th class="bg-danger">Total da Dupla 1</th>
                        <th class="bg-info">Jogador 3</th>
                        <th class="bg-info">Jogador 4</th>
                        <th class="bg-danger">Total da Dupla 2</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row_usuario = mysqli_fetch_assoc($resultado_jogadores)) {
                    ?>
                        <tr>
                            <td class="bg-info" ><?php echo $row_usuario['jogador_um']; ?></td>
                            <td class="bg-info" ><?php echo $row_usuario['jogador_dois']; ?></td>
                            <td class="bg-danger" ><?php echo $row_usuario['total_dupla_um']; ?></td>
                            <td class="bg-info" ><?php echo $row_usuario['jogador_tres']; ?></td>
                            <td class="bg-info" ><?php echo $row_usuario['jogador_quatro']; ?></td>
                            <td class="bg-danger" ><?php echo $row_usuario['total_dupla_dois']; ?></td>

                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        <?php
        } else {
            echo "<div class='alert alert-danger' role='alert'>Nenhum dado sobre partida encontrado!</div>";
        }
        ?>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>