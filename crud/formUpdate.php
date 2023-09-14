<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Dados</title>
    <link rel="icon" href="image/update.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="display-5" class="center-text"> Atualizar registros </h1><br />
                <form method="post">
                    <?php
                    include 'conecta.php';
                    $id = $_GET["id"];
                    $sql = "SELECT * FROM aluno where id=\"$id\"";
                    $exec = $pdo->query($sql);
                    $regAtualiza = $exec->fetch();
                    ?>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $regAtualiza["nome"] ?>" />
                    </div><br />

                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo $regAtualiza["email"] ?>" />
                    </div><br />
                    <input type="hidden" id="id" name="id" value="<?php echo $regAtualiza["id"] ?>" /> <br />
                    <input type="button" class="btn btn-primary" id="btn_atualizar" value="Atualizar">
                </form>
                <div id="resposta"></div>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                <script src="js/main.js"></script>

</body>

</html>