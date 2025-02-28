<div class="page-body">
    <div class="container-xl">
        <div class="card mt-6">
            <div class="row g-0">
                <div class="col-12 col-md-3 border-end">
                    <div class="card-body">
                        <h4 class="subheader">Minha Conta</h4>
                        <div class="list-group list-group-transparent">
                            <a href="app/private/paginas/config/conta.php" class="list-group-item list-group-item-action d-flex align-items-center">Conta</a>
                            <a href="app/private/paginas/config/usuarios.php" class="list-group-item list-group-item-action d-flex align-items-center">Usuários</a>
                            <a href="app/private/paginas/config/plano.php" class="list-group-item list-group-item-action d-flex align-items-center active">Plano</a>
                            <a href="app/private/paginas/config/suporte.php" class="list-group-item list-group-item-action d-flex align-items-center">Suporte</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-9 d-flex flex-column" id="content-area" >
                    <div class="area">

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
          
          // Carrega o conteúdo via fetch (certifique-se de que os arquivos existem e retornam o HTML esperado)
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
    });
  </script>