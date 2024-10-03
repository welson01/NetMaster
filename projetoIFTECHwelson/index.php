<?php include("header.php"); ?>

<div class="container-fluid">

<?php
    //Inclui o arquivo de conexão com o Banco de Dados
    include("conexaoBD.php");

    $listarTreinos = "SELECT * FROM treinos ORDER BY data_inicioTreino DESC"; //Seleciona todos os campos da tabela Treino

    $res = mysqli_query($conn, $listarTreinos); //Executa o comando de listagem
    $totalTreinos = mysqli_num_rows($res); //Função para retornar a quantidade de registros da tabela

    if($totalTreinos > 0){
        $nomePagina = $_SERVER['SCRIPT_NAME'];
        $info_arquivo = pathinfo($nomePagina);
        $pagina = $info_arquivo['filename'];

        if($totalTreinos == 1){
            echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalTreinos</strong> Treino!</h4></div>";
        } else {
            echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalTreinos</strong> Treinos!</h4></div>";
        }

        echo "<hr><div class='row'>";

        // Varre a tabela em busca de registros e armazena em um array
        while($registro = mysqli_fetch_assoc($res)){
            $foto = $registro["fotoTreino"];
            $nomeTreino = $registro["nomeTreino"];
            $descricaoTreino = $registro["descricaoTreino"];
            $dataInicio = $registro["data_inicioTreino"];
            $dataFim = $registro["data_fimTreino"];

            //Cria uma linha da tabela com os registros encontrados
            echo "
            <div class='col-4' style='margin-bottom:30px;'>
                <div class='card' style='width:100%; height:100%; border-radius: 15px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);'>
                    <div class='container mt-3 text-center'>
                        <img src='$foto' width='150' title='Foto de $nomeTreino' style='border-radius: 15px; transition: transform 0.2s;'>
                    </div>
                    <div style='position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; background: #000;'>
                            <iframe src='https://www.youtube.com/embed/paBHsq0lBcM?si=bVFBfISXNmpLiHAf' title='YouTube video player' frameborder='0' style='position: absolute; top: 0; left: 0; width: 100%; height: 100%;' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                    </div>
                    <div class='card-body text-center'>
                        <h4 class='card-title' style='color: #007BFF;'>$nomeTreino</h4>
                        <h5 class='card-title' style='color: #6c757d;'>Data início: $dataInicio</h5>
                        <h5 class='card-title' style='color: #6c757d;'>Data fim: $dataFim</h5>
                        <p class='card-text' style='white-space: normal;'>$descricaoTreino</p>
                    </div>
                </div>
            </div>";
        }

        echo "</div>";
    } else {
        echo "<div class='alert alert-warning text-center'>Não há Treinos registrados! <i class='bi bi-emoji-frown'></i></div>";
    }
?>

<?php include("footer.php"); ?>
