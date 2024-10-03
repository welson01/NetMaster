<?php include("header.php") ?>

<?php
    // Conexão com o banco de dados
    //$conn = new mysqli("localhost", "root", "senha", "netmaster");

    include("conexaoBD.php");

    // Recebendo dados do formulário
    $nome = $_POST['nomeTreino'];
    $descricao = $_POST['descricaoTreino'];
    $dataInicio = $_POST['dtInicioTreino'];
    $dataFim = $_POST['dtFimTreino'];
    $nivelTreino = $_POST['nivelTreino'];
    $duracao = $_POST['duracaoTreino'];
    $objetivos = $_POST['objetivosTreino'];
    $urlTreino = $_POST['urlTreino'];

     //Início do bloco de validação da FOTO
     $diretorio    = "img/"; //Define para qual diretório do sistema as imagens serão movidas
     $fotoTreino  = $diretorio . basename($_FILES['fotoTreino']['name']); // img/paulinho.jpg
     $erroUpload   = false; //Variável criada para verificar se houve erro no upload da foto
     $tipoDaImagem = strtolower(pathinfo($fotoTreino, PATHINFO_EXTENSION)); //Pegar o tipo do arquivo

     //Verificar se o tamanho do arquivo é diferente de ZERO
     if($_FILES['fotoTreino']['size'] != 0){
         
         //Verificar se o tamanho do arquivo da foto é maior do que 5MB
         if($_FILES['fotoTreino']['size'] > 5000000){
             echo "<div class='alert alert-warning text-center'>A foto não pode ter <strong>TAMANHO</strong> maior do que 5MB!</div>";
             $erroUpload = true;
         }

         //Verificar o tipo do arquivo (pela extensão)
         if($tipoDaImagem != "jpg" && $tipoDaImagem != "jpeg" && $tipoDaImagem != "png" && $tipoDaImagem != "webp"){
             echo "<div class='alert alert-warning text-center'>A foto precisa estar nos formatos <strong>JPG, JPEG, PNG ou WEBP</strong>!</div>";
             $erroUpload = true;
         }

         //Verificar se o arquivo conseguiu ser movido para o diretório IMG
         if(!move_uploaded_file($_FILES['fotoTreino']['tmp_name'], $fotoTreino)){
             echo "<div class='alert alert-danger text-center'>Erro ao tentar <strong>MOVER A FOTO</strong> para o diretório de imagens!</div>";
             $erroUpload = true;
         }

     }
     else{
         echo "<div class='alert alert-warning text-center'>A <strong>foto</strong> é obrigatória!</div>";
         $erroUpload = true;
     }


    // Inserindo no banco de dados
    $sql = "INSERT INTO treinos (fotoTreino, nomeTreino, descricaoTreino, data_inicioTreino, data_fimTreino, nivelTreino, duracaoTreino, objetivosTreino, urlTreino)
            VALUES ('$fotoTreino', '$nome', '$descricao', '$dataInicio', '$dataFim', '$nivelTreino', '$duracao', '$objetivos', '$urlTreino')";

    if ($conn->query($sql) === TRUE) {
        echo "Treino cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>


<?php include("footer.php") ?>