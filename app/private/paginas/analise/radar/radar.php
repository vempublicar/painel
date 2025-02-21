<?php 

$financeiro = intval(20);
$estrutura = intval(44);
$produto = intval(55);
$anuncio = intval(33);
$cliente = intval(14);
$operacional = intval(67);
$consistencia = intval(21);

?>

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

