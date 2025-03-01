
<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "app/functions/data/dados.php";


$ferramentas = [
    [
        'nome' => 'Agent AI Fepacoc',
        'imagem' => 'vendor/images/sistema/ferramentas/agent.png',
        'indicador' => 'agent-fepacoc',
        'video' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
        'borderColor' => '#28a745',
        'campos' => [
            ['tipo' => 'text', 'nome' => 'num_whats', 'label' => 'Número WhatsApp', 'required' => true],
            ['tipo' => 'text', 'nome' => 'rec_online', 'label' => 'Senha Acesso', 'required' => true]
        ]
    ],
    [
        'nome' => 'Resultado Campanha',
        'imagem' => 'vendor/images/sistema/ferramentas/camp.png',
        'indicador' => 'ads-campanha',
        'video' => 'https://www.youtube.com/embed/3GwjfUFyY6M',
        'borderColor' => '#007bff',
        'campos' => [
            ['tipo' => 'text', 'nome' => 'site', 'label' => 'URL do Site', 'required' => true],
            ['tipo' => 'text', 'nome' => 'botao', 'label' => 'Caminho Botão', 'required' => true],
            ['tipo' => 'select', 'nome' => 'tipo_botao', 'label' => 'Tipo de Botão', 'options' => ['Compra', 'Leia Mais', 'Inscreva-se'], 'required' => true]
        ]
    ]
];

function renderizarCampos($campos) {
    $html = '';
    foreach ($campos as $campo) {
        if ($campo['tipo'] === 'text') {
            $html .= "<div class='input-group mb-2'>
                        <span class='input-group-text'>{$campo['label']}</span>
                        <input type='{$campo['tipo']}' name='{$campo['nome']}' class='form-control' required='{$campo['required']}'>
                      </div>";
        } elseif ($campo['tipo'] === 'select') {
            $options = '';
            foreach ($campo['options'] as $option) {
                $options .= "<option>$option</option>";
            }
            $html .= "<div class='input-group mb-2'>
                        <span class='input-group-text'>{$campo['label']}</span>
                        <select name='{$campo['nome']}' class='form-control' required='{$campo['required']}'>
                            $options
                        </select>
                      </div>";
        }
    }
    return $html;
}


function gerarCardFerramenta($ferramenta, $minhasFerramentas, $empresaId, $empresaCnpj) {
    $ativo = false;
    $ferramentaId = '';
    $status = 'ativo';

    foreach ($minhasFerramentas as $agent) {
        if ($agent['indicador'] === $ferramenta['indicador'] && $agent['status'] === 'ativo') {
            $ativo = true;
            $ferramentaId = $agent['id'];
            $status = 'inativo';
            break;
        }
    }

    $botaoTexto = $ativo ? 'Desativar' : 'Ativar';
    $offcanvasId = "meuOffcanvas" . str_replace('-', '', ucfirst($ferramenta['indicador']));
    $camposHtml = renderizarCampos($ferramenta['campos']);

    echo <<<HTML
    <div class="col-md-3 mb-4">
        <div class="card rounded" style="border-top: 5px solid {$ferramenta['borderColor']}">
            <img src="{$ferramenta['imagem']}" class="card-img-top" alt="{$ferramenta['nome']}">
            <div class="card-body text-center">
                <h5 class="card-title">{$ferramenta['nome']}</h5>
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="{$ferramenta['video']}">
                    <i class="fas fa-play me-2"></i> Como Usar
                </button>
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="offcanvas" data-bs-target="#$offcanvasId" aria-controls="$offcanvasId">
                    <i class="fas fa-check me-2"></i> $botaoTexto
                </button>
            </div>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="$offcanvasId" aria-labelledby="{$offcanvasId}Label">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="{$offcanvasId}Label">Informações Necessárias</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="app/functions/push/cadastrar_dados.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="cnpj" value="$empresaCnpj" class="form-control" readonly>
                    <input type="hidden" name="empresa" value="$empresaId" class="form-control" readonly>
                    <input type="hidden" name="id" value="$ferramentaId" class="form-control">
                    <input type="hidden" name="tabela" value="ferramentas">
                    <input type="hidden" name="indicador" value="{$ferramenta['indicador']}">
                    <input type="hidden" name="status" value="$status">
                    <input type="hidden" name="retorno" value="lista-ferramentas">
                    <input type="hidden" name="calculo" value="periodo">
                    <input type="hidden" name="mes" value="0">
                    <input type="hidden" name="ano" value="0">
                    $camposHtml
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary float-end">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    HTML;
}



$minhas_empresas = $_SESSION['minhas_empresas'];
if (isset($_GET['c'])) {
    $empresa_edit = base64_decode($_GET['c']);
    $cargo = '';
    $id = '';

    foreach ($minhas_empresas as $empresa) {
        if ($empresa['cnpj'] === $empresa_edit) {
            $cargo = $empresa['cargo'];
            $id = $empresa['id'];
            break;  // Interrompe o loop uma vez que a empresa correspondente é encontrada
        }
    }

}

$minhasFerramentas = fetchFluxoFerramentas($id);

print_r($minhasFerramentas);

?>

<div class="page-body">
    <div class="container-xl">
        <div class="card p-2">
            <div class="col m-auto mb-3">
                <h2 class="text-start m-auto"><b class="text-info">Minhas Análises</b><br></h2>
            </div>
            <div class="row">
                <?php foreach ($ferramentas as $ferramenta) {
                    gerarCardFerramenta($ferramenta, $minhasFerramentas, $id, $_GET['c']);
                } ?>
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
<?php  include_once "app/private/parts/footer.php"; ?>
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
</script>