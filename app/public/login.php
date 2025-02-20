<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Fepacoc | Login</title>
  <!-- CSS files -->
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
<body class="d-flex flex-column">
  <script src="vendor/js/demo-theme.min.js"></script>
  <div class="page page-center">
    <div class="container container-normal py-4">
      <div class="row align-items-center g-4">
        <div class="col-lg">
          <div class="container-tight">
            <div class="text-center mb-4">
              <a href="." id="logo-branco">
                <img src="vendor/images/fepacoc/logotipo_fepacoc.png" width="110" height="32" alt="FEPACOC" class="navbar-brand-image">
              </a>
              <a href="." id="logo-escuro">
                <img src="vendor/images/fepacoc/logobranco_fepacoc.png" width="110" height="32" alt="FEPACOC" class="navbar-brand-image">
              </a>
            </div>
            <div class="card card-md">
              <div class="card-body">
                <h2 class="h2 text-center mb-4">Painel de gestão</h2>
                <form action="functions/auth/login_access.php" method="post" autocomplete="on" novalidate>
                  <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="nome@email.com"
                      autocomplete="on">
                  </div>
                  <div class="mb-2">
                    <label class="form-label">
                      Senha
                      <span class="form-label-description">
                        <a href="recupera-senha">Esqueceu a senha</a>
                      </span>
                    </label>
                    <div class="input-group input-group-flat">
                      <input type="password" class="form-control" name="password" placeholder="***" autocomplete="on" id="passwordInput">
                      <span class="input-group-text">
                        <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip" id="togglePassword">
                          <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                            <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                          </svg>
                        </a>
                      </span>
                    </div>
                    <?php 
                      if (isset($_GET['msg'])) {
                        $msg = $_GET['msg'];
                        
                        // Verificar se a mensagem é válida em base64
                        if (base64_decode($msg, true) !== false) {
                          // Decodificar e exibir a mensagem
                          $decodedMsg = base64_decode($msg);
                          echo '<div class="alert alert-danger" role="alert">';
                          echo htmlspecialchars($decodedMsg, ENT_QUOTES, 'UTF-8');
                          echo '</div>';
                        }
                      }
                    ?>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Acessar Painel</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="text-center text-secondary mt-3">
              Deseja criar uma conta? <a href="planos" tabindex="-1">Conheça os planos.</a>
            </div>
          </div>
        </div>
        <div class="col-lg d-none d-lg-block">
          <img src="vendor/images/template/Login-amico.svg" height="400" class="d-block mx-auto" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- Libs JS -->
  <!-- Tabler Core -->
  <script src="vendor/js/tabler.min.js" defer></script>
  <script src="vendor/js/demo.min.js" defer></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('togglePassword').addEventListener('click', function(e) {
        e.preventDefault();
        const passwordInput = document.getElementById('passwordInput');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
      });
    });
  </script>
</body>
</html>
