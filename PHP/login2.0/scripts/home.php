<div class="container mt-5 berder rounded-3 p-4 shadow-sm bg-light">
    <div class="row align-items-center">
        <div class="col">
            <h4>HOME</h4>
        </div>
        <div class="col text-end">
            <span><strong><?= $_SESSION['usuario']->usuario ?></strong></span>
            <span class="mx-2">|</span>
            <a href="?rota=logout">Sair</a>
        </div>
    </div>
</div>