<?php include("header.php"); ?>
<div class="container-fluid d-flex justify-content-center align-items-center vh-100">
    <div class="row">
        <div class="col-12 text-center">
            <h2>Fazer login</h2>
            <form action="formLogin.php" method="POST" class="was-validated">
                <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control" id="emailUsuario" placeholder="Informe o seu email" name="emailUsuario" required>
                    <label for="emailUsuario" class="form-label">Email:</label>
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Por favor, informe um e-mail válido.</div>
                </div>

                <div class="form-floating mb-3 mt-3">
                    <input type="password" class="form-control" id="senhaUsuario" placeholder="Informe a senha" name="senhaUsuario" required>
                    <label for="senhaUsuario" class="form-label">Senha:</label>
                    <div class="valid-feedback">Válido.</div>
                    <div class="invalid-feedback">Por favor, insira sua senha.</div>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <br>
            <p>
                Ainda não possui cadastro?
                <a href="formUsuario.php" title="Cadastrar-se">Clique aqui!</a>
            </p>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>
