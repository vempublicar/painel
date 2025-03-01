<?php 
$ferramentas = [
    [
        'imagem'     => 'vendor/images/ferramentas/ferramenta1.png',
        'nome'       => 'Fluxo de Caixa',
        'codigo-url' => '&fin=fluxo-caixa',
        'link-video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'plano'      => 'gratuito'
    ],
    [
        'imagem'     => 'vendor/images/ferramentas/ferramenta2.png',
        'nome'       => 'Detalhamento de Despesas',
        'codigo-url' => '&fin=detalhe-despesas',
        'link-video' => 'https://www.youtube.com/embed/3GwjfUFyY6M',
        'plano'      => 'estrategia'
    ],
    [
        'imagem'     => 'vendor/images/ferramentas/ferramenta3.png',
        'nome'       => 'Detalhamento de Receita',
        'codigo-url' => '&fin=detalhe-receita',
        'link-video' => 'https://www.youtube.com/embed/abcdef12345',
        'plano'      => 'ferramenta'
    ]
];
?>
<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <?php foreach ($ferramentas as $ferramenta): ?>
                <?php 
                    // Define a cor da borda de acordo com o plano
                    switch ($ferramenta['plano']) {
                        case 'gratuito':
                            $borderColor = "#28a745"; // verde
                            break;
                        case 'estrategia':
                            $borderColor = "#007bff"; // azul
                            break;
                        case 'ferramenta':
                            $borderColor = "#d4af37"; // dourada
                            break;
                        default:
                            $borderColor = "#cccccc"; // cor padrão
                            break;
                    }
                ?>
                <div class="col-md-3 mb-4">
                    <div class="card rounded" style="border-top: 5px solid <?php echo $borderColor; ?>;">
                        <!-- Imagem na parte superior -->
                        <img src="<?php echo $ferramenta['imagem']; ?>" class="card-img-top" alt="<?php echo $ferramenta['nome']; ?>">
                        <div class="card-body text-center">
                            <!-- Nome da ferramenta -->
                            <h5 class="card-title"><?php echo $ferramenta['nome']; ?></h5>
                            <div class="d-flex justify-content-around">
                                <!-- Botão Play: abre o modal e passa o link do vídeo via data-video -->
                                <button type="button" class="btn btn-outline-secondary w-50" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="<?php echo $ferramenta['link-video']; ?>">
                                <i class="bi bi-play me-2"></i>  Como Usar
                                </button>
                                <!-- Botão Adicionar: link direcionado conforme o 'codigo-url' -->
                                <button type="button" class="btn btn-outline-secondary w-50" data-bs-toggle="modal" data-bs-target="#confirmActivationModal" onclick="setFerramentaId(<?php echo $ferramenta['id']; ?>)">
                                    <i class="bi bi-plus me-2"></i> Ativar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<!-- Modal de Confirmação para Ativar Ferramenta -->
<div class="modal fade" id="confirmActivationModal" tabindex="-1" aria-labelledby="confirmActivationModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="confirmActivationModalLabel">Confirmar Ativação</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <form id="activateForm" action="app/functions/push/ativar_ferramenta.php" method="post">
          <input type="hidden" name="ferramentaId" id="ferramentaId" value="">
          <input type="hidden" name="empresaId" id="empresaId" value="<?php echo $empresa['id']; ?>">
          <p>Tem certeza que deseja ativar esta ferramenta?</p>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal para exibir o vídeo do YouTube -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">Assistir Vídeo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
          <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Script para carregar o vídeo no modal -->
<script>
    var videoModal = document.getElementById('videoModal');
    videoModal.addEventListener('show.bs.modal', function (event) {
        var button = event.relatedTarget;
        var videoLink = button.getAttribute('data-video');
        var iframe = document.getElementById('videoFrame');
        // Acrescenta parâmetro para autoplay
        iframe.src = videoLink + "?autoplay=1";
    });
    videoModal.addEventListener('hidden.bs.modal', function (event) {
        var iframe = document.getElementById('videoFrame');
        // Limpa o src para interromper o vídeo ao fechar o modal
        iframe.src = "";
    });
    function setFerramentaId(ferramentaId) {
        document.getElementById('ferramentaId').value = ferramentaId;
    }
    var confirmActivationModal = document.getElementById('confirmActivationModal');
        confirmActivationModal.addEventListener('hidden.bs.modal', function (event) {
            document.getElementById('ferramentaId').value = ''; // Limpa o campo para garantir que não fiquem dados antigos
        });
</script>
