<?php
$erro = $_SESSION['error'] ?? null;
unset($_SESSION['error']);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card bg-light p-5 shadow-mt-5">
                <h3>Login</h3>
                <hr>

                <form action="?rota=loginSubmit" method="post">
                    <div class="mb-3">
                        <label for="textUsuario" class="form-label">Usuario</label>
                        <input type="text" name="textUsuario" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="textSenha" class="form-label">Senha</label>
                        <input type="text" name="textSenha" class="form-control" required>
                    </div>
                    <div>
                        <input type="submit" value="Entrar" class="btn btn-secondary w-100">
                    </div>
                </form>
                <?php if(!empty($erro)): ?>
                    <div class="alert alert-danger mt-3 p-2 text-center">
                        <?= $erro ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


