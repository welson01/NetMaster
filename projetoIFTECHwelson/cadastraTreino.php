<?php include("header.php") ?>

<?php
    // Conexão com o banco de dados
    //$conn = new mysqli("localhost", "root", "senha", "netmaster");

    include("conexaoBD.php");

    // Recebendo dados do formulário
    $foto = $POST['fotoTreino'];
    $nome = $_POST['nomeTreino'];
    $descricao = $_POST['descricaoTreino'];
    $dataInicio = $_POST['dtInicioTreino'];
    $dataFim = $_POST['dtFimTreino'];
    $nivelTreino = $_POST['nivelTreino'];
    $duracao = $_POST['duracaoTreino'];
    $objetivos = $_POST['objetivosTreino'];
    $urlTreino = $_POST['urlTreino'];

    // Inserindo no banco de dados
    $sql = "INSERT INTO treinos (fotoTreino, nomeTreino, descricaoTreino, data_inicioTreino, data_fimTreino, nivelTreino, duracaoTreino, objetivosTreino, urlTreino)
            VALUES ('$foto', '$nome', '$descricao', '$dataInicio', '$dataFim', '$nivelTreino', '$duracao', '$objetivos', '$urlTreino')";

    if ($conn->query($sql) === TRUE) {
        echo "Treino cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>


<?php include("footer.php") ?>