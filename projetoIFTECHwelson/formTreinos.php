<?php include("header.php"); ?>
    
    <h3 class="text-center">Cadastro de Treino</h3>
    <p class="text-center text-danger">*Campo Obrigatório</p>
    <br>

    <form action="cadastraTreino.php" method="POST" enctype="multipart/form-data" class="container-fluid">

        <div class="form-floating mb-3">
            <select class="form-select" name="nivelTreino" required>
                <option value="Basico">Básico</option>
                <option value="Intermediario">Intermediário</option>
                <option value="Avancado">Avançado</option>
            </select>
            <label for="nivelTreino">*Nível do Treino:</label>
        </div>
        <!-- Campo de upload de foto -->
        <div class="form-group mb-3">
            <label for="fotoTreino" class="form-label">Foto:</label>
            <input type="file" class="form-control" name="fotoTreino">
        </div>

        <div class="form-group mb-3">
            <label for="nomeTreino" class="form-label">nome do treino:</label>
            <input type="text" class="form-control" name="nomeTreino">
        </div>

        <div class="form-group mb-3">
            <label for="urlTreino" class="form-label">videoaula:</label>
            <input type="text" class="form-control" name="urlTreino">
        </div>

        <div class="form-floating mb-3">
            <input type="time" class="form-control" placeholder="Informe a duração do treino" name="duracaoTreino" required>
            <label for="duracaoTreino">*Duração (Horas:Minutos):</label>
        </div> 

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Informe os objetivos do treino" name="objetivosTreino" id="objetivosTreino" style="height: 100px;" required></textarea>
            <label for="objetivosTreino">*Objetivos do Treino:</label>
        </div>

        <!-- Campo Data de Início -->
        <div class="form-floating mb-3">
            <input type="date" class="form-control" placeholder="Informe a data de início" name="dtInicioTreino" required>
            <label for="dtInicioTreino" class="form-label">*Data de Início:</label>
        </div>

        <!-- Campo Data de Fim -->
        <div class="form-floating mb-3">
            <input type="date" class="form-control" placeholder="Informe a data de término" name="dtFimTreino" required>
            <label for="dtFimTreino" class="form-label">*Data de Término:</label>
        </div>

        <!-- Campo Descrição -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Informe a descrição do campeonato" name="descricaoTreino" id="descricaoTreino" style="height: 100px;" required>
            <label for="descricaoTreino" class="form-label">*Descrição:</label>
        </div>
        <!-- Botão de Cadastro -->
        <div class="d-flex justify-content-center" style="margin-top:30px; margin-bottom:30px;">
            <button type="submit" class="btn btn-outline-success">Cadastrar</button>
        </div>
    </form>



<?php include("footer.php"); ?>
