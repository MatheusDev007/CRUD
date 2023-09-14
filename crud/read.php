<?php

include 'conecta.php';

session_start();
header("Content-Type: text/html; charset=ISO-8859-1");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Alunos</title>
    <link rel="icon" href="image/list.ico" type="image/x-icon">

    <!-- Inclua o Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/css/bootstrap.min.css" integrity="sha512-Z/def5z5u2aR89OuzYcxmDJ0Bnd5V1cKqBEbvLOiUNWdg9PQeXVvXLI90SE4QOHGlfLqUnDNVAYyZi8UwUTmWQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container mt-5">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM aluno";
                $exec = $pdo->query($sql);

                while ($reg = $exec->fetch()) {
                    echo "<tr>";
                    echo "<td>" . $reg["id"] . "</td>";
                    echo "<td>" . iconv('UTF-8', 'ISO-8859-1', $reg['nome']) . "</td>";
                    echo "<td>" . $reg["email"] . "</td>";
                    echo "<td>";
                    echo '<a href="formUpdate.php?id=' . $reg["id"] . '" class="btn btn-primary btn-sm">Atualizar Dados</a> ';
                    echo '<a href="delete.php?id=' . $reg["id"] . '" class="btn btn-danger btn-sm">Excluir</a>';
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="gerarPDF.php" target="_blank" class="btn btn-success">GERAR PDF</a>
        <a href="index.php" class="btn btn-success">PÁGINA INICIAL</a>
    </div>

    <!-- Inclua o jQuery e o Bootstrap JS no final do corpo para melhor desempenho -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>
</body>

</html>