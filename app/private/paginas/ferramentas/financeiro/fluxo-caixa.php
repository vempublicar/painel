
<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
include "app/functions/data/dados.php";

$minhas_empresas = $_SESSION['minhas_empresas'];

function canAccess($userRole, $allowedRoles) {
    return in_array($userRole, $allowedRoles);
}
function convertBRToFloat($value) {
    $value = str_replace('.', '', $value); // Remove separador de milhar
    $value = str_replace(',', '.', $value); // Substitui a vírgula pelo ponto decimal
    return floatval($value);
}

// Defina os cargos permitidos para a operação
$permiteInserir = ['proprietario', 'total', 'financeiro'];
$permiteVisualizar = ['proprietario', 'total', 'financeiro'];  // Corrigido

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

$editar = '';
$visualizar = '';

if (!canAccess($cargo, $permiteInserir)) {
    $editar = 'd-none';
}
if (!canAccess($cargo, $permiteVisualizar)) {
    $visualizar = 'd-none';
}
$indicador = 'fluxo-caixa';
$financeiro = fetchFluxoFinanceiro($id, $indicador);

$dadosParaGrafico = [
    "meses" => [],
    "faturamento_bruto" => [],
    "despesas_brutas" => [],
    "receita_liquida" => [],
    "impostos_periodo" => []
];

foreach ($dadosFinanceiros as $item) {
    $mesAno = sprintf("%02d-%d", $item['mes'], $item['ano']);
    
    $fat_presencial = floatval(str_replace(',', '.', str_replace('.', '', $item['json_dados']['fat_presencial'])));
    $fat_online = floatval(str_replace(',', '.', str_replace('.', '', $item['json_dados']['fat_online'])));
    $desp_bruta = floatval(str_replace(',', '.', str_replace('.', '', $item['json_dados']['desp_bruta'])));
    $rec_liquida = floatval(str_replace(',', '.', str_replace('.', '', $item['json_dados']['rec_liquida'])));
    $imp_periodo = floatval(str_replace(',', '.', str_replace('.', '', $item['json_dados']['imp_periodo'])));

    $faturamento_bruto = $fat_presencial + $fat_online;

    $dadosParaGrafico['meses'][] = $mesAno;
    $dadosParaGrafico['faturamento_bruto'][] = $faturamento_bruto;
    $dadosParaGrafico['despesas_brutas'][] = $desp_bruta;
    $dadosParaGrafico['receita_liquida'][] = $rec_liquida;
    $dadosParaGrafico['impostos_periodo'][] = $imp_periodo;
}
?>

    <div class="container <?= $visualizar ?> mt-5">
        <h3 class="text-center">Dashboard Financeiro</h3>
        <div class="row">
            <div class="col-md-6">
                <canvas id="chart-receita-mensal"></canvas>
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="pieChart"></canvas>
            </div>
        </div>

        <!-- Lista dos últimos registros -->
        <div class="mt-5">
        <h4>Últimos Registros</h4>
        <?php if (!empty($financeiro)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Status</th>
                            <th>Mês</th>
                            <th>Ano</th>
                            <th>Faturamento</th>
                            <th>Despesa</th>
                            <th>Editar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($financeiro as $registro) : ?>
                            <?php
                            // Decodifica o JSON para obter os dados extras
                            $jsonDados = json_decode($registro['json_dados'], true);
                            $desp_bruta = isset($jsonDados['desp_bruta']) ? $jsonDados['desp_bruta'] : '-';
                            $fat_presencial = isset($jsonDados['fat_presencial']) ? convertBRToFloat($jsonDados['fat_presencial']) : 0;
                            $fat_online     = isset($jsonDados['fat_online']) ? convertBRToFloat($jsonDados['fat_online']) : 0;
                            $totalFaturamento = $fat_presencial + $fat_online;
                            ?>
                            <tr>
                                <td><?= $registro['status'] ?></td>
                                <td><?= $registro['mes'] ?></td>
                                <td><?= $registro['ano'] ?></td>
                                <td><?= number_format($totalFaturamento, 2, ',', '.') ?></td>
                                <td><?= $desp_bruta ?></td>
                                <td>
                                    <!-- Botão para editar -->
                                    <a href="#" 
                                    class="btn edit-record" 
                                    title="Editar"
                                    data-id="<?= $registro['id'] ?>"
                                    data-mes="<?= $registro['mes'] ?>"
                                    data-ano="<?= $registro['ano'] ?>"
                                    data-fat_presencial="<?= isset($jsonDados['fat_presencial']) ? $jsonDados['fat_presencial'] : '' ?>"
                                    data-fat_online="<?= isset($jsonDados['fat_online']) ? $jsonDados['fat_online'] : '' ?>"
                                    data-rec_liquida="<?= isset($jsonDados['rec_liquida']) ? $jsonDados['rec_liquida'] : '' ?>"
                                    data-desp_bruta="<?= isset($jsonDados['desp_bruta']) ? $jsonDados['desp_bruta'] : '' ?>"
                                    data-imp_periodo="<?= isset($jsonDados['imp_periodo']) ? $jsonDados['imp_periodo'] : '' ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>                                
                                </td>
                                <td>
                                    <!-- Botão para desativar -->
                                    <a href="#"
                                        class="btn open-confirm-status-modal" 
                                        title="<?= ($registro['status'] == 'ativo') ? 'Desativar' : 'Ativar' ?>"
                                        data-status-id="<?= $registro['id'] ?>"
                                        data-status-new="<?= ($registro['status'] == 'ativo') ? 'inativo' : 'ativo' ?>"
                                        data-status-cnpj="<?= isset($jsonDados['cnpj']) ? $jsonDados['cnpj'] : '' ?>"
                                        data-status-indicador="<?= $registro['indicador'] ?>"
                                        data-status-redirect="painel&a=edit-empresa&b=<?= $registro['indicador'] ?>&c=<?= isset($jsonDados['cnpj']) ? $jsonDados['cnpj'] : '' ?>">
                                            <i class="fas <?= ($registro['status'] == 'ativo') ? 'fa-ban' : 'fa-check' ?>"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php else : ?>
            <p class="text-center">Nenhum registro encontrado.</p>
        <?php endif; ?>
    </div>
    <select id="periodo">
        <option value="3">Últimos 3 meses</option>
        <option value="6">Últimos 6 meses</option>
        <option value="12" selected>Últimos 12 meses</option>
    </select>
    <!-- Modal de Confirmação de Alteração de Status -->
    <div class="modal fade" id="confirmStatusModal" tabindex="-1" aria-labelledby="confirmStatusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmStatusModalLabel">Confirmação de Alteração de Status</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
        </div>
        <div class="modal-body">
            <p id="confirmText">Deseja realmente alterar o status deste registro?</p>
            <!-- Formulário para alteração de status -->
            <form action="app/functions/push/stauts_dados.php" method="post" id="formAlterarStatus">
                <input type="hidden" name="id" id="modalId">
                <input type="hidden" name="status" id="modalStatus">
                <input type="hidden" name="cnpj" id="modalCnpj">
                <input type="hidden" name="indicador" id="modalIndicador">
                <input type="hidden" name="redirectUrl" id="modalRedirectUrl">
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" form="formAlterarStatus" class="btn btn-primary">Confirmar</button>
        </div>
        </div>
    </div>
    </div>

    <div class="floating-button <?= $editar ?>">
        <div class="linha-background bg-cyan"></div>
        <a class="btn btn-cyan btn-icon text-black" data-bs-toggle="offcanvas" href="#offReceitaEditar" role="button" aria-controls="offcanvasEnd" style="height: 60px; width: 60px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-plus">
                <path stroke="none" d="M0 0h24V24H0z" fill="none" />
                <path d="M12 5l0 14" />
                <path d="M5 12l14 0" />
            </svg>
        </a>
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offReceitaEditar" aria-labelledby="offReceitaEditarLabel">
        <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offReceitaEditarLabel">Cadastrar Fluxo</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form action="app/functions/push/cadastrar_dados.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <!-- cnpj vindo da URL e empresa logada -->
                    <input type="hidden" name="cnpj" id="cnpj" value="<?= $_GET['c'] ?>" class="form-control" readonly>
                    <input type="hidden" name="empresa" id="empresa" value="<?= $id ?>" class="form-control" readonly>
                    <!-- Campo para identificar se é edição (id preenchido) -->
                    <input type="hidden" name="id" id="recordId" value="" class="form-control">
                    <input type="hidden" name="tabela" value="financeiro">
                    <input type="hidden" name="indicador" value="fluxo-caixa">
                    <input type="hidden" name="status" value="ativo">
                    <input type="hidden" name="retorno" value="null">
                    <input type="hidden" name="calculo" value="periodo">

                    <label class="form-label">Data do Resultado</label>
                    <div class="mb-3 col-6">
                        <label class="form-label">Mês</label>
                        <select name="mes" id="mes" class="form-select" required>
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                    </div>
                    <div class="mb-3 col-6">
                        <label class="form-label">Ano</label>
                        <select name="ano" id="ano" class="form-select" required>
                            <option value="2024">2024</option>
                            <option value="2025" selected>2025</option>
                            <option value="2026">2026</option>
                        </select>
                    </div>

                    <label class="form-label">Faturamento Bruto</label>
                    <div class="col-sm-12">
                        <div class="input-group mb-2">
                            <span class="input-group-text text-center" style="width: 150px;">Vendas Presencial</span>
                            <input type="text" name="fat_presencial" id="fat_presencial" class="form-control value" required>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="input-group mb-2">
                            <span class="input-group-text text-center" style="width: 150px;">Vendas Online</span>
                            <input type="text" name="fat_online" id="fat_online" class="form-control value" required>
                        </div>
                    </div>

                    <label class="form-label">Faturado no Mês <small class="text-secondary">(Receita que entrou no caixa)</small></label>
                    <div class="col-sm-12">
                        <div class="input-group mb-2">
                            <span class="input-group-text text-center" style="width: 150px;">Entrada de Caixa</span>
                            <input type="text" name="rec_liquida" id="rec_liquida" class="form-control value" required>
                        </div>
                    </div>

                    <label class="form-label">Despesa Bruta</label>
                    <div class="col-sm-12">
                        <div class="input-group mb-2">
                            <span class="input-group-text text-center" style="width: 150px;">Saída de Caixa</span>
                            <input type="text" name="desp_bruta" id="desp_bruta" class="form-control value" required>
                        </div>
                    </div>

                    <label class="form-label">Impostos</label>
                    <div class="col-sm-12">
                        <div class="input-group mb-2">
                            <span class="input-group-text text-center" style="width: 150px;">Equivalente Período</span>
                            <input type="text" name="imp_periodo" id="imp_periodo" class="form-control value" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <a href="#" class="btn btn-secondary-lt w-50" data-bs-dismiss="offcanvas">Cancelar</a>
                    <button type="submit" class="btn btn-cyan ms-auto float-end w-50 text-black">Salvar</button>
                </div>
            </form>
        </div>
    </div>

    <?php include_once "app/private/parts/footer.php" ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Seleciona o modal e cria a instância do Bootstrap Modal para o status
            var confirmStatusModalEl = document.getElementById('confirmStatusModal');
            var bsModalStatus = new bootstrap.Modal(confirmStatusModalEl);
            
            // Associa o evento aos botões com a classe "open-confirm-status-modal"
            document.querySelectorAll('.open-confirm-status-modal').forEach(function(button) {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Obtém os dados a partir dos atributos personalizados (data-status-*)
                    var recordId   = this.getAttribute('data-status-id');
                    var newStatus  = this.getAttribute('data-status-new');
                    var cnpj       = this.getAttribute('data-status-cnpj');
                    var indicador  = this.getAttribute('data-status-indicador');
                    var redirectUrl= this.getAttribute('data-status-redirect');
                    
                    // Popula os campos do formulário no modal
                    document.getElementById('modalId').value = recordId;
                    document.getElementById('modalStatus').value = newStatus;
                    document.getElementById('modalCnpj').value = cnpj;
                    document.getElementById('modalIndicador').value = indicador;
                    document.getElementById('modalRedirectUrl').value = redirectUrl;
                    
                    // Atualiza o texto de confirmação de acordo com a ação
                    var confirmText = (newStatus === 'inativo') 
                        ? "Deseja realmente desativar este registro?" 
                        : "Deseja realmente ativar este registro?";
                    document.getElementById('confirmText').textContent = confirmText;
                    
                    // Exibe o modal de confirmação
                    bsModalStatus.show();
                });
            });
        });
    </script>
    <script>
        // Aguarda o carregamento do DOM
        document.addEventListener("DOMContentLoaded", function() {
            // Seleciona todos os botões de edição (que devem ter a classe "edit-record")
            const editButtons = document.querySelectorAll('.edit-record');
            editButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Extrai os dados do registro a partir dos atributos data-*
                    const recordId     = this.getAttribute('data-id');
                    const mes          = this.getAttribute('data-mes');
                    const ano          = this.getAttribute('data-ano');
                    const fatPresencial= this.getAttribute('data-fat_presencial');
                    const fatOnline    = this.getAttribute('data-fat_online');
                    const recLiquida   = this.getAttribute('data-rec_liquida');
                    const despBruta    = this.getAttribute('data-desp_bruta');
                    const impPeriodo   = this.getAttribute('data-imp_periodo');

                    // Preenche os campos do formulário no offcanvas
                    document.getElementById('recordId').value = recordId;
                    document.getElementById('mes').value = mes;
                    document.getElementById('ano').value = ano;
                    document.getElementById('fat_presencial').value = fatPresencial;
                    document.getElementById('fat_online').value = fatOnline;
                    document.getElementById('rec_liquida').value = recLiquida;
                    document.getElementById('desp_bruta').value = despBruta;
                    document.getElementById('imp_periodo').value = impPeriodo;

                    // Abre o offcanvas utilizando a API do Bootstrap
                    const offcanvasElement = document.getElementById('offReceitaEditar');
                    const bsOffcanvas = new bootstrap.Offcanvas(offcanvasElement);
                    bsOffcanvas.show();
                });
            });
        });
    </script>
    <script>
        const maskOptions = {
            mask: Number,
            scale: 2,
            signed: false,
            thousandsSeparator: '.',
            padFractionalZeros: true,
            normalizeZeros: true,
            radix: ',',
            mapToRadix: ['.'],
            min: -9999999999999.99,
            max: 9999999999999.99
        };

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('input.value').forEach(input => IMask(input, maskOptions));
        });

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var dadosParaGrafico = <?php echo json_encode($dadosParaGrafico); ?>;

            var chartBarLine;

            function updateCharts(period) {
                var filteredMeses = dadosParaGrafico.meses.slice(-period);
                var filteredFaturamentoBruto = dadosParaGrafico.faturamento_bruto.slice(-period);
                var filteredDespesasBrutas = dadosParaGrafico.despesas_brutas.slice(-period);
                var filteredReceitaLiquida = dadosParaGrafico.receita_liquida.slice(-period);
                var filteredImpostosPeriodo = dadosParaGrafico.impostos_periodo.slice(-period);

                var optionsBarLine = {
                    series: [{
                        name: 'Faturamento Bruto',
                        type: 'column',
                        data: filteredFaturamentoBruto
                    }, {
                        name: 'Despesas Brutas',
                        type: 'column',
                        data: filteredDespesasBrutas
                    }, {
                        name: 'Receita Líquida',
                        type: 'line',
                        data: filteredReceitaLiquida
                    }, {
                        name: 'Impostos do Período',
                        type: 'line',
                        data: filteredImpostosPeriodo
                    }],
                    chart: {
                        height: 400,
                        type: 'line',
                    },
                    colors: ['#2bcbba', '#fa4654', '#f66d9b', '#f1c40f'],
                    stroke: {
                        width: [0, 0, 4, 4],
                        curve: 'smooth'
                    },
                    dataLabels: {
                        enabled: false
                    },
                    labels: filteredMeses.map(mes => {
                        const [month, year] = mes.split('-');
                        const monthShort = month.slice(0, 3);
                        return `${monthShort}/${year.slice(-2)}`;
                    }),
                    xaxis: {
                        type: 'category',
                        labels: {
                            style: {
                                colors: '#2bcbba',
                                fontSize: '14px',
                                fontWeight: 600
                            }
                        }
                    },
                    yaxis: [{
                        title: {
                            text: 'Valor (R$)',
                            style: {
                                color: '#2bcbba',
                                fontSize: '16px',
                                fontWeight: 700
                            }
                        },
                        labels: {
                            formatter: function(value) {
                                return (value / 1000).toLocaleString('pt-BR') + 'k';
                            },
                            style: {
                                colors: '#2bcbba',
                                fontSize: '14px',
                                fontWeight: 600
                            }
                        }
                    }],
                    legend: {
                        position: 'bottom',
                        horizontalAlign: 'center',
                        floating: false,
                        labels: {
                            colors: '#2bcbba'
                        },
                        markers: {
                            width: 12,
                            height: 12,
                            radius: 12
                        }
                    },
                    tooltip: {
                        y: {
                            formatter: function(value) {
                                return value.toLocaleString('pt-BR', {
                                    minimumFractionDigits: 2,
                                    maximumFractionDigits: 2
                                });
                            }
                        }
                    }
                };

                if (chartBarLine) {
                    chartBarLine.destroy();
                }

                chartBarLine = new ApexCharts(document.querySelector('#chart-receita-mensal'), optionsBarLine);
                chartBarLine.render();
            }

            updateCharts(12);

            document.getElementById('periodo').addEventListener('change', function() {
                var period = parseInt(this.value);
                updateCharts(period);
            });
        });

    </script>

