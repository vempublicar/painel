
<?php include "app/private/parts/head.php" ?>

<body class=" layout-fluid" >
    <script src="vendor/js/demo-theme.min.js"></script>
    <div class="page" id="page-content">
    </div>
    <?php include "app/private/parts/header.php" ?>
    <?php include "app/private/parts/submenu.php" ?>

    <?php 
    <?php
    // Obter os parâmetros GET com valores padrão null
    $a = $_GET['a'] ?? null;
    $b = $_GET['b'] ?? null;
    
    // Verifica a categoria e inclui a página apropriada
    switch ($a) {
        case 'videos':
            if ($b) {
                // Lógica para subpágina de vídeos (a definir)
                // include "app/private/paginas/videos/subpagina.php";
            } else {
                // Página inicial de vídeos
                include "app/private/paginas/videos/inicial-videos.php";
            }
            break;
            
        case 'ferramentas':
            if ($b) {
                // Lógica para subpágina de ferramentas (a definir)
                // include "app/private/paginas/ferramentas/subpagina.php";
            } else {
                // Página inicial de ferramentas
                include "app/private/paginas/ferramentas/inicial-ferramentas.php";
            }
            break;
            
        case 'empresas':
            if ($b) {
                // Lógica para subpágina de empresas (a definir)
                // include "app/private/paginas/empresas/subpagina.php";
            } else {
                // Página inicial de empresas
                include "app/private/paginas/empresas/inicial-empresas.php";
            }
            break;
            
        default:
            // Se não houver parâmetro ou a categoria não for reconhecida, mostra a página inicial do painel
            include "app/private/paginas/inicial-painel.php";
            break;
    }
    ?>
    

    ?>


    <script src="vendor/libs/apexcharts/dist/apexcharts.min.js" defer></script>
    <script src="vendor/libs/jsvectormap/dist/js/jsvectormap.min.js" defer></script>
    <script src="vendor/libs/jsvectormap/dist/maps/world.js" defer></script>
    <script src="vendor/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
    <script src="vendor/libs/star-rating.js/dist/star-rating.js" defer></script>
    <script src="vendor/libs/tom-select/dist/js/tom-select.base.js" defer></script>
    <!-- Tabler Core -->
    <script src="vendor/js/tabler.min.js" defer></script>
    <script src="vendor/js/demo.min.js" defer></script>
    <script src="https://unpkg.com/imask"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
    </body>
</html>