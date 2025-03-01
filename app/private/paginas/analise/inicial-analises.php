
<?php 
include "app/functions/data/dados.php";


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

$minhasFerramentas = fetchFluxoFerramentas($empresa);

print_r($minhasFerramentas);

?>

<div class="page-body">
    <div class="container-xl">
        <div class="card p-2">
            <div class="col m-auto mb-3">
                <h2 class="text-start m-auto"><b class="text-info">Minhas Análises</b><br></h2>
            </div>        
            <div class="row">
                <!-- AGENT AI FEPACOC -->
                <div class="col-md-3 mb-4">
                    <div class="card rounded" style="border-top: 5px solid #28a745;"> <!-- Verde para gratuito -->
                        <img src="vendor/images/sistema/ferramentas/agent.png" class="card-img-top" alt="Agent AI Fepacoc">
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
                                <form action="app/functions/push/cadastrar_dados.php" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="cnpj" id="cnpj" value="<?= $_GET['c'] ?>" class="form-control" readonly>
                                        <input type="hidden" name="empresa" id="empresa" value="<?= $id ?>" class="form-control" readonly>
                                        <!-- Campo para identificar se é edição (id preenchido) -->
                                        <input type="hidden" name="id" value="" class="form-control">
                                        <input type="hidden" name="tabela" value="ferramentas">
                                        <input type="hidden" name="indicador" value="agent-fepacoc">
                                        <input type="hidden" name="status" value="ativo">
                                        <input type="hidden" name="retorno" value="null">
                                        <input type="hidden" name="calculo" value="periodo">

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
                        <img src="vendor/images/sistema/ferramentas/camp.png" class="card-img-top" alt="Resultado Campanha">
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
                                    <form action="app/functions/push/cadastrar_dados.php" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                        <input type="hidden" name="cnpj" id="cnpj" value="<?= $_GET['c'] ?>" class="form-control" readonly>
                                        <input type="hidden" name="empresa" id="empresa" value="<?= $id ?>" class="form-control" readonly>
                                        <!-- Campo para identificar se é edição (id preenchido) -->
                                        <input type="hidden" name="id" value="" class="form-control">
                                        <input type="hidden" name="tabela" value="ferramentas">
                                        <input type="hidden" name="indicador" value="ads-campanha">
                                        <input type="hidden" name="status" value="ativo">
                                        <input type="hidden" name="retorno" value="null">
                                        <input type="hidden" name="calculo" value="periodo">

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
</div>