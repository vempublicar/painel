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
print_r($empresa_edit);
?>
<div class="page-body">
  <div class="container-xl">
    <div class="card ">
      <div class="row g-0">
        <div class="col-12 col-md-3 border-end">
          <div class="card-body">
            <h4 class="subheader">Minha Conta</h4>
            <div class="list-group list-group-transparent">
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=conta" class="list-group-item list-group-item-action d-flex align-items-center active">Conta</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=usuarios" class="list-group-item list-group-item-action d-flex align-items-center">Usuários</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=plano" class="list-group-item list-group-item-action d-flex align-items-center">Plano</a>
              <a href="painel&a=edit-empresa&b=configuracao&c=<?= $_GET['c'] ?>&config=suporte" class="list-group-item list-group-item-action d-flex align-items-center">Suporte</a>
            </div>
          </div>
        </div>
          <div class="col-sm-9 d-flex flex-column" >
            <?php
              if(isset($_GET['config'])){
                  if($_GET['config'] == 'conta'){
                    include "app/private/paginas/config/conta.php";
                  }
                  if($_GET['config'] == 'usuarios'){
                    include "app/private/paginas/config/usuarios.php";
                  }
                  if($_GET['config'] == 'plano'){
                    include "app/private/paginas/config/plano.php";
                  }
                  if($_GET['config'] == 'suporte'){
                    include "app/private/paginas/config/suporte.php";
                  }
              }

            ?>
          </div>
      </div>
    </div>
  </div>
</div>
          
            <!-- O conteúdo do conta.php será carregado aqui automaticamente -->
          
        
<?php include_once "app/private/parts/footer.php" ?>
