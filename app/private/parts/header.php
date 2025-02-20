<?php
if (isset($_GET['empresa'])) {
  $empresa_selecionada = $_GET['empresa'];
  $empresa_nome = $_GET['n'];
  $id_empresa = base64_decode($_GET['empresa']);
  $id_empresa = substr($id_empresa, 4);
  $id_empresa = substr($id_empresa, 0, -2);
  $empresas = $_SESSION['cliente_empresa']['user_empresa'];
  $u_foto = null;
  foreach ($empresas as $empresa) {
    if ($empresa['id'] == $id_empresa) {
      $logo = $empresa['u_foto'];
      break;
    }
  }
}

?>
<?php
include "function/data/dados-assinatura.php";
$userId = $_SESSION['user_id'];
$cliente_info = isset($_SESSION['cliente_info']['user_info'][0]) ? $_SESSION['cliente_info']['user_info'][0] : null;
if (!isset($cliente_info['u_nome'])) {
  $cliente_info = [
    'u_foto' => '',
    'u_nome' => 'User',
    'u_celular' => '',
    'u_email' => '',
    'u_nivel' => 1,
    'id' => null
  ];
}
$nome = htmlspecialchars($cliente_info['u_nome'] ?? 'user');
$email = htmlspecialchars($_SESSION['user_email']);

$emailCliente = $_SESSION['user_email'];
$dadosFinanceiro = dadosValida('valida-assinatura', $emailCliente);

$statusAtual = 'Liberado';
$corStatus = 'bg-green';
$liberaAcesso = true;
// print_r($dadosFinanceiro);
$statusPlano = $dadosFinanceiro[0]['status'];

if ($statusPlano == 'OVERDUE') {
  $statusAtual = 'Atrasado';
  $corStatus = 'bg-orange';
  $liberaAcesso = false;
} elseif ($statusPlano == 'UPDATED') {
  $statusAtual = 'Liberado';
  $corStatus = 'bg-info';
  $liberaAcesso = true;
} elseif ($statusPlano == 'CONFIRMED') {
  $statusAtual = 'Liberado';
  $corStatus = 'bg-yellow';
  $liberaAcesso = true;
} elseif ($statusPlano == 'RECEIVED') {
  $statusAtual = 'Liberado';
  $corStatus = 'bg-green';
  $liberaAcesso = true;
} else {
  $statusAtual = 'Ativação';
  $corStatus = 'bg-secondary';
  $liberaAcesso = false;
}

?>
<header class="navbar  d-print-none header1">
<?php if (isset($_GET['e']) && $_GET['e'] == "metas") { echo '<div class="card-status-bottom bg-purple"></div>'; } ?>
<?php if (isset($_GET['e']) && $_GET['e'] == "relatorio") { echo '<div class="card-status-bottom bg-teal"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Kpis") { echo '<div class="card-status-bottom bg-azure"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Financeiro") { echo '<div class="card-status-bottom bg-cyan"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Estrutura") { echo '<div class="card-status-bottom bg-orange"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Produto") { echo '<div class="card-status-bottom bg-yellow"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Anuncio") { echo '<div class="card-status-bottom bg-indigo"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Cliente") { echo '<div class="card-status-bottom bg-pink"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Operacional") { echo '<div class="card-status-bottom bg-lime"></div>'; } ?>
<?php if (isset($_GET['p']) && $_GET['p'] == "Consistencia") { echo '<div class="card-status-bottom bg-green"></div>'; } ?>
  <div class="container-xl ">
    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
    <h1 class="d-none-navbar-horizontal mb-1">
      <a href="#" id="logo-branco">
        <img src="vendor/images/fepacoc/logotipo_fepacoc.png" width="110" height="32" alt="Tabler" class="navbar-brand-image mt-2">
      </a>
      <a href="#" id="logo-escuro">
        <img src="vendor/images/fepacoc/logobranco_fepacoc.png" width="110" height="32" alt="Tabler" class="navbar-brand-image mt-2">
      </a>
    </h1>
    <div class="m-auto  d-print-none">
      <div class="btn-list">
        <?php
        if (isset($_GET['empresa'])) { ?>
          <div class="d-none d-lg-inline-block">          
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&e=metas" title="Metas" class="btn btn-square
            <?php if (isset($_GET['e']) && $_GET['e'] == "metas") {
              echo 'btn-outline-purple';
            } ?>">
              <i class="fas fa-crosshairs m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&e=relatorio" title="Okr" class="btn btn-square
            <?php if (isset($_GET['e']) && $_GET['e'] == "relatorio") {
              echo 'btn-outline-teal';
            } ?>">
              <i class="fas fa-tasks m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Kpis" title="Kpis" class="btn btn-square
            <?php if (isset($_GET['p']) && $_GET['p'] == "Kpis") {
              echo 'btn-outline-azure';
            } ?>">
              <i class="fas fa-chart-line m-2"></i>
            </a>

            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Financeiro&d=Resumo" title="Financeiro" class="btn btn-square 
              <?php if (isset($_GET['p']) && $_GET['p'] == "Financeiro") {
                echo 'btn-outline-cyan';
              } ?>">
              <i class="fas fa-money-bill-wave m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Estrutura&d=Resumo" title="Estrutura" class="btn  btn-square
              <?php if (isset($_GET['p']) && $_GET['p'] == "Estrutura") {
                echo 'btn-outline-orange';
              } ?>">
              <i class="fas fa-user-tie m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Produto&d=Resumo" title="Produto" class="btn btn-square 
              <?php if (isset($_GET['p']) && $_GET['p'] == "Produto") {
                echo 'btn-outline-yellow';
              } ?>">
              <i class="fas fa-tag m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Anuncio&d=Resumo" title="Anúncio" class="btn  btn-square
              <?php if (isset($_GET['p']) && $_GET['p'] == "Anuncio") {
                echo 'btn-outline-indigo';
              } ?>">
              <i class="fas fa-bullhorn m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Cliente&d=Resumo" title="Cliente" class="btn  btn-square
              <?php if (isset($_GET['p']) && $_GET['p'] == "Cliente") {
                echo 'btn-outline-pink';
              } ?>">
              <i class="fas fa-users m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Operacional&d=Resumo" title="Operacional" class="btn btn-square 
              <?php if (isset($_GET['p']) && $_GET['p'] == "Operacional") {
                echo 'btn-outline-lime';
              } ?>">
              <i class="fas fa-sitemap m-2"></i>
            </a>
            <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Consistencia&d=Resumo" title="Consistência" class="btn btn-square 
              <?php if (isset($_GET['p']) && $_GET['p'] == "Consistencia") {
                echo 'btn-outline-green';
              } ?>">
              <i class="fas fa-sync m-2"></i>
            </a>
          </div>
        <?php } ?>

        <?php if (isset($_GET['setting']) && $_GET['setting'] == 'minhas-empresas') { ?>
          <!-- <span class="d-none d-sm-inline">
            <a href="dashboard&setting=conta&pagina=empresa" class="btn bg-cyan-lt">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
              </svg>
              Adicionar
            </a> -->
          </span>
          <a class="btn btn-primary d-lg-none btn-icon" data-bs-toggle="offcanvas" href="#offcanvasEnd" aria-label="Create new report">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-indent-decrease">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M20 6l-7 0" />
              <path d="M20 12l-9 0" />
              <path d="M20 18l-7 0" />
              <path d="M8 8l-4 4l4 4" />
            </svg>
          </a>
        <?php } ?>
        <?php if (isset($_GET['empresa'])) { ?>
          <a class="btn btn-square d-lg-none btn-icon p-1" data-bs-toggle="offcanvas" href="#offcanvasEnd" aria-label="Create new report">
            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
            <i class="fas fa-list m-2"></i> Menu
          </a>
        <?php } ?>
      </div>
    </div>
    <div class="d-md-flex">
      <div class="me-2">
        <a href="dashboard" class=" text-center text-secondary  " title="Home">
        <i class="fas fa-home m-2"></i>
        </a>
        <a href="dashboard&setting=minhas-empresas" title="Empresas" class=" text-center text-secondary 
          <?php if (isset($_GET['setting']) && $_GET['setting'] == "minhas-empresas") {
            echo 'btn-outline-primary';
          } ?>">
              <i class="fas fa-briefcase m-2"></i>
            </a>
        <a href="javascript:void(0)" class=" text-secondary  hide-theme-dark " title="Dark Mode" data-bs-toggle="tooltip"
          data-bs-placement="bottom" onclick="toggleTheme()">
          <i class="fas fa-lightbulb m-2"></i>
        </a>
        <a href="javascript:void(0)" class=" text-secondary  hide-theme-light " title="Light Mode" data-bs-toggle="tooltip"
          data-bs-placement="bottom" onclick="toggleTheme()">
          <i class="far fa-lightbulb m-2"></i>
        </a>
        <a href="" class=" text-center text-secondary  " id="fullscreenToggle" title="F11">
        <i class="fas fa-expand m-2"></i>
        </a>
      </div>
      


      <div class="nav-item dropdown">
        <a href="" class="nav-link d-flex lh-1 text-reset " data-bs-toggle="dropdown" aria-label="Open user menu">
          <span class="avatar avatar-sm" style="background-image: url(<?php echo !empty($cliente_info['u_foto']) ? "vendor/images/usuario/" . $cliente_info['u_foto'] : 'vendor/images/perfil/avatar.jpg'; ?>)"></span>
          <div class="d-none d-xl-block ps-2">
            <div class="small text-center mb-1 <?= $corStatus ?> "><span class=" text-orange-fg"><?= $statusAtual ?></span></div>
            <div><?php echo strlen($nome) > 12 ? substr($nome, 0, 12) . '...' : $nome; ?></div>
            <!-- <div class="mt-1 small text-secondary"><?php echo strlen($email) > 12 ? substr($email, 0, 12) . '...' : $email; ?></div> -->
          </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow ">
          <!-- <a href="#" class="dropdown-item">Status</a>
            <a href="dashboard&setting=conta&pagina=perfil" class="dropdown-item">Perfil</a>
            <a href="#" class="dropdown-item">Feedback</a>
            <div class="dropdown-divider"></div> -->
          <a href="dashboard" class="dropdown-item  d-sm-none" title="Dashboard">
            <!-- Ícone Lua para Modo Escuro -->
            <div class="row">
              <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>

              </div>
              <div class="col-6">
                Início
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="dropdown-item  hide-theme-dark d-sm-none" title="Dark Mode" data-bs-toggle="tooltip"
            data-bs-placement="bottom" onclick="toggleTheme()">
            <div class="row">
              <div class="col">
                <!-- Ícone Lua para Modo Escuro -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                </svg>
              </div>
              <div class="col-6">
                Dark
              </div>
            </div>
          </a>
          <a href="javascript:void(0)" class="dropdown-item  hide-theme-light d-sm-none" title="Light Mode" data-bs-toggle="tooltip"
            data-bs-placement="bottom" onclick="toggleTheme()">
            <div class="row">
              <div class="col">
                <!-- Ícone Sol para Modo Claro -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                  <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                </svg>
              </div>
              <div class="col-6">
                Light
              </div>
            </div>
          </a>
          <a href="dashboard&setting=conta" class="dropdown-item">
            <div class="row">
              <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-settings">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z" />
                  <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                </svg>
              </div>
              <div class="col-6">
                Conta
              </div>
            </div>
          </a>

          <a href="logout" class="dropdown-item">
            <div class="row">
              <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-transfer-out">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M4 19v2h16v-14l-8 -4l-8 4v2" />
                  <path d="M13 14h-9" />
                  <path d="M7 11l-3 3l3 3" />
                </svg>
              </div>
              <div class="col-6">
                Logout
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
</header>