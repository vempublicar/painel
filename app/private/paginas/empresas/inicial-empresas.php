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
}else{
    $empresa['cnpj'] = "";
    $empresa['empresa'] = "";
    $empresa['cep'] = "";
    $empresa['faturamento'] = "";
    $empresa['cidade'] = "";
    $empresa['estado'] = "";
    $empresa['endereco'] = "";
    $empresa['numero'] = "";
    $empresa['plano'] = "";
    $empresa['plano_escolhido'] = "";
    $empresa['webhook'] = "";
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

<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCadastro" aria-labelledby="offcanvasCadastroLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasCadastroLabel">Cadastro de Empresa</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="app/functions/push/adicionar_empresa.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nomeEmpresa" class="form-label">Nome da Empresa</label>
                <input type="text" class="form-control" id="nomeEmpresa" value="<?= $empresa['empresa'] ?>" name="nome_empresa" required>
            </div>
            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" value="<?= $empresa['cnpj'] ?>" name="cnpj" required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" value="<?= $empresa['cep'] ?>" name="cep" required>
            </div>
            <div class="mb-3">
                <label for="segmento" class="form-label">Vende ao Segmento</label>
                <select class="form-control" id="segmento" name="segmento" required>
                    <option value="">Selecione um Segmento</option>
                    <option value="B2C">B2C</option>
                    <option value="B2B">B2B</option>
                    <option value="Ambos">Ambos</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="setor-select" class="form-label">Setor</label>
                <select class="form-select" id="setor-select" name="setor" required></select>
            </div>
            <div class="mb-3">
                <label for="atividade-select" class="form-label">Atividade</label>
                <select class="form-select" id="atividade-select"  name="atividade" required></select>
            </div>
            <div class="mb-3">
                <label for="emailComercial" class="form-label">Email Comercial</label>
                <input type="email" class="form-control" id="emailComercial" name="email_comercial" required>
            </div>
            <div class="mb-3">
                <label for="telefoneComercial" class="form-label">Telefone Comercial</label>
                <input type="tel" class="form-control" id="telefoneComercial"  name="telefone_comercial" required>
            </div>
            <div class="mb-3">
                <label for="logotipo" class="form-label">Logotipo</label>
                <input type="file" class="form-control" id="logotipo" name="logotipo" accept="image/*" onchange="previewLogotipo(this);">
                <img id="logotipoPreview" src="" alt="Logotipo Preview" style="max-width: 100%; margin-top: 10px; display: none;">
            </div>
            <div class="mb-3">
                <label for="senhaInterna" class="form-label">Senha Interna</label>
                <input type="password" class="form-control" id="senhaInterna" name="senha_interna" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="compartilhaDados" name="compartilha_dados">
                <label class="form-check-label" for="compartilhaDados">Compartilhar Dados?</label>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Empresa</button>
        </form>
    </div>
</div>

<script>
function previewLogotipo(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            document.getElementById('logotipoPreview').style.display = 'block';
            document.getElementById('logotipoPreview').src = e.target.result;
        };
        
        reader.readAsDataURL(input.files[0]);
    }
}
document.addEventListener('DOMContentLoaded', function() {
    const setorSelect = document.getElementById('setor-select');
    const atividadeSelect = document.getElementById('atividade-select');

    fetch('vendor/json/atividades.json')
        .then(response => response.json())
        .then(data => {
            data.forEach(setor => {
                let option = document.createElement('option');
                option.value = setor.nome;
                option.textContent = setor.nome;
                option.dataset.atividades = JSON.stringify(setor.atividades);
                setorSelect.appendChild(option);
            });
        });

    setorSelect.addEventListener('change', function() {
        atividadeSelect.innerHTML = '';
        let atividades = JSON.parse(setorSelect.selectedOptions[0].dataset.atividades);
        atividades.forEach(atividade => {
            let option = document.createElement('option');
            option.value = atividade;
            option.textContent = atividade;
            atividadeSelect.appendChild(option);
        });
    });
});

</script>

