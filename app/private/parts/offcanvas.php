
<!-- NOTIFICAÇÃO -->

<?php
include "function/data/dados-usuario.php";
$userId = $_SESSION['user_id'];
$dadosUpgrade = dadosPrimario('suporte', 'suporte-upgrade',$userId);
$dadosSuporte = dadosPrimario('suporte', 'suporte-texto',$userId);

if (isset($dadosUpgrade[0]['json'])) {
    foreach ($dadosUpgrade as $key => $value) {
        if ($value['status'] == 'ativo') {
            $upgrade = [
                'id' => $value['id'],
                'status' => $value['status'],
                'retorno' => $value['retorno'],
                'json' => $value['json'],
                'data' => $value['created_at']
            ];
        }
    }
}

if (isset($dadosSuporte[0]['json'])) {
    foreach ($dadosSuporte as $key => $value) {
        if ($value['status'] == 'ativo') {
            $suporte = [
                'id' => $value['id'],
                'status' => $value['status'],
                'retorno' => $value['retorno'],
                'json' => $value['json'],
                'data' => $value['created_at']
            ];
        }
    }
}
?>


<div class="offcanvas offcanvas-start" tabindex="-1" id="offNotifica" aria-labelledby="offcanvasStartLabel">
    <div class="offcanvas-header">
        <h2 class="mb-4">Notificação</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="list-group list-group-flush list-group-hoverable">
        <?php if (isset($upgrade)) {
        ?>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto"><span class="status-dot status-dot-animated bg-orange d-block"></span></div>
                    <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Upgrade</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                            Recebemos sua solicitação, em breve alguém da equipe entrará em contato.
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="upgrade&id=<?= base64_encode($upgrade['id']) ?>" target="_blank" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-minus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                                <path d="M16 19h6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
        <?php if (isset($suporte)) {
            // print_r($suporte);
        ?>
            <div class="list-group-item">
                <div class="row align-items-center">
                    <div class="col-auto"><span class="status-dot status-dot-animated bg-success d-block"></span></div>
                    <div class="col text-truncate">
                        <a href="#" class="text-body d-block">Suporte</a>
                        <div class="d-block text-secondary text-truncate mt-n1">
                            A equipe de suporte já recebeu sua solicitação, logo será analisada.
                        </div>
                    </div>
                    <div class="col-auto">
                        <a href="suporte&id=<?= base64_encode($suporte['id']) ?>" target="_blank" class="list-group-item-actions">
                            <!-- Download SVG icon from http://tabler-icons.io/i/star -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil-minus">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                <path d="M13.5 6.5l4 4" />
                                <path d="M16 19h6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

