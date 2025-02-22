<header class="navbar d-print-none header1 p-2 d-flex justify-content-between align-items-center">
  <!-- Seção Esquerda: Logo -->
  <div class="d-flex align-items-center">
    <h1 class="d-none-navbar-horizontal m-0">
      <a href="#" id="logo-branco">
        <img src="vendor/images/fepacoc/logotipo_fepacoc.png" width="100" height="32" alt="Logo" class="navbar-brand-image ">
      </a>
      <a href="#" id="logo-escuro">
        <img src="vendor/images/fepacoc/logobranco_fepacoc.png" width="100" height="32" alt="Logo" class="navbar-brand-image ">
      </a>
    </h1>
  </div>

  <!-- Seção Central: Botões de Navegação -->
  <div class="d-none d-md-flex flex-grow-1 justify-content-center">
    <a href="painel&a=empresas" class="text-secondary me-2" aria-current="true">
      <i class="fas fa-building me-2"></i>Minhas Empresas
    </a>
    <a href="painel&a=treinamento" class="text-secondary me-2">
      <i class="fas fa-graduation-cap me-2"></i>Minhas Análises
    </a>
    <a href="painel&a=estrategias" class="text-secondary ">
      <i class="fas fa-play me-2"></i>Estratégias Exclusivas
    </a>
  </div>

  <!-- Seção Direita: Outros Ícones e Dropdown -->
  <div class="d-sm-flex align-items-center">
    <a href="painel" title="Início" class="d-block">
      <i class="fas fa-home m-2"></i>
    </a>
    <a href="painel&a=empresas" class="text-secondary d-sm-none d-lg-none">
      <i class="fas fa-building m-2"></i>
    </a>
    <a href="painel&a=treinamento" class="text-secondary d-sm-none d-lg-none">
      <i class="fas fa-graduation-cap m-2"></i>
    </a>
    <a href="painel&a=estrategias" class="text-secondary d-sm-none d-lg-none">
      <i class="fas fa-play m-2"></i>
    </a>
    <div class="me-2">
      <a href="javascript:void(0)" class="text-secondary hide-theme-dark" title="Dark Mode" data-bs-toggle="tooltip" data-bs-placement="bottom" onclick="toggleTheme()">
        <i class="fas fa-lightbulb m-2"></i>
      </a>
      <a href="javascript:void(0)" class="text-secondary hide-theme-light" title="Light Mode" data-bs-toggle="tooltip" data-bs-placement="bottom" onclick="toggleTheme()">
        <i class="far fa-lightbulb m-2"></i>
      </a>
    </div>
    <div class="nav-item dropdown">
      <a href="#" class="nav-link d-flex lh-1 text-reset" data-bs-toggle="dropdown" aria-label="Open user menu">
        <span class="avatar avatar-sm" style="background-image: url('vendor/images/perfil/avatar.jpg')"></span>
        <div class="d-none d-xl-block ps-2">
          <div class="small text-center mb-1 bg-green">
            <span class="text-orange-fg">Status</span>
          </div>
          <div>Usuário Genérico</div>
        </div>
      </a>
      <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
        <a href="#" class="dropdown-item d-sm-none" title="Dashboard">
          <div class="row">
            <div class="col">
              <!-- Ícone Dashboard -->
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
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
              <!-- Ícone Conta -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-settings">
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
              <!-- Ícone Logout -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-transfer-out">
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
</header>
<?php if(isset($_GET['a']) && $_GET['a'] == 'edit-empresa'){ ?>
<header class="navbar-expand-md">
		<div class="navbar-collapse collapse" id="navbar-menu" style="">
			<div class="navbar">
				<div class="container-xl">
					<div class="row flex-fill align-items-center">
						<div class="col">
                  <ul class="navbar-nav">
                      <li class="nav-item <?php if(!isset($_GET['b']) || $_GET['b'] == 'radar'){echo 'active';} ?>">
                        <a class="nav-link" href="./#">                          
                          <span class="nav-link-title">
                            Início
                          </span>
                        </a>
                      </li>
                      <li class="nav-item dropdown <?php if($_GET['b'] == 'financeiro'){echo 'active';} ?>"">
                        <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">                          
                          <span class="nav-link-title">
                            Financeiro
                          </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="painel&a=edit-empresa&b=fluxo-caixa&c=<?= $_GET['c'] ?>">
                              Fluxo Caixa
                            </a>
                            <a class="dropdown-item" href="./#">
                              Second
                            </a>
                            <a class="dropdown-item" href="./#">
                              Third
                            </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown <?php if($_GET['b'] == 'financeiro'){echo 'active';} ?>"">
                        <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">                          
                          <span class="nav-link-title">
                            Estrutura
                          </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./#">
                              First
                            </a>
                            <a class="dropdown-item" href="./#">
                              Second
                            </a>
                            <a class="dropdown-item" href="./#">
                              Third
                            </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown <?php if($_GET['b'] == 'financeiro'){echo 'active';} ?>"">
                        <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">                          
                          <span class="nav-link-title">
                            Produto
                          </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./#">
                              First
                            </a>
                            <a class="dropdown-item" href="./#">
                              Second
                            </a>
                            <a class="dropdown-item" href="./#">
                              Third
                            </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown <?php if($_GET['b'] == 'financeiro'){echo 'active';} ?>"">
                        <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">                          
                          <span class="nav-link-title">
                            Anúncio
                          </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./#">
                              First
                            </a>
                            <a class="dropdown-item" href="./#">
                              Second
                            </a>
                            <a class="dropdown-item" href="./#">
                              Third
                            </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown <?php if($_GET['b'] == 'financeiro'){echo 'active';} ?>"">
                        <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">                          
                          <span class="nav-link-title">
                            Cliente
                          </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./#">
                              First
                            </a>
                            <a class="dropdown-item" href="./#">
                              Second
                            </a>
                            <a class="dropdown-item" href="./#">
                              Third
                            </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown <?php if($_GET['b'] == 'financeiro'){echo 'active';} ?>"">
                        <a class="nav-link dropdown-toggle" href="#navbar-third" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">                          
                          <span class="nav-link-title">
                            Operacional
                          </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./#">
                              First
                            </a>
                            <a class="dropdown-item" href="./#">
                              Second
                            </a>
                            <a class="dropdown-item disabled" href="./#">
                              Third
                            </a>
                          </div>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="painel&a=edit-empresa&b=analise&c=<?= $_GET['c'] ?>">                          
                          <span class="nav-link-title">
                            Análise
                          </span>
                        </a>
                      </li>
                  </ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
  <?php } ?>