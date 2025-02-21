<?php 

$financeiro = intval(20);
$estrutura = intval(44);
$produto = intval(55);
$anuncio = intval(33);
$cliente = intval(14);
$operacional = intval(67);
$consistencia = intval(21);

?>
  <nav class="navbar navbar-vertical navbar-expand-lg">
    <div class="px-3 mb-3">
      <h2 class="text-white">Menu</h2>
    </div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Usuários</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Configurações</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Relatórios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Suporte</a>
      </li>
    </ul>
  </nav>
  <div class="content">
    <div class="container-fluid">
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
            <div class="col-lg-12 mb-3">
              <!-- Cards dos números mágicos abaixo do gráfico de radar -->
              <h3 class="text-info text-center">Números Mágicos</h3>  
              <div class="row">   
                <div class="col-sm-2 col-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <h5 class="card-title">Receita Online</h5>
                      <h2 class="card-text">20%</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 col-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <h5 class="card-title">Receita Presencial</h5>
                      <h2 class="card-text">20%</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 col-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <h5 class="card-title">Marketing</h5>
                      <h2 class="card-text">20%</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 col-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <h5 class="card-title">Matéria Prima</h5>
                      <h2 class="card-text">15%</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 col-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <h5 class="card-title">Despesas</h5>
                      <h2 class="card-text">15%</h2>
                    </div>
                  </div>
                </div>
                <div class="col-sm-2 col-6">
                  <div class="card h-100">
                    <div class="card-body text-center">
                      <h5 class="card-title">Margem de Lucro</h5>
                      <h2 class="card-text">10%</h2>
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
  </div>

<div class="floating-button">
    <div class="linha-background bg-cyan"></div>
    <a class="btn btn-cyan btn-icon text-black" data-bs-toggle="offcanvas" href="#offReceitaEditar" role="button" aria-controls="offcanvasEnd" style="height: 60px; width: 60px;">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
            <path stroke="none" d="M0 0h24V24H0z" fill="none" />
            <path d="M12 5l0 14" />
            <path d="M5 12l14 0" />
        </svg>
    </a>
</div>

<div class="offcanvas offcanvas-end" tabindex="-1" id="offReceitaEditar" aria-labelledby="offReceitaEditarLabel">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offReceitaEditarLabel">Cadastrar Despesas</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form action="function/push/empresa-cadastro.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <input type="hidden" name="mes" id="mes" class="form-control" value="<?php echo date('d/m/Y') ?>">
                <input type="hidden" name="emp_ref" id="emp_ref" value="1" class="form-control" readonly>
                <input type="hidden" name="id" id="id" class="form-control">
                <input type="hidden" name="tabela" value="financeiro">
                <input type="hidden" name="indicador" value="financeiro-receita">
                <input type="hidden" name="status" value="ativo">
                <input type="hidden" name="retorno" value="null">
                <input type="hidden" name="periodo_ref" value="M">
                <div class="mb-3 col-6">
                    <label class="form-label">Mês</label>
                    <select name="mes_ref" id="mes_ref" class="form-select" required>
                        <option value="Janeiro">Janeiro</option>
                        <option value="Fevereiro">Fevereiro</option>
                        <option value="Março">Março</option>
                        <option value="Abril">Abril</option>
                        <option value="Maio">Maio</option>
                        <option value="Junho">Junho</option>
                        <option value="Julho">Julho</option>
                        <option value="Agosto">Agosto</option>
                        <option value="Setembro">Setembro</option>
                        <option value="Outubro">Outubro</option>
                        <option value="Novembro">Novembro</option>
                        <option value="Dezembro">Dezembro</option>
                    </select>
                </div>
                <div class="mb-3 col-6">
                    <label class="form-label">Ano</label>
                    <select name="ano_ref" id="ano_ref" class="form-select" required>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024" selected>2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
                <label class="form-label">Informe das Vendas</label>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text"> Presencial </span>
                        <input type="text" name="rec_presencial" id="rec_presencial" class="form-control value" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text"> Digital </span>
                        <input type="text" name="rec_online" id="rec_online" class="form-control value" required>
                    </div>
                </div>
                <div class="mb-3 col-12">
                    <label for="totalReceitaMensal" class="form-label">Total</label>
                    <input type="text" id="totalReceitaMensal" name="totalReceita" class="form-control bg-blue-lt" readonly>
                </div>
            </div>
            <div class="mt-3">
                <a href="#" class="btn btn-secondary-lt w-50" data-bs-dismiss="offcanvas">Cancelar</a>
                <button type="submit" class="btn btn-cyan ms-auto float-end w-50 text-black " data-bs-dismiss="offcanvas">Salvar</button>
            </div>
        </form>
    </div>
</div>