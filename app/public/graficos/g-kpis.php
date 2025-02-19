<script>
document.addEventListener("DOMContentLoaded", function() {
    var pontuacoes = {
        financeiro: 70,
        estrutura: 80,
        produto: 65,
        anuncio: 90,
        cliente: 45,
        operacional: 85,
        consistencia: 60
    };

    var series = [{
        name: 'Pontuações',
        data: [
            pontuacoes.financeiro,
            pontuacoes.estrutura,
            pontuacoes.produto,
            pontuacoes.anuncio,
            pontuacoes.cliente,
            pontuacoes.operacional,
            pontuacoes.consistencia
        ]
    }];

    var labels = ['Financeiro', 'Estrutura', 'Produto', 'Anúncio', 'Cliente', 'Operacional', 'Consistência'];

    var options = {
        series: series,
        chart: {
            height: 550,
            width: 550,
            type: 'radar',
            background: 'transparent',
            toolbar: {
                show: false
            }
        },
        dataLabels: {
            enabled: false,
            style: {
                fontSize: '16px'
            }
        },
        plotOptions: {
            radar: {
                size: 150,
                polygons: {
                    connectorColors: 'transparent'
                }
            }
        },
        colors: ['#0054a6'],
        tooltip: {
            y: {
                formatter: function(val) {
                    return val + "%";
                }
            }
        },
        xaxis: {
            categories: labels,
            labels: {
                style: {
                    fontSize: '16px',
                    fontFamily: 'Arial, sans-serif',
                    fontWeight: 'bold',
                    color: '#0000FF'
                }
            }
        },
        yaxis: {
            show: false,
            labels: {
                style: {
                    fontSize: '16px'
                },
                formatter: function(val, i) {
                    return i % 2 === 0 ? val : '';
                }
            }
        }
    };

    var radarChart = new ApexCharts(document.querySelector("#radarChart"), options);
    radarChart.render();

    // Função para gerar novos valores aleatórios
    function generateRandomScores() {
        for (var key in pontuacoes) {
            pontuacoes[key] = Math.floor(Math.random() * 101); // Gera um valor entre 0 e 100
        }
        // Atualiza os dados da série
        radarChart.updateSeries([{
            name: 'Pontuações',
            data: [
                pontuacoes.financeiro,
                pontuacoes.estrutura,
                pontuacoes.produto,
                pontuacoes.anuncio,
                pontuacoes.cliente,
                pontuacoes.operacional,
                pontuacoes.consistencia
            ]
        }]);
    }

    // Atualiza o gráfico a cada 3 segundos (3000 milissegundos)
    setInterval(generateRandomScores, 3000);
});
</script>

<script>
        document.addEventListener("DOMContentLoaded", function () {
            // Configurações iniciais
            let trimestres = ['T1']; // Começa com o primeiro trimestre
            let empresaSemFepacoc = [15]; // Faturamento inicial em 15k
            let empresaComFepacoc = [15]; // Faturamento inicial em 15k

            let totalTrimestres = 1; // Contador para saber em que trimestre estamos

            // Configuração do gráfico
            let options = {
                series: [
                    {
                        name: "<b class='text-dark' >Empresa com FEPACOC</b>",
                        data: empresaComFepacoc
                    },
                    {
                        name: "<b class='text-dark' >Empresa sem FEPACOC</b>",
                        data: empresaSemFepacoc
                    }
                ],
                chart: {
                    type: 'line',
                    height: 400,
                    animations: {
                        enabled: true,
                        easing: 'easeinout',
                        dynamicAnimation: {
                            speed: 1000
                        }
                    },
                    toolbar: {
                        show: false // Desativa a toolbar (ícones de zoom e menu)
                    }
                },
                stroke: {
                    width: [4, 2],
                    curve: 'straight', // Linhas retas
                    colors: ['#28a745', '#dc3545']
                },
                markers: {
                    size: [5, 4],
                    colors: ['#28a745', '#dc3545']
                },
                xaxis: {
                    categories: trimestres,
                    title: {
                        text: 'Trimestres'
                    }
                },
                yaxis: {
                    title: {
                        text: 'Faturamento (k)'
                    },
                    labels: {
                        formatter: function (val) {
                            return val + "k";
                        }
                    },
                    max: 500, // Define o limite máximo do eixo Y
                    min: 0 // Define o limite mínimo
                },
                legend: {
                    position: 'top',
                    labels: {
                        colors: '#0077b6',
                        useSeriesColors: false
                    }
                },
                colors: ['#28a745', '#dc3545'],
            };

            let chart = new ApexCharts(document.querySelector("#lineChart"), options);
            chart.render();

            // Função para calcular o próximo trimestre
            function calcularProximoTrimestre() {
                if (totalTrimestres >= 10) return; // Para no T10
                totalTrimestres++;

                // Empresa sem FEPACOC - Oscilações leves, crescimento lento
                let ultimoSemFepacoc = empresaSemFepacoc[empresaSemFepacoc.length - 1];
                let proximoSemFepacoc = ultimoSemFepacoc + (Math.random() * 2 - 1); // Oscilações aleatórias
                proximoSemFepacoc += (55 - 10) / 5; // Crescimento linear
                proximoSemFepacoc = Math.max(proximoSemFepacoc, 10); // Evita valores abaixo do inicial
                proximoSemFepacoc = Math.min(proximoSemFepacoc, 55); // Limita o valor final a 30k
                empresaSemFepacoc.push(Math.round(proximoSemFepacoc));

                // Empresa com FEPACOC - Oscilações maiores, mas crescimento acentuado
                let ultimoComFepacoc = empresaComFepacoc[empresaComFepacoc.length - 1];
                let incremento;
                if (totalTrimestres <= 4) {
                    incremento = (Math.random() * 20) + 10; // Primeiro ano, variação aleatória
                } else if (totalTrimestres <= 8) {
                    incremento = (Math.random() * 30) + 25; // Segundo ano, variação maior
                } else {
                    incremento = (Math.random() * 40) + 45; // Terceiro ano
                }
                let proximoComFepacoc = ultimoComFepacoc + incremento; // Adiciona o crescimento
                proximoComFepacoc = Math.min(proximoComFepacoc, 450); // Limita o valor final a 450k
                empresaComFepacoc.push(Math.round(proximoComFepacoc));

                // Adiciona o próximo trimestre (T2, T3, ..., T10)
                trimestres.push(`T${totalTrimestres}`);

                // Atualiza o gráfico
                chart.updateOptions({
                    xaxis: {
                        categories: trimestres
                    }
                });
                chart.updateSeries([
                    {
                        name: "<b class='text-dark' >Empresa com FEPACOC</b>",
                        data: empresaComFepacoc
                    },
                    {
                        name: "<b class='text-dark' >Empresa sem FEPACOC</b>",
                        data: empresaSemFepacoc
                    }
                ]);
            }

            // Atualiza o gráfico a cada 3 segundos
            setInterval(calcularProximoTrimestre, 3000);
        });
    </script>