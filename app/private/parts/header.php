
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
      <div class="btn-list d-none d-lg-inline-block">
          <a href="dashboard&setting=minhas-empresas" class="btn list-group-item list-group-item-action" class="list-group-item list-group-item-action" aria-current="true">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-category text-info"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 4h6v6h-6z" /><path d="M14 4h6v6h-6z" /><path d="M4 14h6v6h-6z" /><path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" /></svg>
                      Minhas Empresas
          </a>
          <a href="painel&a=analises" class="btn list-group-item list-group-item-action ">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-chart-bar text-info"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 13a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v6a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M15 9a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v10a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M9 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" /><path d="M4 20h14" /></svg>
                    Minhas Análises
          </a>
          <a href="painel&a=treinamento" class="btn list-group-item list-group-item-action ">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-list-letters text-info"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M11 6h9" /><path d="M11 12h9" /><path d="M11 18h9" /><path d="M4 10v-4.5a1.5 1.5 0 0 1 3 0v4.5" /><path d="M4 8h3" /><path d="M4 20h1.5a1.5 1.5 0 0 0 0 -3h-1.5h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6z" /></svg>
                      Treinamento
          </a>
          <a href="painel&a=estrategias" class="btn list-group-item list-group-item-action ">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-player-play text-info"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M7 4v16l13 -8z" /></svg>
                      Estratégias Exclusivas
          </a>
          <a class="btn list-group-item list-group-item-action" data-bs-toggle="offcanvas" href="#offNotifica" role="button" aria-controls="offcanvasStart">
                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-bell-ringing text-info"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" /><path d="M9 17v1a3 3 0 0 0 6 0v-1" /><path d="M21 6.727a11.05 11.05 0 0 0 -2.794 -3.727" /><path d="M3 6.727a11.05 11.05 0 0 1 2.792 -3.727" /></svg>
                      Notificação 
          </a>
      </div>
      <!-- Offcanvas para o menu (dispositivos pequenos) -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasMenu" aria-labelledby="offcanvasMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasMenuLabel">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
        </div>
        <div class="offcanvas-body">
          <?php include "app/private/parts/botoes-menu.php" ?>
        </div>
      </div>
      <div class="d-flex">   
        <a class="text-secondary" data-bs-toggle="offcanvas" href="#offcanvasMenu" aria-label="Menu">
            <i class="fas fa-list m-2"></i> 
          </a>
          <a href="painel" title="Início" class=" d-block">
              <i class="fas fa-home m-2"></i>
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
            <a href="conta-usuario" class="dropdown-item" title="Conta">
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
            <a href="sair" class="dropdown-item">
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
