<?php 

$financeiro = intval($financeiroPts);
$estrutura = intval($estruturaPts);
$produto = intval($produtosPts);
$anuncio = intval($anuncioPts);
$cliente = intval($clientesPts);
$operacional = intval($operacionalPts);
$consistencia = intval($consistenciaPts);

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
  <div class="container-xl" id="salvarPdf">
    <div class="page-break mt-1 mb-0">
      <div class="card p-2">
        <div class="card-body p-4">
          <div class="row">
            <div class="col-sm-4 mb-2 d-flex align-items-center justify-content-center">
              <h3 class="h1 card-title text-info">Desempenho Geral <br><sp class="text-info" ><?= urldecode($_GET['n']) . '</b><br><small class="text-secondary">' . $nomeMes . ' de ' . $anoAtual ?></small></h3>
            </div>
            <div class="col-sm-7 mx-auto justify-content-center ">
              <div id="radarChart" class="mt-1"></div>
            </div>
          </div>
        </div>
        <h3 class="text-info text-center" >Números Mágicos</h3>
        <div class="row">
          <div class="col ">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Receita Online
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                    <?php $cor = determinarCor($dadosAtuais['receita-online'],$metasAtuais['meta-receita-online']) ?>
                    <span class="h2 float-right font-weight-medium text-<?= $cor ?>"><?= $dadosAtuais['receita-online'] ?>%</span>
                    <br>Sua Meta: <small><?php echo $metasAtuais['meta-receita-online'].'%' ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Receita Presencial
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                  <?php $cor = determinarCor($dadosAtuais['receita-presencial'],$metasAtuais['meta-receita-presencial']) ?>
                    <span class="h2 float-right font-weight-medium text-<?= $cor ?>"><?= $dadosAtuais['receita-presencial'] ?>%</span>
                    <br>Sua Meta: <small><?php echo $metasAtuais['meta-receita-presencial'].'%' ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                    Matéria Prima
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                  <?php $cor = determinarCor($dadosAtuais['materia-prima'],$metasAtuais['meta-materia-prima']) ?>
                    <span class="h2 float-right font-weight-medium text-<?= $cor ?>"><?= $dadosAtuais['materia-prima'] ?>%</span>
                    <br>Sua Meta: <small><?php echo $metasAtuais['meta-materia-prima'].'%' ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="col ">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                    Marketing
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                  <?php $cor = determinarCor($dadosAtuais['marketing'],$metasAtuais['meta-marketing']) ?>
                    <span class="h2 float-right font-weight-medium text-<?= $cor ?>"><?= $dadosAtuais['marketing'] ?>%</span>
                    <br>Sua Meta: <small><?php echo $metasAtuais['meta-marketing'].'%' ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                      Despesas
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                  <?php $cor = determinarCor($dadosAtuais['folha-pagamento'],$metasAtuais['meta-folha-pagamento']) ?>
                    <span class="h2 float-right font-weight-medium text-<?= $cor ?>"><?= $dadosAtuais['folha-pagamento'] ?>%</span>
                    <br>Sua Meta: <small><?php echo $metasAtuais['meta-folha-pagamento'].'%' ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col ">
            <div class="card card-sm">
              <div class="card-body">
                <div class="align-items-center">
                  <div class="col-12">
                    <div class="font-weight-medium text-center">
                    Margem de Lucro
                    </div>
                  </div>
                  <div class="col-12 text-center mt-2">
                  <?php $cor = determinarCor($dadosAtuais['margem-lucro'],$metasAtuais['meta-margem-lucro']) ?>
                    <span class="h2 float-right font-weight-medium text-<?= $cor ?>"><?= $dadosAtuais['margem-lucro'] ?>%</span>
                    <br>Sua Meta: <small><?php echo $metasAtuais['meta-margem-lucro'].'%' ?></small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>