
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$minhas_empresas = $_SESSION['minhas_empresas'];

function canAccess($userRole, $allowedRoles) {
    return in_array($userRole, $allowedRoles);
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
?>


<div class="container <?= $visualizar ?> mt-5">
        <h3 class="text-center">Dashboard Financeiro</h3>
        <div class="row">
            <div class="col-md-6">
                <canvas id="barChart"></canvas>
            </div>
            <div class="col-md-6">
                <canvas id="pieChart"></canvas>
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
                <input type="hidden" name="empresa" id="empresa" value="<?= $id ?>" class="form-control" readonly>
                <input type="hidden" name="id" id="id" value="" class="form-control"> <!-- SE O VALOR SERÁ EDITADO -->
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
                        <option value="2024" >2024</option>
                        <option value="2025" selected>2025</option>
                        <option value="2026">2026</option>
                    </select>
                </div>
                <label class="form-label">Faturamento Bruto</label>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text text-center" style="width: 150px;" >Vendas Presencial </span>
                        <input type="text" name="fat_presencial" id="fat_presencial" class="form-control value" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text text-center" style="width: 150px;">Vendas Online </span>
                        <input type="text" name="fat_online" id="fat_online" class="form-control value" required>
                    </div>
                </div>
                <label class="form-label">Faturado no Mês <small class="text-secondary">(Receita que entrou no caixa)</small></label>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text text-center" style="width: 150px;"> Entrada de Caixa </span>
                        <input type="text" name="rec_liquida" id="rec_liquida" class="form-control value" required>
                    </div>
                </div>
                <label class="form-label">Despesa Bruta</label>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text text-center" style="width: 150px;"> Saída de Caixa </span>
                        <input type="text" name="desp_bruta" id="desp_bruta" class="form-control value" required>
                    </div>
                </div>
                <label class="form-label">Impostos</label>
                <div class="col-sm-12">
                    <div class="input-group mb-2">
                        <span class="input-group-text text-center" style="width: 150px;"> Equivalente Período </span>
                        <input type="text" name="imp_periodo" id="imp_periodo" class="form-control value" required>
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
<?php include_once "app/private/parts/footer.php" ?>
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

        const barCtx = document.getElementById('barChart').getContext('2d');
        const pieCtx = document.getElementById('pieChart').getContext('2d');

        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Fev', 'Mar', 'Abr'],
                datasets: [{
                    label: 'Receita Mensal',
                    data: [1000, 1500, 2000, 1800],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)'
                }]
            }
        });

        new Chart(pieCtx, {
            type: 'pie',
            data: {
                labels: ['Online', 'Presencial'],
                datasets: [{
                    data: [60, 40],
                    backgroundColor: ['#36A2EB', '#FF6384']
                }]
            }
        });
</script>

