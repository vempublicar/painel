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
    <div class="col-lg-12">
      <!-- Cards dos números mágicos abaixo do gráfico de radar -->
      <h3 class="text-info text-center">Números Mágicos</h3>
        <div class="row">
          <div class="col">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Receita Online
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                    <span class="h2 float-right font-weight-medium"></span>
                    <br>Sua Meta: <small></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Receita Presencial
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                    <span class="h2 float-right font-weight-medium"></span>
                    <br>Sua Meta: <small></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Matéria Prima
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                    <span class="h2 float-right font-weight-medium"></span>
                    <br>Sua Meta: <small></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Marketing
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                    <span class="h2 float-right font-weight-medium"></span>
                    <br>Sua Meta: <small></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Despesas
                    </div>
                  </div>
                  <div the="col-12 text-center mt-2">
                    <span class="h2 float-right font-weight-medium"></span>
                    <br>Sua Meta: <small></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div the="col-12">
                    <div class="font-weight-medium text-center">
                      Margem de Lucro
                    </div>
                  </div>
                  <div the="col-12 text-center mt-2">
                    <span class="h2 float-right font-weight-medium"></span>
                    <br>Sua Meta: <small></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Coluna esquerda com gráficos e números mágicos -->
    <div class="col-lg-9">
      <!-- Card para o gráfico de radar -->
      <div class="card">
        <div class="card-body">
          <div id="radarChart"></div>
        </div>
      </div>
      
    </div>
    <!-- Coluna direita com indicadores e atualizações -->
    <div class="col-lg-3">
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

