<div class="page-body">
  <div class="container-xl">
    <div class="card ">
      <div class="row g-0">
        <div class="col-12 col-md-3 border-end">
          <div class="card-body">
            <h4 class="subheader">Minha Conta</h4>
            <div class="list-group list-group-transparent">
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=conta" class="list-group-item list-group-item-action d-flex align-items-center active">Conta</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=usuarios" class="list-group-item list-group-item-action d-flex align-items-center">Usuários</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=plano" class="list-group-item list-group-item-action d-flex align-items-center">Plano</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=suporte" class="list-group-item list-group-item-action d-flex align-items-center">Suporte</a>
            </div>
          </div>
        </div>
          <div class="col-sm-9 d-flex flex-column" >
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Cargo</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Exemplo de linha de tabela para um usuário -->
                    <tr>
                      <td data-label="Nome">
                        <div class="font-weight-medium">João Silva</div>
                      </td>
                      <td data-label="Email">
                        <div>joao.silva@example.com</div>
                      </td>
                      <td data-label="Cargo">
                        <div>Gerente</div>
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <button type="button" class="btn btn-link btn-permissoes" data-bs-toggle="offcanvas" data-bs-target="#offcanvasPermissoes" aria-controls="offcanvasPermissoes">
                            Permissões
                          </button>
                        </div>
                      </td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                  </tbody>
                </table>
              </div>
            </div>

            <div class="card-footer bg-transparent mt-auto">
              <div class="btn-list justify-content-end">
                <button type="button" class="btn bg-dark-lt text-info" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNovoUsuario" aria-controls="offcanvasNovoUsuario">
                  Adicionar Usuário
                </button>
              </div>
            </div>

            <!-- Offcanvas para editar permissões do usuário -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasPermissoes" aria-labelledby="offcanvasPermissoesLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasPermissoesLabel">Editar Permissões</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
              </div>
              <div class="offcanvas-body">
                <form>
                  <div class="form-check">
                    <input class="form-check-input" name="permissao-administrativa" id="permissao-administrativa" value="administrativa" type="checkbox" checked>
                    <label class="form-check-label" for="permissao-administrativa">
                      Permissão Administrativa
                    </label>
                  </div>
                  <!-- Adicione outros inputs de permissões conforme necessário -->
                  <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Salvar Permissões</button>
                  </div>
                </form>
              </div>
            </div>

            <!-- Offcanvas para adicionar novo usuário -->
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNovoUsuario" aria-labelledby="offcanvasNovoUsuarioLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNovoUsuarioLabel">Adicionar Novo Usuário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
              </div>
              <div class="offcanvas-body">
                <form>
                  <div class="mb-3">
                    <label for="userName" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="userName" placeholder="Digite o nome">
                  </div>
                  <div class="mb-3">
                    <label for="userEmail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="userEmail" placeholder="Digite o email">
                  </div>
                  <div class="mb-3">
                    <label for="userCargo" class="form-label">Cargo</label>
                    <input type="text" class="form-control" id="userCargo" placeholder="Digite o cargo">
                  </div>
                  <!-- Adicione outros campos conforme necessário -->
                  <button type="submit" class="btn btn-primary">Salvar Usuário</button>
                </form>
              </div>
            </div>

          </div>
      </div>
    </div>
  </div>
</div>