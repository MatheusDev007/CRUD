<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" href="image/create.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="display-5" class="center-text"> Cadastro </h1><br />
                <form method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome"></br>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu email">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn_gravar">Salvar</button>
                    <button type="button" class="btn btn-primary" onclick="window.location.href='index.php'" id="btn_home">Home</button>
                </form>
                <div id="resposta"></div>
                <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
                <script src="js/main.js"></script>
            </div>
        </div>
    </div>
</body>

</html>