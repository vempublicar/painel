<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
  <div class="offcanvas-header">
    <h2 class="offcanvas-title" id="offcanvasEndLabel">FEPACOC</h2>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Financeiro&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Financeiro") {
                echo 'btn-outline-cyan';
              } ?> w-100 mb-3">
        Financeiro
      </a>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Estrutura&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Estrutura") {
                echo 'btn-outline-orange';
              } ?> w-100 mb-3">
        Estrutura </a>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Produto&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Produto") {
                echo 'btn-outline-yellow';
              } ?> w-100 mb-3">
        Produto </a>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Anuncio&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Anuncio") {
                echo 'btn-outline-indigo';
              } ?> w-100 mb-3">
        Anúncio </a>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Cliente&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Cliente") {
                echo 'btn-outline-pink';
              } ?> w-100 mb-3">
        Cliente </a>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Operacional&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Operacional") {
                echo 'btn-outline-lime';
              } ?> w-100 mb-3">
        Operacional </a>
      <a href="dashboard&empresa=<?php echo $empresa_selecionada ?>&n=<?php echo $empresa_nome ?>&p=Consistencia&d=Resumo" class="btn  
              <?php if (isset($_GET['p']) && $_GET['p'] == "Consistencia") {
                echo 'btn-outline-green';
              } ?> w-100 mb-3">
        Consistência </a>
    </div>
  </div>
</div>