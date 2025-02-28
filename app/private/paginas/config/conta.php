
<div class="card-body">
    <div class="row">
        <div class="col-sm-6">
          <h3>Detalhes da Conta</h3>
          <img src="vendor/upload/logo/<?= $empresaEditada['logotipo'] ?>" height="150" alt="Logotipo da Empresa">
          <p><strong>Nome da Empresa:</strong> <?= $empresaEditada['nome_empresa'] ?></p>
          <p><strong>CNPJ:</strong> <?= $empresaEditada['cnpj'] ?></p>
          <p><strong>CEP:</strong> <?= $empresaEditada['cep'] ?></p>
          <p><strong>Email:</strong> <?= $empresaEditada['email_comercial'] ?></p>
        </div>

        <div class="col-sm-6">
            <h3>Ferramentas Ativas</h3>

        </div>
    </div>
</div>
<div class="card-footer bg-transparent mt-auto">
  <div class="btn-list justify-content-end">
    <!-- Botão que abre o offcanvas para editar informações -->
    <button type="button" class="btn btn-link btn-editar" data-bs-toggle="offcanvas" data-bs-target="#offcanvasEditarConta" aria-controls="offcanvasEditarConta">
      Editar Informações
    </button>
    <!-- Botão que abre o modal para confirmar exclusão da empresa -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalExcluirEmpresa">
      Excluir Empresa
    </button>
  </div>
</div>

<!-- Offcanvas para editar informações da conta -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEditarConta" aria-labelledby="offcanvasEditarContaLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasEditarContaLabel">Editar Informações da Conta</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
  </div>
  <div class="offcanvas-body">
    <div class="row">
      <div class="mb-3">
        <label for="nomeEmpresa" class="form-label">Nome da Empresa</label>
        <input type="text" class="form-control" id="nomeEmpresa" value="Empresa Exemplo">
      </div>
      <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" value="12.345.678/0001-90">
      </div>
      <div class="mb-3">
        <label for="endereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="endereco" value="Rua Exemplo, 123, Bairro, Cidade/UF">
      </div>
      <div class="mb-3">
        <label for="emailEmpresa" class="form-label">Email</label>
        <input type="email" class="form-control" id="emailEmpresa" value="contato@empresaexemplo.com">
      </div>
      <!-- Adicione outros campos conforme necessário -->
      <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
  </div>
</div>

<!-- Modal para exclusão da empresa -->
<div class="modal fade" id="modalExcluirEmpresa" tabindex="-1" aria-labelledby="modalExcluirEmpresaLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="app/functions/push/deleta_dados.php" method="post">
      <div class="modal-header">
        <h5 class="modal-title" id="modalExcluirEmpresaLabel">Confirmar Exclusão da Empresa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <p>Para confirmar a exclusão, digite a palavra <strong>"EXCLUIR"</strong> abaixo:</p>
        <div class="mb-3">
          <input type="text" class="form-control" id="confirmarExclusao" name="confirmarExclusao" placeholder="Digite EXCLUIR">
        </div>
        <!-- Campos ocultos para envio dos dados -->
        <input type="hidden" name="tabela" value="nome_da_tabela">
        <input type="hidden" name="id_empresa" value="123">
        <input type="hidden" name="id_usuario" value="456">
        <input type="hidden" name="deletar" value="true">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger">Excluir Empresa</button>
      </div>
    </form>

    </div>
  </div>
</div>

     