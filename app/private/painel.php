
<?php include "app/private/parts/head.php" ?>

<body class=" layout-fluid" >
    <script src="vendor/js/demo-theme.min.js"></script>
    <div class="page" id="page-content">
    
    <?php include "app/private/parts/header.php" ?>
    <?php // include "app/private/parts/submenu.php" ?>

    <?php
// Obter os parâmetros GET com valores padrão null
$a = $_GET['a'] ?? null;
$b = $_GET['b'] ?? null;

// Verifica a categoria e inclui a página apropriada
switch ($a) {
    case 'analises':
        if ($b) {
            // Lógica para subpágina de análises (a definir)
            // include "app/private/paginas/analise/subpagina.php";
        } else {
            // Página inicial de análises
            include "app/private/paginas/analise/inicial-analises.php";
        }
        break;
    case 'estrategias':
        if ($b) {
            // Lógica para subpágina de estratégias (a definir)
            // include "app/private/paginas/estrategia/subpagina.php";
        } else {
            // Página inicial de estratégias
            include "app/private/paginas/estrategia/inicial-estrategia.php";
        }
        break;
    case 'treinamento':
        if ($b) {
            // Lógica para subpágina de treinamento (a definir)
            // include "app/private/paginas/treinamento/subpagina.php";
        } else {
            // Página inicial de treinamento
            include "app/private/paginas/treinamento/treinamento.php";
        }
        break;
    case 'ferramentas':
        if ($b) {
            switch ($b) {
                case 'okr':
                    include "app/private/paginas/ferramentas/financeiro/fluxo-caixa.php";
                    break;
                default:
                    // Caso não reconhecido, direciona para a página inicial de ferramentas
                    include "app/private/paginas/ferramentas/inicial-ferramentas.php";
                    break;
            }
        } else {
            // Página inicial de ferramentas
            include "app/private/paginas/ferramentas/inicial-ferramentas.php";
        }
        break;
    case 'empresas':
        if ($b) {
            // Lógica para subpágina de empresas (a definir)
             
        } else {
            // Página inicial de empresas
            include "app/private/paginas/empresas/inicial-empresas.php";
        }
        break;
    case 'edit-empresa':
            if ($b) {
                switch ($b) {
                    case 'radar':
                        include "app/private/paginas/analise/radar/radar.php";
                        break;

                        case 'fluxo-caixa':
                            include "app/private/paginas/ferramentas/financeiro/fluxo-caixa.php";
                            break;
                    default:
                        // Caso não reconhecido, direciona para a página inicial de ferramentas
                        include "app/private/paginas/analise/radar/radar.php";
                        break;
                    }
            } else {
                // Página inicial de empresas
                include "app/private/paginas/analise/radar/radar.php";
            }
            break;
    default:
        // Se não houver parâmetro ou a categoria não for reconhecida, mostra a página inicial do painel
        include "app/private/paginas/inicial-painel.php";
        break;
}
?>

    
    </div>


    </body>

</html>