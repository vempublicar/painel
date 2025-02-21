<script>
    document.addEventListener("DOMContentLoaded", function() {

        
        var pontuacoes = {
            financeiro: <?= $financeiro ?>,
            estrutura: <?= $estrutura ?>,
            produto: <?= $produto ?>,
            anuncio: <?= $anuncio ?>,
            cliente: <?= $cliente ?>,
            operacional: <?= $operacional ?>,
            consistencia: <?= $consistencia ?>
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
                width: '100%',  // Define a largura dinâmica
                type: 'radar',
                background: 'transparent',
                toolbar: {
                    show: false // Oculta o menu sanduíche
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
                        connectorColors: 'transparent' // Oculta os conectores
                    }
                }
            },
            colors: ['#45aaf2'], // Usando a cor principal original
            tooltip: {
                y: {
                    formatter: function(val) {
                        return val + " pts"; // Adiciona o símbolo de porcentagem ao valor
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
                        color: '#0000FF' // Cor azul para os rótulos do eixo
                    }
                }
            },
            yaxis: {
                show: false, // Oculta o eixo Y
                labels: {
                    style: {
                        fontSize: '16px'
                    },
                    formatter: function(val, i) {
                        return i % 2 === 0 ? val : ''; // Alterna a exibição dos rótulos do eixo Y
                    }
                }
            }
        };

        // Renderizando o gráfico de radar
        var radarChart = new ApexCharts(document.querySelector("#radarChart"), options);
        radarChart.render();
    });
</script>