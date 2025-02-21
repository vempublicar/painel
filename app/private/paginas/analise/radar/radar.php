<?php 

$financeiro = intval(20);
$estrutura = intval(44);
$produto = intval(55);
$anuncio = intval(33);
$cliente = intval(14);
$operacional = intval(67);
$consistencia = intval(21);

?>
<div class="page-header d-print-none">
  <div class="container container-tight">
    <div class="row g-3 align-items-center">
      <div class="col-md-auto ms-auto d-print-none">
        <div class="btn-list">
          <a class="btn btn-indigo ms-auto" id="generate-pdf" data-bs-toggle="modal" data-bs-target="#modal-full-width">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-download">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
              <path d="M7 11l5 5l5 -5" />
              <path d="M12 4l0 12" />
            </svg>
            Salvar PDF</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Relatório da Empresa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <iframe id="pdfFrame" style="width:100%; height: 500px;"></iframe>
    </div>
  </div>
</div>
<div class="page-body">
<div class="container-xl">
  <div class="row">
    <!-- Coluna esquerda com gráficos e números mágicos -->
    <div class="col-lg-8">
      <!-- Card para o gráfico de radar -->
      <div class="card">
        <div class="card-body">
          <div id="radarChart"></div>
        </div>
      </div>
      <!-- Cards dos números mágicos abaixo do gráfico de radar -->
      <div class="row">
        <!-- Exemplo de card de número mágico, repita para outros conforme necessário -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5>Receita Online</h5>
              <h2>25%</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5>Receita Presencial</h5>
              <h2>25%</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5>Marketing</h5>
              <h2>25%</h2>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <div class="card-body text-center">
              <h5>Matéria Prima</h5>
              <h2>25%</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Coluna direita com indicadores e atualizações -->
    <div class="col-lg-4">
      <!-- Card 1: Atualização dos Dados -->
      <div class="card">
        <div class="card-body">
          <h5>Atualização dos Dados</h5>
          <h2>Última atualização: 01/01/2025</h2>
        </div>
      </div>
      <!-- Card 2: Indicador de Consistência -->
      <div class="card">
        <div class="card-body">
          <h5>Indicador de Consistência</h5>
          <h1>95%</h1>
        </div>
      </div>
      <!-- Card 3: Indicador de Eficiência Operacional -->
      <div class="card">
        <div class="card-body">
          <h5>Indicador de Eficiência Operacional</h5>
          <h1>85%</h1>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

