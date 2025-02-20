<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fepacoc | Registro</title>
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
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-img">
                    <img src="vendor/images/template/erro.svg" height="400" alt="">
                </div>
                <p class="empty-title">Ocorreu um erro</p>
                <p class="empty-subtitle text-secondary">
                    <?php 
                    if (isset($_GET['msg'])) {
                        // Decodifica a mensagem em Base64 antes de exibir
                        echo htmlspecialchars(base64_decode($_GET['msg']));
                    } else {
                        echo "Desculpe, não conseguimos processar a informação solicitada.";
                    }
                    ?>
                    Se persistir o erro, entre em contato com o time de suporte.
                </p>
                <div class="empty-action">
                    <a href="inicio" class="btn btn-primary w-100 mb-1 ">
                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-home-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M10 12h4v4h-4z" /></svg>
                        Início
                    </a>
                    <a href="suporte" class="btn btn-secondary-lt w-100 ">
                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-help"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" /><path d="M12 17l0 .01" /><path d="M12 13.5a1.5 1.5 0 0 1 1 -1.5a2.6 2.6 0 1 0 -3 -4" /></svg>
                        Suporte
                    </a>
                </div>
            </div>
        </div>
    </div>
    <script src="vendor/js/tabler.min.js" defer></script>
    <script src="vendor/js/demo.min.js" defer></script>
</body>


</html>