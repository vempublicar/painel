<div class="page-body">
  <div class="container-xl">
    <div class="card ">
      <div class="row g-0">
        <div class="col-3 col-md-3 border-end">
          <div class="card-body">
            <h4 class="subheader">Minha Conta</h4>
            <div class="list-group list-group-transparent">
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=conta" class="list-group-item list-group-item-action d-flex align-items-center ">Conta</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=usuarios" class="list-group-item list-group-item-action d-flex align-items-center">Usuários</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=plano" class="list-group-item list-group-item-action d-flex align-items-center active">Plano</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=suporte" class="list-group-item list-group-item-action d-flex align-items-center">Suporte</a>
            </div>
          </div>
        </div>
        <div class="col-9 col-sm-9 d-flex flex-column" >
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-vcenter table-mobile-md card-table">
                <thead>
                  <tr>
                    <th>Plano</th>
                    <th>Data de Início</th>
                    <th>Status</th>
                    <th>Valor</th>
                    <th class="w-1"></th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Exemplo de linha de tabela para um plano ativo -->
                  <tr>
                    <td data-label="Plano">
                      <div class="d-flex py-1 align-items-center">
                        <div class="flex-fill">
                          <div class="font-weight-medium">Plano Básico</div>
                          <div class="text-secondary">Ideal para iniciantes</div>
                        </div>
                      </div>
                    </td>
                    <td data-label="Data">
                      <div>01/01/2025</div>
                    </td>
                    <td data-label="Status">
                      <div>Ativo</div>
                    </td>
                    <td data-label="Valor">
                      <div>R$ 99,00</div>
                    </td>
                    <td>
                      <div class="btn-list flex-nowrap">
                        <button type="button" class="btn btn-link btn-editar">Detalhes</button>
                      </div>
                    </td>
                  </tr>
                  <!-- Você pode adicionar mais linhas conforme necessário -->
                </tbody>
              </table>
            </div>
          </div>

          <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">
              <button type="button" class="btn bg-orange text-black">
                Upgrade do Plano / Serviços Adicionais
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>