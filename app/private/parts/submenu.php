<style>
  /* Sub Menu fixo à esquerda, ocupando 100% da altura da viewport */
  .sub-menu {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh; /* 100% da altura da tela */
    width: 60px;  /* Defina a largura desejada para o sidebar */
    background-color: #f8f9fa;
    padding: 10px 0;
    overflow-y: auto;
    z-index: 1000;
  }
  /* Botões ocupando 100% da largura do menu */
  .sub-menu .btn-tools a {
    display: block;
    width: 100%;
    margin-bottom: 10px;
    margin-top: 50px;
    text-align: center;
  }
  .bi {
  font-size: 1.5rem; /* ou o tamanho desejado */
}
</style>

<div class="sub-menu">
  <div class="btn-tools">
    <a href="#" title="Metas" class="btn btn-square btn-outline-primary">
      <i class="bi bi-speedometer2"></i>
    </a>
    <a href="#" title="Relatório" class="btn btn-square btn-outline-secondary">
      <i class="bi bi-bar-chart-line"></i>
    </a>
    <a href="#" title="KPIs" class="btn btn-square btn-outline-info">
      <i class="bi bi-graph-up"></i>
    </a>
    <a href="#" title="Financeiro" class="btn btn-square btn-outline-success">
      <i class="bi bi-currency-dollar"></i>
    </a>
    <a href="#" title="Estrutura" class="btn btn-square btn-outline-warning">
      <i class="bi bi-building"></i>
    </a>
    <a href="#" title="Produto" class="btn btn-square btn-outline-danger">
      <i class="bi bi-tag"></i>
    </a>
    <a href="#" title="Anúncio" class="btn btn-square btn-outline-dark">
      <i class="bi bi-megaphone"></i>
    </a>
  </div>
</div>
