<?php
define('FPDF_FONTPATH', 'font/'); // Correção no nome da constante FPDF_FONTPATH
require('fpdf.php');

//criando pagina pdf; configurando o título e depois resetando a fonte para arial 12
$pdf = new FPDF('L', 'cm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 1, 'Relatório de registros', 0, 1, 'C');
$pdf->SetFont('Arial', '', 12);

$pdf->Image('image/job.png', 1, 1, 4, 0);

// Cabeçalho da tabela
$pdf->Cell(5, 1, 'ID', 1, 0, 'C');
$pdf->Cell(8, 1, 'Nome', 1, 0, 'C');
$pdf->Cell(12, 1, 'Email', 1, 0, 'C');
$pdf->Ln(); // Nova linha para os dados

//aqui que a magica acontece
$sql = "SELECT * FROM aluno";
try {
    $pdo = new PDO("mysql:host=localhost;dbname=aula;charset=utf8", "root", "");
    $pdo->exec("set names utf8"); // Configura a codificação para UTF-8

    $stmt = $pdo->query($sql);
    while ($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $pdf->Cell(5, 1, $resultado['id'], 1, 0, 'C');
        $pdf->Cell(8, 1, iconv('UTF-8', 'ISO-8859-1', $resultado['nome']), 1, 0, 'C'); //'ISO-8859-1': O "ISO-8859-1" também é conhecido como "Latin-1" e é uma codificação que representa caracteres da língua latina, 
        $pdf->Cell(12, 1, $resultado['email'], 1, 0, 'C');
        $pdf->Ln(); // Nova linha para o próximo registro
    }
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

$pdf->Output();
