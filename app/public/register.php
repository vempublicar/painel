<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fepacoc | Cadastro</title>
    <link rel="icon" type="image/x-icon" href="vendor/images/fepacoc/icone.png" />
    <link href="vendor/css/tabler.min.css" rel="stylesheet" />
    <link href="vendor/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="vendor/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="vendor/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="vendor/css/projeto.css" rel="stylesheet" />
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
    <div class="page page-center">
        <div class="container container-normal py-4">
            <div class="row align-items-center g-4">
                <div class="col-lg">
                    <div class="container-tight">
                        <div class="text-center mb-4">
                            <a href="." id="logo-branco">
                                <img src="vendor/images/fepacoc/logotipo_fepacoc.png" width="110" height="32" alt="FEPACOC" class="navbar-brand-image">
                            </a>
                        </div>
                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-4">Cadastro de Membro</h2>
                                <form action="app/functions/auth/register_user.php" method="post" id="registrationForm">
                                    <div class="mb-3">
                                        <label class="form-label">Nome</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email-username" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">WhatsApp</label>
                                        <input type="text" class="form-control" name="whatsapp" pattern="\([0-9]{2}\) [0-9]{5}-[0-9]{4}" placeholder="(00) 00000-0000" required>
                                    </div>
                                    <input type="hidden" name="password" value="<?= bin2hex(random_bytes(4)); ?>">
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-indigo w-100">Registrar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center text-secondary mt-3">
                            Já possui uma conta? <a href="login" tabindex="-1">Entrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg d-none d-lg-block">
                    <img src="vendor/images/template/register.svg" height="400" class="d-block mx-auto" alt="">
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/js/tabler.min.js" defer></script>
    <script src="vendor/js/demo.min.js" defer></script>
    <!-- jQuery e Máscara -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#whatsapp').mask('(00) 00000-0000');
            // Enable submit button only if all fields are filled
            $('#registrationForm input').on('keyup change', function() {
                let valid = true;
                $('#registrationForm input[required]').each(function() {
                    if ($(this).val() === '') {
                        valid = false;
                    }
                });
                $('#submitBtn').prop('disabled', !valid);
            });
        });
    </script>
</body>
</html>
