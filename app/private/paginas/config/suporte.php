<div class="card-body">
  <div class="table-responsive">
    <table class="table table-vcenter table-mobile-md card-table">
      <thead>
        <tr>
          <th>ID Ticket</th>
          <th>Assunto</th>
          <th>Status</th>
          <th>Data</th>
          <th class="w-1"></th>
        </tr>
      </thead>
      <tbody>
        <!-- Exemplo de linha de tabela para solicitação de suporte -->
        <tr>
          <td data-label="ID">
            <div class="d-flex py-1 align-items-center">
              <div class="flex-fill">
                <div class="font-weight-medium">#12345</div>
              </div>
            </div>
          </td>
          <td data-label="Assunto">
            <div>Problema no Acesso</div>
          </td>
          <td data-label="Status">
            <div>Aberto</div>
          </td>
          <td data-label="Data">
            <div>01/02/2025</div>
          </td>
          <td>
            <div class="btn-list flex-nowrap">
              <button type="button" class="btn btn-link btn-editar">Visualizar</button>
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
    <!-- Botão que abre o offcanvas com o formulário -->
    <button type="button" class="btn bg-dark-lt text-info" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTicket" aria-controls="offcanvasTicket">
      Adicionar novo ticket
    </button>
    <!-- Botão desabilitado para suporte via WhatsApp -->
    <button type="button" class="btn bg-orange text-black" disabled>
      Suporte via WhatsApp
    </button>
  </div>
</div>

<!-- Offcanvas com o formulário para novo ticket -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasTicket" aria-labelledby="offcanvasTicketLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasTicketLabel">Novo Ticket de Suporte</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
  </div>
  <div class="offcanvas-body">
    <form>
      <div class="mb-3">
        <label for="ticketSubject" class="form-label">Assunto</label>
        <input type="text" class="form-control" id="ticketSubject" placeholder="Digite o assunto">
      </div>
      <div class="mb-3">
        <label for="ticketText" class="form-label">Texto</label>
        <textarea class="form-control" id="ticketText" rows="5" placeholder="Descreva o problema"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Enviar Ticket</button>
    </form>
  </div>
</div>
