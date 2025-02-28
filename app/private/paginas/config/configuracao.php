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
print_r($empresaEditada);
?>
<div class="page-body">
  <div class="container-xl">
    <div class="card ">
      <div class="row g-0">
        <div class="col-12 col-md-3 border-end">
          <div class="card-body">
            <h4 class="subheader">Minha Conta</h4>
            <div class="list-group list-group-transparent">
              <a href="app/private/paginas/config/conta.php" class="list-group-item list-group-item-action d-flex align-items-center active">Conta</a>
              <a href="app/private/paginas/config/usuarios.php" class="list-group-item list-group-item-action d-flex align-items-center">Usuários</a>
              <a href="app/private/paginas/config/plano.php" class="list-group-item list-group-item-action d-flex align-items-center">Plano</a>
              <a href="app/private/paginas/config/suporte.php" class="list-group-item list-group-item-action d-flex align-items-center">Suporte</a>
            </div>
          </div>
        </div>
        <div class="col-sm-9 d-flex flex-column" id="content-area">
          <div class="area">
            <!-- O conteúdo do conta.php será carregado aqui automaticamente -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once "app/private/parts/footer.php" ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('.list-group-item');
    const contentArea = document.getElementById('content-area');

    links.forEach(link => {
      link.addEventListener('click', function(event) {
        event.preventDefault();
        
        // Atualiza a classe 'active' para destacar o item selecionado
        links.forEach(item => item.classList.remove('active'));
        this.classList.add('active');
        
        // Exibe um indicador de carregamento (opcional)
        contentArea.innerHTML = '<div class="area"><p>Carregando...</p></div>';
        
        // Obtém a URL do link
        const url = this.getAttribute('href');
        
        // Carrega o conteúdo via fetch
        fetch(url)
          .then(response => {
            if (!response.ok) {
              throw new Error('Erro na requisição: ' + response.status);
            }
            return response.text();
          })
          .then(data => {
            contentArea.innerHTML = data;
          })
          .catch(error => {
            contentArea.innerHTML = '<div class="area"><p>Erro ao carregar o conteúdo.</p></div>';
            console.error('Erro:', error);
          });
      });
    });

    // Pré-carrega o conteúdo do conta.php ao carregar a página
    const defaultUrl = "app/private/paginas/config/conta.php";
    fetch(defaultUrl)
      .then(response => {
        if (!response.ok) {
          throw new Error('Erro na requisição: ' + response.status);
        }
        return response.text();
      })
      .then(data => {
        contentArea.innerHTML = data;
      })
      .catch(error => {
        contentArea.innerHTML = '<div class="area"><p>Erro ao carregar o conteúdo.</p></div>';
        console.error('Erro:', error);
      });
  });
</script>
