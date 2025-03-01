<div class="page-body">
    <div class="container-xl">           
            
            <div class="page-header d-print-none">
                <div class="container container-tight">
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                                    <span class="status-indicator status-green status-indicator-animated">
                                    <span class="status-indicator-circle"></span>
                                    <span class="status-indicator-circle"></span>
                                    <span class="status-indicator-circle"></span>
                                </span>
                                                </div>
                        <div class="col">
                            <div class="text-secondary">
                                <ul class="list-inline list-inline-dots mb-0">
                                                                        <li class="list-inline-item"><span class="text-green"></span>Dados Atualizados</li>
                                    
                                    <span class="list-inline-item"> </span>                              
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
                </div>
            </div>

        <div id="salvarPdf">
             
            <div class="page-break pdf-page mt-3">
                <hr class="custom-hr">
                <span class="text-right text-secondary float-end ms-auto">Fepacoc.com</span>

                <h3 class="h2 card-title text-secondary">Indicadores Financeiro</h3>
                <div class="row row-deck row-cards mt-5 mb-5">
                    <div class="col-md-6 col-xl-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <span class="bg-green text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/currency-dollar -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-shopping-cart-dollar">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M4 19a2 2 0 1 0 4 0a2 2 0 0 0 -4 0"></path>
                                            <path d="M13 17h-7v-14h-2"></path>
                                            <path d="M6 5l14 1l-.575 4.022m-4.925 2.978h-8.5"></path>
                                            <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                            <path d="M19 21v1m0 -8v1"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="text-secondary">
                                        Sem Dados                                    </div>
                                    <div class="font-weight-medium text-green">
                                        <b>
                                                                                            R$0                                                                                    </b>
                                    </div>
                                    <div class="text-secondary">
                                        Receita do período
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-danger text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-receipt">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2m4 -14h6m-6 4h6m-2 4h2"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="text-secondary">
                                        Sem Dados                                    </div>

                                    <div class="font-weight-medium text-danger">
                                        <b>
                                            <!-- Se o mês for diferente, exibe o valor riscado -->
                                                                                            R$0,00                                                                                    </b>
                                    </div>

                                    <div class="text-secondary">
                                        Despesas do período
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-orange text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-devices-dollar">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M13 19v-10a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1v1.5"></path>
                                            <path d="M18 8v-3a1 1 0 0 0 -1 -1h-13a1 1 0 0 0 -1 1v12a1 1 0 0 0 1 1h9"></path>
                                            <path d="M16 9h2"></path>
                                            <path d="M21 15h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5"></path>
                                            <path d="M19 21v1m0 -8v1"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="text-secondary">
                                        Fevereiro                                    </div>
                                    <div class="font-weight-medium text-orange">
                                        <b>
                                            R$0,00                                        </b>
                                    </div>
                                    <div class="text-secondary">
                                        Retorno Investimento
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <span class="bg-orange text-white avatar"><!-- Download SVG icon from http://tabler-icons.io/i/shopping-cart -->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-heart-handshake">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572"></path>
                                            <path d="M12 6l-3.293 3.293a1 1 0 0 0 0 1.414l.543 .543c.69 .69 1.81 .69 2.5 0l1 -1a3.182 3.182 0 0 1 4.5 0l2.25 2.25"></path>
                                            <path d="M12.5 15.5l2 2"></path>
                                            <path d="M15 13l2 2"></path>
                                        </svg>
                                    </span>
                                </div>
                                <div class="col">
                                    <div class="text-secondary">
                                        Fevereiro                                    </div>
                                    <div class="font-weight-medium text-orange">
                                        <b>
                                            R$0,00                                        </b>
                                    </div>
                                    <div class="text-secondary">
                                        Compromissos Financeiro
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="card bg-white ">
                    <div class="row">
                        <div class="col-sm-5 ">
                            <div class="card-body">
                                <div class="empty">
                                    <div><img src="vendor/images/relatorio/equilibrar-contas.jpg" height="200" alt="">
                                    </div>
                                    <p class="empty-title text-primary">"Os números ainda não são bons, mas há espaço para recuperação."</p>
                                </div>
                                <div class="row">
                                    <div class="col mx-auto">
                                        <div class="col">
                                            <div class="font-weight-medium text-center">
                                                <span class="h3 font-weight-medium text-yellow text-center">R$0,00</span>
                                            </div>
                                            <div class="text-secondary text-center">
                                                <b>Fechamento do Mês</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mx-auto">
                                        <div class="col" title="">
                                            <div class="font-weight-medium text-center">
                                                <span class="h3 font-weight-medium text-yellow text-center">0%</span>
                                            </div>
                                            <div class="text-secondary text-center">
                                                <b>Crescimento da Empresa</b>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 m-auto">
                            <div class="row row-deck row-cards m-5 ">
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-yellow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-yellow ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        <b>CMV</b>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Lucro Bruto
                                                    </div>
                                                    <i class="text-secondary">(R$0,00)</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-yellow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-yellow ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        <b>EBIT</b>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Lucro Operacional
                                                    </div>
                                                    <i class="text-secondary">(R$0,00)</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-yellow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-yellow ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        <b>MLL</b>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Margem de Lucro Líquido
                                                    </div>
                                                    <i class="text-secondary">(R$0,00)</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-yellow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-yellow ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        <b>RCIP</b>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Retorno de Capital Investido
                                                    </div>
                                                    <i class="text-secondary">(R$0,00)</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-yellow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-yellow ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        <b>FCL</b>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Fluxo de Caixa Livre
                                                    </div>
                                                    <i class="text-secondary">(R$0,00)</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-yellow"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-yellow ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        <b>ARP</b>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Ativos e Receitas Previsiveis
                                                    </div>
                                                    <i class="text-secondary">(R$0,00)</i>
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

            <div class="page-break pdf-page mt-3">
                <hr class="custom-hr">
                <span class="text-right text-secondary float-end ms-auto">Fepacoc.com</span>

                <h3 class="h2 card-title text-secondary ">Indicadores de Eficiência</h3>
                <div class="card bg-white">
                    <div class="row">
                        <div class="col-sm-5 ">
                            <div class="card-body">
                                <div class="empty">
                                    <div><img src="vendor/images/relatorio/queima-dinheiro.jpg" height="200" alt="">
                                    </div>
                                    <p class="empty-title text-primary">"Caos! Você está perdendo o dobro. Ajuste rápido sua estratégia de vendas."</p>
                                </div>
                                <div class="row">
                                    <div class="col mx-auto">
                                        <div class="col">
                                            <div class="font-weight-medium text-center">
                                                <span class="h3 font-weight-medium text-orange text-center">0x</span>
                                            </div>
                                            <div class="text-secondary text-center">
                                                <b>Eficiência Operacional</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mx-auto">
                                        <div class="col" title="">
                                            <div class="font-weight-medium text-center">
                                                <span class="h3 font-weight-medium text-orange text-center">0x</span>
                                            </div>
                                            <div class="text-secondary text-center">
                                                <b>Eficiência do Marketing</b>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row row-deck row-cards m-5 ">
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-green"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-green">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0,00)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Faturado Online
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-success"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-success ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0,00)</i>

                                                    </div>
                                                    <div class="text-secondary">
                                                        Faturado Presencial
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Custo de Matéria Prima
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Folha de Pagamento
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Custo Operacional
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Custo Marketing
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Custo Terceirização
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Impostos e Taxas
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-danger"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-danger ">
                                                        0%                                                    </div>
                                                    <div class="font-weight-medium text-secondary">
                                                        <i>(R$0)</i>
                                                    </div>
                                                    <div class="text-secondary">
                                                        Outras Despesas
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
            </div>

            <div class="page-break pdf-page mt-3">
                <hr class="custom-hr">
                <span class="text-right text-secondary float-end ms-auto">Fepacoc.com</span>

                <h3 class="h2 card-title text-secondary ">Indicadores de Participação</h3>
                <div class="card bg-white">
                    <div class="row">
                        <div class="col-sm-5 m-auto">
                            <div class="card-body ">
                                <p class="text-muted"> Os indicadores de participação ajudam você a entender como o lucro bruto dos seus produtos é distribuído entre diferentes custos e despesas. Com eles, você consegue visualizar claramente quanto do lucro bruto vai para cada área e qual é a sua parte nesse resultado, que aparece em "Participação no Resultado".</p>                           
                                <hr><div class="row ">
                                    <div class="col mx-auto">
                                        <div class="col">
                                            <div class="font-weight-medium text-center">
                                                <span class="h2 font-weight-medium text-center text-info ">R$ 0,00</span>
                                            </div>
                                            <div class="text-secondary text-center">
                                                <b>Margem de Contribuição</b>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col mx-auto">
                                        <div class="col" title="">
                                            <div class="font-weight-medium text-center">
                                                <span class="h2 font-weight-medium text-yellow text-center">0%</span>
                                            </div>
                                            <div class="text-secondary text-center">
                                                <b>Participação no Resultado</b>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="row row-deck row-cards m-5 ">
                            <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-info"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-info">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        Participação de Retorno dos Investimentos
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-info"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-info">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        Participação da Folha de Pagamento
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-info"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-info ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        Participação do Operacional
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-info"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-info ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        Participação de Terceirização
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-info"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-info ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        Participação de Impostos e Taxas
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-center">
                                    <div class="card bg-white card-sm">
                                        <div class="card-status-start bg-info"></div>
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <div class="h2 font-weight-medium text-info ">
                                                        0%                                                    </div>
                                                    <div class="text-secondary">
                                                        Participação de Outras Despesas
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