<div class="page-body">
    <div class="container-xl">
        <div class="row">

            <!-- AGENT AI FEPACOC -->
            <div class="col-md-3 mb-4">
                <div class="card rounded" style="border-top: 5px solid #28a745;"> <!-- Verde para gratuito -->
                    <img src="vendor/images/ferramentas/ferramenta1.png" class="card-img-top" alt="Agent AI Fepacoc">
                    <div class="card-body text-center">
                        <h5 class="card-title">Agent AI Fepacoc</h5>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="https://www.youtube.com/embed/dQw4w9WgXcQ"> <i class="fas fa-play me-2" ></i> Como Usar</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#meuOffcanvasAgent" aria-controls="meuOffcanvasAgent">
                             <i class="fas fa-check me-2" ></i> Ativar
                        </button>
                    </div>
                </div>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="meuOffcanvasAgent" aria-labelledby="meuOffcanvasLabel">
                        <div class="offcanvas-header">
                            <h2 class="offcanvas-title" id="offReceitaEditarLabel">Informações Necessárias</h2>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <form action="function/push/empresa-cadastro.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <input type="hidden" name="mes" id="mes" class="form-control" value="<?php echo date('d/m/Y') ?>">
                                    <input type="hidden" name="id" id="id" class="form-control">
                                    <input type="hidden" name="tabela" value="financeiro">
                                    <label class="form-label">Ative seu Agent IA Fepacoc</label>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"> Número WhatsApp </span>
                                            <input type="text" name="num_whats" id="num_whats" class="form-control value" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="input-group mb-2">
                                            <span class="input-group-text"> Senha Acesso </span>
                                            <input type="text" name="rec_online" id="rec_online" class="form-control value" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <a href="#" class="btn btn-secondary-lt w-50" data-bs-dismiss="offcanvas">Cancelar</a>
                                    <button type="submit" class="btn btn-cyan ms-auto float-end w-50 text-black " data-bs-dismiss="offcanvas">Salvar</button>
                                </div>
                            </form>
                        </div>
                </div>
            </div>

            <!-- ACOMPANHAR CAMPANHAS -->
            <div class="col-md-3 mb-4">
                <div class="card rounded" style="border-top: 5px solid #007bff;"> <!-- Azul para estratégia -->
                    <img src="vendor/images/ferramentas/ferramenta2.png" class="card-img-top" alt="Resultado Campanha">
                    <div class="card-body text-center">
                        <h5 class="card-title">Resultado Campanha</h5>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="https://www.youtube.com/embed/3GwjfUFyY6M"> <i class="fas fa-play me-2" ></i> Como Usar</button>
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#meuOffcanvasCamp" aria-controls="meuOffcanvasCamp">
                             <i class="fas fa-check me-2" ></i> Ativar
                        </button>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="meuOffcanvasCamp" aria-labelledby="meuOffcanvasLabel">
                            <div class="offcanvas-header">
                                <h2 class="offcanvas-title" id="offReceitaEditarLabel">Informações Necessárias</h2>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <form action="function/push/empresa-cadastro.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="mes" id="mes" class="form-control" value="<?php echo date('d/m/Y') ?>">
                                        <input type="hidden" name="id" id="id" class="form-control">
                                        <input type="hidden" name="tabela" value="financeiro">
                                        <label class="form-label">Ative seu acompanhamento de campanhas</label>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"> Site </span>
                                                <input type="text" name="site" id="site" class="form-control value" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"> Botão </span>
                                                <input type="text" name="botao" id="botao" class="form-control value" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a href="#" class="btn btn-secondary-lt w-50" data-bs-dismiss="offcanvas">Cancelar</a>
                                        <button type="submit" class="btn btn-cyan ms-auto float-end w-50 text-black " data-bs-dismiss="offcanvas">Salvar</button>
                                    </div>
                                </form>
                            </div>
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
<?php include_once "app/private/parts/footer.php" ?>
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