<?php 
$minhas_empresas = $_SESSION['minhas_empresas'];
if(!empty($minhas_empresas)) {
    $empresa['cnpj'] = $_SESSION['cnpj_cpf'];
    $empresa['empresa'] = $_SESSION['nome_empresa'];
    $empresa['cep'] = $_SESSION['cep'];
    $empresa['faturamento'] = $_SESSION['faturamento'];
    $empresa['cidade'] = $_SESSION['cidade'];
    $empresa['estado'] = $_SESSION['estado'];
    $empresa['endereco'] = $_SESSION['endereco'];
    $empresa['numero'] = $_SESSION['numero'];
    $empresa['plano'] = $_SESSION['plano'];
    $empresa['plano_escolhido'] = $_SESSION['plano_escolhido'];
    $empresa['webhook'] = $_SESSION['webhook'];
}
?>

<div class="page-body">
    <div class="container-xl">
        <div class="col-sm-12 p-2 ">
            <div class="row">
                <div class="card card-sponsor col-md-7 ">
                    <div class="row m-auto">
                        <div class="col-sm-5">
                            <img src="vendor/images/relatorio/magica.png" alt="">
                        </div>
                        <div class="col m-auto">
                            <h1 class="text-start m-auto"><b class="text-info">Update</b><br> Faça o update do seu plano e gerencie multiplas empresas.</h1>
                        </div>
                    </div>
                </div>
                <div class="card col-md-5">
                    <div class="card-body">
                        <?php if (!empty($minhas_empresas)): ?>
                            <ul class="list-group">
                                <?php foreach ($minhas_empresas as $empresa): ?>
                                    <li class="list-group-item">
                                        <?= $empresa['empresa']; ?>
                                        <a href="/painel?empresa=<?= $empresa['cnpj']; ?>" class="btn btn-primary float-end">Abrir Painel</a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                            <button type="button" class="btn btn-success mt-3" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCadastro" aria-controls="offcanvasCadastro">Adicionar nova empresa</button>
                        <?php else: ?>
                            <p>Nenhuma empresa cadastrada.</p>
                            <button type="button" class="btn btn-success" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCadastro" aria-controls="offcanvasCadastro">Adicionar primeira empresa</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Offcanvas Formulário -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCadastro" aria-labelledby="offcanvasCadastroLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCadastroLabel">Cadastro de Empresa</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="/cadastrar_empresa" method="post">
            <!-- Campos do formulário para cadastrar uma nova empresa -->
            <div class="mb-3">
                <label for="empresaNome" class="form-label">Nome da Empresa</label>
                <input type="text" class="form-control" id="empresaNome" name="empresaNome" required>
            </div>
            <!-- Adicionar mais campos conforme necessário -->
            <button type="submit" class="btn btn-primary">Salvar Empresa</button>
        </form>
    </div>
</div>
