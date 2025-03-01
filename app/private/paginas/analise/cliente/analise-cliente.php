<div class="page-body"> 
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="container container-tight">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                                                    <span class="status-indicator status-red status-indicator-animated">
                                <span class="status-indicator-circle"></span>
                                <span class="status-indicator-circle"></span>
                                <span class="status-indicator-circle"></span>
                            </span>
                                            </div>
                    <div class="col">
                        <div class="text-secondary">
                            <ul class="list-inline list-inline-dots mb-0">
                                                                    <li class="list-inline-item"><span class="text-red">Verifique os dados:</span></li>
                                  
                                <span class="list-inline-item"><b>Financeiro</b>-&gt;Receita     </span>                              
                            </ul>                            
                        </div>
                    </div>
                    <div class="col-md-auto ms-auto d-print-none">
                        <div class="btn-list">
                            <a class="btn btn-indigo ms-auto" id="generate-pdf" data-bs-toggle="modal" data-bs-target="#modal-full-width">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-download">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2"></path>
                                    <path d="M7 11l5 5l5 -5"></path>
                                    <path d="M12 4l0 12"></path>
                                </svg>
                                Salvar PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-blur fade" id="modal-full-width" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-full-width modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Relatório da Empresa</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <iframe id="pdfFrame" style="width:100%; height: 500px;"></iframe>
                </div>
            </div>
        </div>
        <div class="container container-tight " id="salvarPdf">
            <div class="page-break mt-3">
                <hr class="custom-hr">
                <span class="text-right text-secondary float-end ms-auto">Fepacoc.com</span>
                <h3 class="h2 card-title text-secondary ">Indicadores de Clientes</h3>
                <div class="card  col-sm-12 p-3">
                    <div class="row row-cards ">
                        <div class="col-sm-5">
                            <div class="col-12 mb-2">
                                <div class="datagrid-title text-center mb-0">Vendas Online</div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Atendimentos</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                                                                            0                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Vendas</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                                                                            0                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Faturado</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                        R$ 49.652                                        </b>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Conversão</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                                                                            0.00%                                                                                    </b>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="custom-hr">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="datagrid-title text-center mb-0">RESULTADOS TOTAIS</div>
                            <div class="col card  mt-1">
                                <p class="text-secondary text-center mb-0">Conversão de Venda</p>
                                <div class="h3 text-secondary text-center mb-1 mt-1">
                                    <b>
                                                                                    0.00%                                                                            </b>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-5">
                            <div class="col-12 mb-2">
                                <div class="datagrid-title text-center mb-0">Vendas Presencial</div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Atendidos</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                                                                            0                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Vendas</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                                                                            0                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Faturado</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                            R$ 82.540                                        </b>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="datagrid-title text-center mb-0">Conversão</div>
                                    <div class="text-secondary text-center">
                                        <b>
                                                                                            0.00%                                                                                    </b>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12">
                                <hr class="custom-hr">
                            </div>
                        </div>
                    </div>
                    <div class="row row-card mt-1">
                        <div class="col-sm-4 mt-3">
                            <div class="datagrid-title text-center mb-0">Capacidade de Atendimento</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Online</div>
                                    <div class="text-secondary text-center">
                                        <b> 0</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Presencial</div>
                                    <div class="text-secondary text-center">
                                        <b> 0</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <div class="datagrid-title text-center mb-0">Meta de Conversão</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Online</div>
                                    <div class="text-secondary text-center">
                                        <b> 0%</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Presencial</div>
                                    <div class="text-secondary text-center">
                                        <b> 0%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <div class="datagrid-title text-center mb-0">Conversão alcançada</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Online</div>
                                    <div class="text-secondary text-center">
                                        <b> 0%</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Presencial</div>
                                    <div class="text-secondary text-center">
                                        <b> 0%</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <div class="datagrid-title text-center mb-0">Equipe de Vendas</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">SDR</div>
                                    <div class="text-secondary text-center">
                                        <b> 0</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Vendedores</div>
                                    <div class="text-secondary text-center">
                                        <b> 0</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <div class="col">
                                <div class="datagrid-title text-center mb-0">Departamento de Venda</div>
                                <div class="row">
                                    <div class="col-4 card  mt-1">
                                        <div class="datagrid-title text-center mb-0">Nota</div>
                                        <div class="text-secondary text-center">
                                            <b>0.0</b>
                                        </div>
                                    </div>
                                    <div class="col-8 card  mt-1">
                                        <div class="datagrid-title text-center mb-0">Custo de Fevereiro</div>
                                        <div class="text-secondary text-center">
                                            <b>0,00</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <div class="datagrid-title text-center mb-0">Indicador de Custos</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Atendimento</div>
                                    <div class="text-secondary text-center">
                                        <b> 0,00</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Venda</div>
                                    <div class="text-secondary text-center">
                                        <b> 0,00</b>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 mt-3">
                            <div class="datagrid-title text-center mb-0">FUNIL DE CLIENTES</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Seguidores</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>

                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Visitantes Site</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Leads</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">1ª Compra</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Ocasionais</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Regulares</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Fiéis</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Influência</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Afiliado</div>
                                                                        <div class="text-secondary text-center">
                                    
                    <img src="vendor/images/relatorio/elementos/neutro.png" height="15">
                                                        <b>
                                                                                            0%                                                                                    </b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 mt-3">
                            <div class="datagrid-title text-center mb-0">Classificação das Vendas</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">1ª Compra</div>
                                    <div class="text-secondary text-center">
                                        <b>1</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Ocasionais</div>
                                    <div class="text-secondary text-center">
                                        <b>1</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Regulares</div>
                                    <div class="text-secondary text-center">
                                        <b>0</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Fiéis</div>
                                    <div class="text-secondary text-center">
                                        <b>0</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Influência</div>
                                    <div class="text-secondary text-center">
                                        <b>0</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Afiliado</div>
                                    <div class="text-secondary text-center">
                                        <b>0</b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 mt-3">
                            <div class="datagrid-title text-center mb-0">Totais vendas</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Clientes Sem Cadastro</div>
                                    <div class="text-secondary text-center">
                                        <b>1</b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Clientes Cadastrados</div>
                                    <div class="text-secondary text-center">
                                        <b>1</b>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-12 mt-3">
                            <div class="row">
                                <div class="col-sm-4 mt-3">
                                    <hr class="custom-hr">
                                </div>
                                <div class="col-sm-4">
                                <div class="datagrid-title text-center mb-0">Venda para Clientes Cadstrados</div>
                                                                        <div class="col card  ">                                        
                                        <div class="text-secondary text-center m-2">
                                            <b>50.00%</b>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 mt-3">
                                    <hr class="custom-hr">
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="datagrid-title text-center mb-0">Ferramentas Utilizadas</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">ERP</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">CRM</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Comunicação</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Pesquisas</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="datagrid-title text-center mb-0">Estratégias</div>
                            <div class="row">
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Relacionamento Clientes</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Percepção Produtos</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                                <div class="col card  mt-1">
                                    <div class="datagrid-title text-center mb-0">Processo de Compras</div>
                                    <div class="text-secondary text-center">
                                        <b></b>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
$filename = 'default_name';  // Um nome padrão caso 'b' não esteja definido ou seja inválido
if (isset($_GET['b']) && !empty($_GET['b'])) {
    // Sanitizar para evitar caracteres indesejados e garantir que é uma string segura para um nome de arquivo
    $filename = preg_replace('/[^a-zA-Z0-9_-]/', '', $_GET['b']);
}
?>

<?php  include_once "app/private/parts/footer.php"; ?>

<script>
    var generatePdfButton = document.getElementById('generate-pdf');
    if (generatePdfButton) {
        document.getElementById('generate-pdf').addEventListener('click', function () {
            const element = document.getElementById('salvarPdf');
            const opt = {
                margin:       3,
                filename:     '<?= $filename ?>.pdf',  // Nome do arquivo ajustado e sanitizado
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 }, // Aumenta a escala do canvas portrait landscape
                jsPDF: { unit: 'mm', format: [210, 297], orientation: 'landscape' }
            };

            html2pdf().set(opt).from(element).toPdf().get('pdf').then(function (pdf) {
                const blob = pdf.output('blob');
                const url = URL.createObjectURL(blob);
                
                // Exibir o PDF no iframe dentro do modal
                const iframe = document.getElementById('pdfFrame');
                iframe.src = url;

                // Mostrar o modal
                document.getElementById('pdfModal').style.display = 'block';
            });
        });
    }
</script>