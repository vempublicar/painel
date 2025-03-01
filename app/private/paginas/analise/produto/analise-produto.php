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
                <h3 class="h2 card-title text-secondary ">Indicadores dos Produtos</h3>
                <div class="row">
                    <div class="card bg-white col-sm-12">
                        <div class="row">
                            <div class="col text-center mt-3">
                                <div class="datagrid-title text-primary">Público Consumidor do Produto</div>
                                <div class="row mb-3 mt-3 text-primary">
                                                                            </div>
                            </div>
                            <div class="col text-center mt-3">
                                <div class="datagrid-title text-primary">Idade Consumidora do Produto</div>
                                <div class="row mb-3 mt-3 text-primary">
                                                                            </div>
                            </div>
                            <div class="col text-center mt-3">
                                <div class="datagrid-title text-primary">Localização dos Consumidores</div>
                                <div class="row mb-3 mt-3 text-primary">
                                                                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="card bg-white col-sm-12">
                        <div class="card-status-top bg-orange"></div>
                        <div class="row m-auto">
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Precificação</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Menor Valor</div>
                                        <div class="text-primary text-center">
                                            <b>R$ 5</b>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Maior Valor</div>
                                        <div class="text-primary text-center">
                                            <b>R$ 15</b>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Menor Valor Ideal</div>
                                        <div class="text-center text-primary">
                                            <b>R$ 10</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Lucro Médio Produtos</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col m-auto">
                                        <div class="h3 text-lime text-center">
                                            <s><b>R$ 44.064,00</b></s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Categoria de Preços</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Linha <b>C</b> até:</div>
                                        <div class="text-center text-primary">
                                            <b>R$ 5</b>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Linha <b>B</b> até:</div>
                                        <div class="text-center text-primary">
                                            <b>R$ 10</b>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Linha <b>A</b> até:</div>
                                        <div class="text-center text-primary">
                                            <b>R$ 15</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Ticket Médio Das Vendas</div>
                                <div class="row mb-1 mt-3">
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Geral</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 66.096,00</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Online</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 49.652,00</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Presencial</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 82.540,00</b></s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Ticket Médio Produtos</div>
                                <div class="row mb-1 mt-3">
                                    <div class="col m-auto">
                                        <div class="h3 text-primary text-center">
                                            <s><b>R$ 44.064,00</b></s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Custo Médio Dos Produtos</div>
                                <div class="row mb-1 mt-3">
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Operacional</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ -0,67</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Matéria Prima</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 0,33</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Marketing</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 0,33</b></s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Ticket Médio Das Despesas</div>
                                <div class="row mb-1 mt-3">
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Operacional</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ -1,00</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Matéria Prima</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 0,50</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Marketing</div>
                                        <div class="text-primary text-center">
                                            <s><b>R$ 0,50</b></s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Tendência</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col-3"></div>
                                    <div class="col-2">
                                        <img src="vendor/images/relatorio/elementos/seta-baixo-cinza.png" height="40" alt="">
                                    </div>
                                    <div class="col-2 text-primary">
                                        <div class="h3 text-lime text-center">
                                            <s><b>A 1.0</b></s>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <img src="vendor/images/relatorio/elementos/seta-cima.png" height="40" alt="">
                                    </div>
                                    <div class="col-3"></div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-3">
                                <div class="datagrid-title text-primary">Indicadores</div>
                                <div class="row mb-1 mt-3">
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Margem de Lucro</div>
                                        <div class="text-primary text-center">
                                            <s><b>100,00%</b></s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Multiplo de MP</div>
                                        <div class="text-primary text-center">
                                            <s><b>132.192,00</b>x</s>
                                        </div>
                                    </div>
                                    <div class="col m-auto">
                                        <div class="datagrid-title text-primary">Volume por Venda</div>
                                        <div class="text-primary text-center">
                                            <s><b>1,50</b>/und</s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-5">
                                <hr class="custom-hr">
                            </div>
                            <div class="col-4 text-center">
                                <div class="datagrid-title text-primary">Valorização da marca</div>
                                <div class="row mt-3">
                                    <div class="col">
                                        <img src="vendor/images/relatorio/elementos/estrela-cinza.png" height="30" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="vendor/images/relatorio/elementos/estrela-cinza.png" height="30" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="vendor/images/relatorio/elementos/estrela-cinza.png" height="30" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="vendor/images/relatorio/elementos/estrela-cinza.png" height="30" alt="">
                                    </div>
                                    <div class="col">
                                        <img src="vendor/images/relatorio/elementos/estrela-cinza.png" height="30" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 text-center mt-5">
                                <hr class="custom-hr">
                            </div>
                            <div class="col card text-center m-1">
                                <div class="datagrid-title text-primary">Canais de Vendas</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Locais</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Marketplace</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Específicos</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col card text-center m-1">
                                <div class="datagrid-title text-primary">Fornecedores</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Ruim</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Regular</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Bom</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col card text-center m-1">
                                <div class="datagrid-title text-primary">Táticas</div>
                                <div class="row mb-3 mt-3">
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Alcance</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Receita</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="datagrid-title text-primary">Engajamento</div>
                                        <div class="text-primary text-center">
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 text-primary text-center m-2">
                                Traga novas opções de produtos acima de: R$22,032
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