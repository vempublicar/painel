<div class="page-body">
    <div class="container-xl">
        <div class="row">
            <!-- Card para Ferramenta 1 -->
            <div class="col-md-4 mb-4">
                <div class="card rounded" style="border-top: 5px solid #28a745;"> <!-- Verde para gratuito -->
                    <img src="vendor/images/ferramentas/ferramenta1.png" class="card-img-top" alt="Agent AI Fepacoc">
                    <div class="card-body text-center">
                        <h5 class="card-title">Agent AI Fepacoc</h5>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ">Como Usar</button>
                        <button type="button" class="btn btn-outline-secondary">Ativar</button>
                    </div>
                </div>
            </div>

            <!-- Card para Ferramenta 2 -->
            <div class="col-md-4 mb-4">
                <div class="card rounded" style="border-top: 5px solid #007bff;"> <!-- Azul para estratégia -->
                    <img src="vendor/images/ferramentas/ferramenta2.png" class="card-img-top" alt="Resultado Campanha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Resultado Campanha</h5>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="https://www.youtube.com/embed/3GwjfUFyY6M">Como Usar</button>
                        <button type="button" class="btn btn-outline-secondary">Ativar</button>
                    </div>
                </div>
            </div>

            <!-- Card para Ferramenta 3 -->
            <div class="col-md-4 mb-4">
                <div class="card rounded" style="border-top: 5px solid #d4af37;"> <!-- Dourada para ferramenta -->
                    <img src="vendor/images/ferramentas/ferramenta3.png" class="card-img-top" alt="Detalhamento de Receita">
                    <div class="card-body text-center">
                        <h5 class="card-title">Detalhamento de Receita</h5>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="https://www.youtube.com/embed/abcdef12345">Como Usar</button>
                        <button type="button" the "btn btn-outline-secondary">Ativar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal Genérica para Vídeos -->
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
        var button = event.relatedTarget; // Botão que acionou o modal
        var videoLink = button.getAttribute('data-video'); // Extrai o link do vídeo do atributo data-video
        var iframe = document.getElementById('videoFrame');
        iframe.src = videoLink + "?autoplay=1"; // Configura o src do iframe e adiciona autoplay
    });

    videoModal.addEventListener('hidden.bs.modal', function (event) {
        var iframe = document.getElementById('videoFrame');
        iframe.src = ""; // Limpa o src para interromper o vídeo ao fechar o modal
    });
</script>