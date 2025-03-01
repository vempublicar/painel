
<div class="page-body">
    <div class="container-xl">
        <div class="card p-2">
            <div class="col m-auto mb-3">
                <h2 class="text-start m-auto">Análises<br></h2>
            </div>        
            <div class="row">
                <!-- AGENT AI FEPACOC -->
                <?php
                    // Definição do array com análises de exemplo
                    $analises = [
                        [
                            'id' => 1,
                            'nome' => 'Análise Financeira',
                            'botao' => 'painel&a=edit-empresa&b=analise&c='.$_GET['c'],
                            'imagem' => 'img/analise_financeira.jpg',
                            'video' => 'videos/analise_financeira.mp4',
                            'borderColor' => '#28a745'
                        ],
                        [
                            'id' => 2,
                            'nome' => 'Análise de Mercado',
                            'imagem' => 'img/analise_mercado.jpg',
                            'video' => 'videos/analise_mercado.mp4',
                            'borderColor' => '#007bff'
                        ],
                        [
                            'id' => 3,
                            'nome' => 'Análise de Riscos',
                            'imagem' => 'img/analise_riscos.jpg',
                            'video' => 'videos/analise_riscos.mp4',
                            'borderColor' => '#ffc107'
                        ],
                        [
                            'id' => 4,
                            'nome' => 'Análise de Desempenho',
                            'imagem' => 'img/analise_desempenho.jpg',
                            'video' => 'videos/analise_desempenho.mp4',
                            'borderColor' => '#dc3545'
                        ]
                    ];

                    // Exemplo de loop para exibir cada análise em um card
                    foreach ($analises as $analise):
                    ?>
                    <div class="col-md-3 mb-4">
                        <div class="card rounded" style="border-top: 5px solid <?= $analise['borderColor']; ?>">
                            <img src="<?= $analise['imagem']; ?>" class="card-img-top" alt="<?= $analise['nome']; ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?= $analise['nome']; ?></h5>
                                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="<?= $analise['video']; ?>">
                                    <i class="fas fa-play me-2"></i> Entenda
                                </button>
                                <a href="<?= $analise['botao']; ?>" class="btn btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#<?= $offcanvasId; ?>" aria-controls="<?= $offcanvasId; ?>">
                                    <i class="fas fa-check me-2"></i> Acessar
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>