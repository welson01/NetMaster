<?php include("header.php"); ?>

<div class="container-fluid">


<?php
    //Inclui o arquivo de conexão com o Banco de Dados
    include("conexaoBD.php");

    $listarTreinos = "SELECT * FROM treinos ORDER BY data_inicioTreino DESC"; //Seleciona todos os campos da tabela Treino


    $res = mysqli_query($conn, $listarTreinos); //Executa o comando de listagem
    $totalTreinos = mysqli_num_rows($res); //Função para retornar a quantidade de registros da tabela

    if($totalTreinos > 0){
        $nomePagina = $_SERVER['SCRIPT_NAME']; // ou $_SERVER['PHP_SELF']
        $info_arquivo = pathinfo($nomePagina);
        $pagina = $info_arquivo['filename'];

        if($totalTreinos == 1){
            echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalTreinos</strong> Treinos !</h4></div>";
        }
        else{
            echo "<div class='alert alert-success text-center'><h4>Há <strong>$totalTreinos</strong> Treinos !</h4></div>";
        }

        echo "
        <hr>";
            
        //Monta a tabela para exibir os registros encontrados
        echo "
        <div class='row'>";

            // Varre a tabela em busca de registros e armazena em um array
            //Enquanto houverem dados na linha da tabela, atribui o valor atual do array a uma variável
            while($registro = mysqli_fetch_assoc($res)){
        
                $foto = $registro["fotoTreino"];
                $nomeTreino    = $registro["nomeTreino"];
                $descricaoTreino = $registro["descricaoTreino"];
                $dataInicio     = $registro["data_inicioTreino"];
                $dataFim  = $registro["data_fimTreino"];
                
                
                //Cria uma linha da tabela com os registros encontrados
                echo "
                <div class='col-4' style='margin-bottom:30px;'>
                    <div class='card' style='width:100%; height:100%;'>
            
                        <div class='card-body text-center'>
                            <h4 class='card-title'>$nomeTreino</h4>
                            <h4 class='card-title'>Data início: $dataInicio</h4>
                            <h4 class='card-title'>Data fim: $dataFim</h4>                            
                            <p class='card-text' style='white-space: normal;'>$descricaoTreino</p>
                        </div>
                    </div>
                </div>
                ";
            }
        echo "</div>";
    }
    else{
        echo "<div class='alert alert-warning text-center'>Não há Treinos à registrados! <i class='bi bi-emoji-frown'></i></div>";
    }
      
?>

<?php include("footer.php"); ?>
                