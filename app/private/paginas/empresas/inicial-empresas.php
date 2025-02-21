<?php 
include "app/functions/data/dados.php";
carregarEmpresasDoUsuario();

$minhas_empresas = $_SESSION['minhas_empresas'];
print_r($minhas_empresas);

if(empty($minhas_empresas)) {
    $pre['cnpj'] = $_SESSION['cnpj_cpf'];
    $pre['empresa'] = $_SESSION['nome_empresa'];
    $pre['cep'] = $_SESSION['cep'];
}else{
    $pre['cnpj'] = "";
    $pre['empresa'] = "";
    $pre['cep'] = "";
}
?>

<div class="page-body">
    <div class="container-xl">
        <div class="col-sm-12 p-2 ">
            <div class="row">
                <div class="card card-sponsor col-md-4 ">
                    <div class="row m-auto">
                        <div class="col m-auto">
                            <h1 class="text-start m-auto"><b class="text-info">Update</b><br> Faça o update do seu plano e gerencie multiplas empresas.</h1>
                        </div>
                    </div>
                </div>
                <div class="card col-md-8">
                    <div class="card-body">
                        <?php if (!empty($minhas_empresas)): ?>
                            <ul class="list-group">
                                <?php foreach ($minhas_empresas as $id => $empresa): ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="image-logo">
                                            <img src="app/empresas/logotipos/<?= $empresa['logotipo']; ?>" alt="Logo" style="height: 50px; width: auto;">
                                        </div>
                                        <div class="info">
                                            <strong><?= $empresa['nome_empresa']; ?></strong>
                                            <div class="text-muted"><?= ucfirst($empresa['cargo']); ?></div>
                                        </div>
                                        <a href="/painel?empresa=<?= $empresa['cnpj']; ?>" class="btn btn-primary">Abrir Painel</a>
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
                <input type="text" class="form-control" id="nomeEmpresa" value="<?= $pre['empresa'] ?>" name="nome_empresa" required>
            </div>
            <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control" id="cnpj" value="<?= $pre['cnpj'] ?>" name="cnpj" required>
            </div>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" value="<?= $pre['cep'] ?>" name="cep" required>
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
let setoresEAtividades = null; // Variável para armazenar os dados JSON

// Função para carregar os setores e preencher o select
function carregarSetores(callback) {
    // Se os dados já foram carregados, apenas preencha o select de setores e execute o callback
    if (setoresEAtividades) {
        preencherSelectSetor(callback);
        return;
    }

    // Caminho para o arquivo JSON
    const jsonFile = 'vendor/json/atividades.json';

    // Requisição AJAX para carregar o JSON
    fetch(jsonFile)
        .then(response => response.json())
        .then(data => {
            setoresEAtividades = data;
            preencherSelectSetor(callback);
        })
        .catch(error => console.error('Erro ao carregar setores e atividades:', error));
}

function preencherSelectSetor(callback) {
    const selectSetor = document.getElementById('setor-select');
    selectSetor.innerHTML = '<option value="">Selecione um setor</option>'; // Limpa e preenche a opção inicial

    // Preenche o select com os setores do JSON
    setoresEAtividades.forEach(setor => {
        const option = document.createElement('option');
        option.value = setor.nome;
        option.text = setor.nome;
        selectSetor.appendChild(option);

        // Define as atividades do setor como atributo do option
        option.setAttribute('data-atividades', JSON.stringify(setor.atividades));
    });

    if (typeof callback === 'function') callback();
}

function carregarAtividades(setorSelecionado) {
    const selectAtividade = document.getElementById('atividade-select');
    selectAtividade.innerHTML = '<option value="">Selecione uma atividade</option>'; // Limpa e preenche a opção inicial

    // Obtém as atividades do setor selecionado
    const atividades = JSON.parse(setorSelecionado.getAttribute('data-atividades'));

    // Preenche o select de atividade com as atividades do setor selecionado
    atividades.forEach(atividade => {
        const option = document.createElement('option');
        option.value = atividade;
        option.text = atividade;
        selectAtividade.appendChild(option);
    });
}

// Adiciona event listeners para carregar os dados ao clicar nos selects
document.addEventListener('DOMContentLoaded', function() {
    // Carrega os setores ao carregar a página
    carregarSetores();

    const selectSetor = document.getElementById('setor-select');
    selectSetor.addEventListener('change', function() {
        const setorSelecionado = selectSetor.options[selectSetor.selectedIndex];
        carregarAtividades(setorSelecionado);
    });
});

</script>

