<div class="modal modal-blur fade" id="modal-empresa" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar Empresa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="function/push/cadastro.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="row align-items-center mb-4">
                            <div class="col-auto">
                                <span class="avatar avatar-xl" id="profile-avatar" style="background-image: url('vendor/images/perfil/avatar.jpg')"></span>
                            </div>
                            <div class="col">
                                <label class="btn">
                                    Logotipo
                                    <input type="file" id="profile-image-upload" name="profile_image" accept="image/*" style="display: none;">
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Nome Fantasia</label>
                                <input type="text" class="form-control" name="e_nome" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">CNPJ</label>
                                <input type="text" class="form-control" name="e_cnpj" data-mask="00.000.000/0000-00" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">Cep</label>
                                <input type="text" class="form-control" name="e_cep" data-mask="00.000-000" required>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="mb-3">
                                <label class="form-label">Endereço</label>
                                <input type="text" class="form-control" name="e_endereco" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Bairro</label>
                                <input type="text" class="form-control" name="e_bairro" required>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Cidade</label>
                                <input type="text" class="form-control" name="e_cidade" required>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="mb-3">
                                <label class="form-label">UF</label>
                                <input type="text" class="form-control" name="e_estado" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Setor</label>
                                <select class="form-select" id="setor-select" name="e_setor" required>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Atividade</label>
                                <select class="form-select" id="atividade-select" name="e_segmento" required></select>
                            </div>
                        </div>
                    </div>
                    <label class="form-label">Tipo</label>
                    <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="e_tipo" value="1" class="form-selectgroup-input" checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Análise Interna</span>
                                        <span class="d-block text-secondary">Administração da própria empresa.</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="e_tipo" value="2" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                                    <span class="me-3">
                                        <span class="form-selectgroup-check"></span>
                                    </span>
                                    <span class="form-selectgroup-label-content">
                                        <span class="form-selectgroup-title strong mb-1">Análise Tercerizada</span>
                                        <span class="d-block text-secondary">Empresa de cliente ou parceiro.</span>
                                    </span>
                                </span>
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" name="e_email" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">Celular</label>
                                <input type="text" class="form-control" name="e_celular" data-mask="(00) 00000-0000" required>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="mb-3">
                                <label class="form-label">Senha</label>
                                <input type="password" class="form-control" name="e_senha">
                            </div>
                        </div>                        
                        <div class="datagrid-item">
                            <div class="datagrid-title">Compartilhar resultados</div>
                            <div class="datagrid-content">
                                <label class="form-check">
                                    <input class="form-check-input" name="compartilha_dados" type="checkbox">
                                    <span class="form-check-label">Autorizo a equipe do Fepacoc visualizar os resultados.</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="tabela" value="empresa">
                    <input type="hidden" name="id" value="">
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                            Cancelar
                        </a>

                        <!-- Botão de Deletar Empresa, oculto por padrão -->
                        <button type="button" id="btn-delete" class="btn btn-danger" style="display: none;">
                            <!-- Ícone de Lixeira -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 7l16 0" />
                                <path d="M10 11l0 6" />
                                <path d="M14 11l0 6" />
                                <path d="M5 7l1 -3h12l1 3" />
                                <path d="M6 7l0 13a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l0 -13" />
                            </svg>
                            Deletar Empresa
                        </button>

                        <!-- Botão de Adicionar/Atualizar Empresa -->
                        <button type="submit" id="btn-submit" class="btn btn-primary ms-auto">
                            <!-- Ícone de Adicionar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5l0 14" />
                                <path d="M5 12l14 0" />
                            </svg>
                            <span id="btn-text">Adicionar Empresa</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('profile-image-upload').addEventListener('change', function() {
                const file = this.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById('profile-avatar').style.backgroundImage = `url(${e.target.result})`;
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
<script>
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


    // Função para preencher os selects quando o modal é aberto para edição
    function preencherSelectsParaEdicao(setor, atividade) {
        carregarSetores(function() {
            const selectSetor = document.getElementById('setor-select');
            selectSetor.value = setor;

            const setorSelecionado = selectSetor.options[selectSetor.selectedIndex];
            carregarAtividades(setorSelecionado, function() {
                const selectAtividade = document.getElementById('atividade-select');
                selectAtividade.value = atividade;
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('modal-empresa');
    const modalTitle = modal.querySelector('.modal-title');
    const form = modal.querySelector('form');
    const btnDelete = document.getElementById('btn-delete');
    const btnSubmit = document.getElementById('btn-submit');
    const btnText = document.getElementById('btn-text');
    const avatar = document.getElementById('profile-avatar');

    document.querySelectorAll('.btn-editar').forEach(function(button) {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const nome = this.getAttribute('data-nome');
            const cnpj = this.getAttribute('data-cnpj');
            const email = this.getAttribute('data-email');
            const cep = this.getAttribute('data-cep');
            const endereco = this.getAttribute('data-endereco');
            const cidade = this.getAttribute('data-cidade');
            const estado = this.getAttribute('data-estado');
            const bairro = this.getAttribute('data-bairro');
            const segmento = this.getAttribute('data-segmento');
            const setor = this.getAttribute('data-setor');
            const tipo = this.getAttribute('data-tipo');
            const celular = this.getAttribute('data-celular');
            const logo = this.getAttribute('data-logo');
            const compartilha = this.getAttribute('data-compartilha');

            form.action = "function/push/cadastro.php"; // Altere a ação do formulário para edição

            // Preenche os campos com os dados existentes
            form.elements['id'].value = id || '';
            form.elements['e_nome'].value = nome || '';
            form.elements['e_cnpj'].value = cnpj || '';
            form.elements['e_email'].value = email || '';
            form.elements['e_cep'].value = cep || '';
            form.elements['e_endereco'].value = endereco || '';
            form.elements['e_cidade'].value = cidade || '';
            form.elements['e_estado'].value = estado || '';
            form.elements['e_bairro'].value = bairro || '';
            form.elements['e_segmento'].value = segmento || '';
            form.elements['e_setor'].value = setor || '';
            form.elements['e_tipo'].value = tipo || '';
            form.elements['e_celular'].value = celular || '';
            form.elements['compartilha_dados'].checked = compartilha === 'on';

            // Preenche os selects de setor e atividade
            preencherSelectsParaEdicao(setor, segmento);

            // Atualiza a imagem do avatar com o logo da empresa
            avatar.style.backgroundImage = logo ? `url(vendor/images/empresa/${logo})` : 'url(vendor/images/perfil/avatar.jpg)';

            // Modo de edição: alterar texto do botão e mostrar botão de deletar
            if (id) {
                modalTitle.textContent = 'Editar Empresa';
                btnText.textContent = 'Atualizar Empresa';
                btnDelete.style.display = 'inline-block'; // Mostrar o botão de deletar
                form.action = `function/push/cadastro.php`; // Alterar a ação do formulário para atualizar
            } else {
                modalTitle.textContent = 'Adicionar Empresa';
                btnText.textContent = 'Adicionar Empresa';
                btnDelete.style.display = 'none'; // Esconder o botão de deletar
                form.action = "function/push/cadastro.php"; // Ação para adicionar nova empresa
            }

            new bootstrap.Modal(modal).show();
        });
    });

    // Handler para o botão "Adicionar Empresa" para resetar o formulário
    document.querySelector('[data-bs-target="#modal-empresa"]').addEventListener('click', function() {
        modalTitle.textContent = 'Adicionar Empresa';
        form.action = "function/push/cadastro.php"; // Altere a ação do formulário para cadastro
        form.reset();
        avatar.style.backgroundImage = 'url(vendor/images/perfil/avatar.jpg)'; // Reseta o avatar para a imagem padrão
        btnText.textContent = 'Adicionar Empresa'; // Definir o texto do botão
        btnDelete.style.display = 'none'; // Esconder o botão de deletar no modo de adição
    });

    // Lógica para deletar empresa
    btnDelete.addEventListener('click', function() {
        const id = form.elements['id'].value;
        if (confirm('Tem certeza que deseja deletar esta empresa? Está ação vai excluir todos os registros vinculados a esta empresa. ESTE PROCESSO É IRREVERSSÍVEL!')) {
            form.action = `function/push/deleta-registro.php`; // Altere a ação do formulário para deletar
            form.submit(); // Envia o formulário para a página de deletar
        }
    });
});

</script>