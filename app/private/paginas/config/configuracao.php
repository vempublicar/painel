<?php
$minhas_empresas = $_SESSION['minhas_empresas'];
if (isset($_GET['c'])) {
    $empresa_edit = base64_decode($_GET['c']);
    $cargo = '';
    $id = '';

    foreach ($minhas_empresas as $empresa) {
        if ($empresa['cnpj'] === $empresa_edit) {
            $empresaEditada = $empresa;
            break;  // Interrompe o loop uma vez que a empresa correspondente é encontrada
        }
    }

}
?>

            <?php
              if(isset($_GET['config'])){
                  if($_GET['config'] == 'conta'){
                    include "app/private/paginas/config/conta.php";
                  }
                  elseif($_GET['config'] == 'usuarios'){
                    include "app/private/paginas/config/usuarios.php";
                  }
                  elseif($_GET['config'] == 'plano'){
                    include "app/private/paginas/config/plano.php";
                  }
                  elseif($_GET['config'] == 'suporte'){
                    include "app/private/paginas/config/suporte.php";
                  }else{
                    include "app/private/paginas/config/conta.php";
                  }
              }else{
                include "app/private/paginas/config/conta.php";
              }

            ?>
          
            <!-- O conteúdo do conta.php será carregado aqui automaticamente -->
          
        
<?php include_once "app/private/parts/footer.php" ?>