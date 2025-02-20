
<?php include "app/private/parts/head.php" ?>

<body class=" layout-fluid" >
    <script src="vendor/js/demo-theme.min.js"></script>
    <div class="page" id="page-content">
    </div>
    <?php include "app/private/parts/header.php" ?>
    <?php include "app/private/parts/submenu.php" ?>

    <?Php
        //lógica para apresentar conteúdo:
         if(isset($_GET['a'])){ 
            //verifica qual categoria o usuário está
            if($_GET['a'] == 'videos')){
                if(isset($_GET['b'])){
                    //verifica qual sub-pagina o usuário

                }else{
                    //página inicial de vídeos
                    include "app/private/paginas/videos/inicial-videos.php";
                }


            }elseif($_GET['a'] == 'ferramentas')){
                if(isset($_GET['b'])){
                    //verifica qual sub-pagina o usuário

                }else{
                    //página inicial de ferramentas
                    include "app/private/paginas/ferramentas/inicial-ferramentas.php";
                }


            }elseif($_GET['a'] == 'empresas')){
                if(isset($_GET['b'])){
                    //verifica qual sub-pagina o usuário

                }else{
                    //página inicial de empresas
                    include "app/private/paginas/empresas/inicial-empresas.php";
                }

            }

            else{
                include "app/private/paginas/inicial-painel.php";
            }

         }else{
            //PAGINA INICIAL DO PAINEL
            include "app/private/paginas/inicial-painel.php";
         }

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