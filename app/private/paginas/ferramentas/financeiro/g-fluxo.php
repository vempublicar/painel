<script>
    document.addEventListener("DOMContentLoaded", function() {
        var dadosParaGrafico = <?php echo json_encode($dadosParaGrafico); ?>;

        var chartBarLine, chartPie;



        function updateCharts(period) {
            // Filtra os dados de acordo com o período selecionado
            var filteredMeses = dadosParaGrafico.meses.slice(-period);
            var filteredReceitaOnlineAtual = dadosParaGrafico.receita_online_atual.slice(-period);
            var filteredReceitaPresencialAtual = dadosParaGrafico.receita_presencial_atual.slice(-period);
            var filteredReceitaOnlineAnterior = dadosParaGrafico.receita_online_anterior.slice(-period);
            var filteredReceitaPresencialAnterior = dadosParaGrafico.receita_presencial_anterior.slice(-period);

            var totalOnline = filteredReceitaOnlineAtual.reduce((a, b) => a + b, 0);
            var totalPresencial = filteredReceitaPresencialAtual.reduce((a, b) => a + b, 0);

            // Configuração do gráfico de barras e linhas
            var optionsBarLine = {
                series: [{
                    name: 'Receita Online Atual',
                    type: 'column',
                    data: filteredReceitaOnlineAtual
                }, {
                    name: 'Receita Presencial Atual',
                    type: 'column',
                    data: filteredReceitaPresencialAtual
                }, {
                    name: 'Receita Online Anterior',
                    type: 'line',
                    data: filteredReceitaOnlineAnterior
                }, {
                    name: 'Receita Presencial Anterior',
                    type: 'line',
                    data: filteredReceitaPresencialAnterior
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
                            colors: '#2bcbba', // Cor azul para as legendas do eixo X
                            fontSize: '14px',
                            fontWeight: 600
                        }
                    },
                    axisBorder: {
                        show: true,
                        color: '#2bcbba' // Cor azul para a linha do eixo X
                    },
                    axisTicks: {
                        show: true,
                        color: '#2bcbba' // Cor azul para as marcações de tick do eixo X
                    }
                },
                yaxis: [{
                    title: {
                        text: 'Valor das Receitas (R$)',
                        style: {
                            color: '#2bcbba',
                            fontSize: '16px',
                            fontWeight: 700 // Deixa o título do eixo Y mais destacado
                        }
                    },
                    labels: {
                        formatter: function(value) {
                            return (value / 1000).toLocaleString('pt-BR') + 'k';
                        },
                        style: {
                            colors: '#2bcbba', // Cor do texto do eixo Y em um tom suave
                            fontSize: '14px',
                            fontWeight: 600
                        }
                    }
                }],
                legend: {
                    position: 'bottom', // Posiciona a legenda na parte inferior do gráfico
                    horizontalAlign: 'center', // Centraliza a legenda horizontalmente
                    floating: false, // Remove o efeito de flutuação para manter a legenda fixa
                    labels: {
                        colors: '#2bcbba', // Cor azul para as legendas
                        useSeriesColors: false
                    },
                    markers: {
                        width: 12,
                        height: 12,
                        radius: 12 // Marcadores arredondados
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

            // Destruir o gráfico antigo se existir
            if (chartBarLine) {
                chartBarLine.destroy();
            }

            // Criar um novo gráfico
            chartBarLine = new ApexCharts(document.querySelector('#chart-receita-mensal'), optionsBarLine);
            chartBarLine.render();

            // Configuração do gráfico de pizza
            var optionsPie = {
                series: [totalOnline, totalPresencial],
                chart: {
                    type: 'pie',
                    height: 350
                },
                colors: ['#2bcbba', '#fa4654'],
                labels: ['Online', 'Presencial'],
                dataLabels: {
                    enabled: true,
                    style: {
                        fontSize: '16px',
                        colors: ['#FFFFFF']
                    },
                    dropShadow: {
                        enabled: false
                    },
                    formatter: function(val) {
                        return Math.round(val) + '%';
                    }
                },
                stroke: {
                    show: false
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
                },
                legend: {
                    position: 'bottom', // Coloca a legenda na parte inferior
                    horizontalAlign: 'center' // Centraliza a legenda horizontalmente
                }
            };

            // Destruir o gráfico antigo se existir
            if (chartPie) {
                chartPie.destroy();
            }

            // Criar um novo gráfico
            chartPie = new ApexCharts(document.querySelector('#chart-distribuicao-vendas'), optionsPie);
            chartPie.render();
        }

        // Inicializar com o período padrão (12 meses)
        updateCharts(12);

        // Adicionar evento ao seletor de período
        document.getElementById('periodo').addEventListener('change', function() {
            var period = parseInt(this.value);
            updateCharts(period);
        });
    });
</script>