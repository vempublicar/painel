<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Dashboard - Informações Genéricas</title>
  <link rel="icon" type="image/x-icon" href="vendor/images/fepacoc/icone.png" />
  <link href="vendor/css/tabler.min.css" rel="stylesheet" />
  <link href="vendor/css/tabler-flags.min.css" rel="stylesheet" />
  <link href="vendor/css/tabler-payments.min.css" rel="stylesheet" />
  <link href="vendor/css/tabler-vendors.min.css" rel="stylesheet" />
  <link href="vendor/css/projeto.css" rel="stylesheet"/>
  <link href="vendor/css/demo.min.css" rel="stylesheet" />
  <style>
    @import url('https://rsms.me/inter/inter.css');
    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }
    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>
<body>
  <header class="navbar d-print-none header1">
    <div class="container-xl">
      <h1 class="d-none-navbar-horizontal mb-1">
        <a href="#" id="logo-branco">
          <img src="vendor/images/fepacoc/logotipo_fepacoc.png" width="110" height="32" alt="Logo" class="navbar-brand-image mt-2">
        </a>
        <a href="#" id="logo-escuro">
          <img src="vendor/images/fepacoc/logobranco_fepacoc.png" width="110" height="32" alt="Logo" class="navbar-brand-image mt-2">
        </a>
      </h1>
      <div class="btn-list">
        <div class="d-none d-lg-inline-block">
          <a href="#" title="Metas" class="btn btn-link">
            <i class="fas fa-home m-2"></i>Início
          </a>
          <a href="#" title="Metas" class="btn btn-link">
            <i class="fas fa-crosshairs m-2"></i>Vídeos
          </a>
          <a href="#" title="Relatório" class="btn btn-link">
            <i class="fas fa-tasks m-2"></i>Ferramentas
          </a>
          <a href="#" title="Kpis" class="btn btn-link">
            <i class="fas fa-briefcase m-2"></i>Multi-Empresas
          </a>
          
        </div>
      </div>
      <div class="d-md-flex">
        
      <a class="btn btn-square d-lg-none btn-icon p-1" data-bs-toggle="offcanvas" href="#offcanvasEnd" aria-label="Menu">
          <i class="fas fa-list m-2"></i> Menu
        </a>
        <div class="me-2">
          <a href="javascript:void(0)" class="text-secondary hide-theme-dark" title="Dark Mode" data-bs-toggle="tooltip"
             data-bs-placement="bottom" onclick="toggleTheme()">
            <i class="fas fa-lightbulb m-2"></i>
          </a>
          <a href="javascript:void(0)" class="text-secondary hide-theme-light" title="Light Mode" data-bs-toggle="tooltip"
             data-bs-placement="bottom" onclick="toggleTheme()">
            <i class="far fa-lightbulb m-2"></i>
          </a>
        </div>
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
            <span class="avatar avatar-sm" style="background-image: url('vendor/images/perfil/avatar.jpg')"></span>
            <div class="d-none d-xl-block ps-2">
              <div class="small text-center mb-1 bg-green"><span class="text-orange-fg">Status</span></div>
              <div>Usuário Genérico</div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a href="#" class="dropdown-item d-sm-none" title="Dashboard">
              <div class="row">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                       stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"/>
                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/>
                  </svg>
                </div>
                <div class="col-6">Início</div>
              </div>
            </a>
            <a href="#" class="dropdown-item" title="Conta">
              <div class="row">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-settings">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"/>
                    <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"/>
                  </svg>
                </div>
                <div class="col-6">Conta</div>
              </div>
            </a>
            <a href="#" class="dropdown-item">
              <div class="row">
                <div class="col">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                       stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-transfer-out">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M4 19v2h16v-14l-8 -4l-8 4v2"/>
                    <path d="M13 14h-9"/>
                    <path d="M7 11l-3 3l3 3"/>
                  </svg>
                </div>
                <div class="col-6">Logout</div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>
