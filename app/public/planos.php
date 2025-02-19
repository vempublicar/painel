<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fepacoc | Planos Disponíveis</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="vendor/images/fepacoc/icone.png" />
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>

<body>
    <header class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="/" class="navbar-brand">FEPACOC</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMenu">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="#" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Sobre</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class="mb-4">Planos e Preços</h1>

        <!-- Breve descrição dos planos -->
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Plano Gratuito</h5>
                        <h6 class="card-subtitle mb-2 text-muted">R$0,00/mês</h6>
                        <p class="card-text">Acesso limitado a vídeos e algumas ferramentas, ideal para iniciar o planejamento para uma gestão estratégica.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Plano Estratégia</h5>
                        <h6 class="card-subtitle mb-2 text-muted">De R$179,90 por R$79,90/mês</h6>
                        <p class="card-text">Acesso completo aos vídeos e algumas ferramentas, com foco no cálculo estratégico de melhoria de marketing e vendas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100">
                    <div the card-body>
                        <h5 class="card-title">Plano Ferramenta</h5>
                        <h6 class="card-subtitle mb-2 text-muted">De R$589,90 por R$189,90/mês</h6>
                        <p class="card-text">Acesso a todas as ferramentas de gestão e análise contínua pela equipe FEPACOC, garantindo suporte para crescimento empresarial.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão para expandir a tabela comparativa -->
        <div class="text-center mt-5 mb-3">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#tabelaComparativa" aria-expanded="false" aria-controls="tabelaComparativa">
                Comparar Planos
            </button>
        </div>

        <!-- Tabela Comparativa Simples -->
        <div class="collapse" id="tabelaComparativa">
            <div class="card card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Característica</th>
                            <th scope="col">Gratuito</th>
                            <th scope="col">Estratégia</th>
                            <th scope="col">Ferramenta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Vídeos</td>
                            <td>Liberados</td>
                            <td>Completo</td>
                            <td>Completo</td>
                        </tr>
                        <tr>
                            <td>Ferramentas</td>
                            <td>Limitadas</td>
                            <td>Algumas</td>
                            <td>Todas</td>
                        </tr>
                        <tr>
                            <td>Consultoria</td>
                            <td>Não</td>
                            <td>Não</td>
                            <td>Sim</td>
                        </tr>
                        <tr>
                            <td>Análise Continuada</td>
                            <td>Não</td>
                            <td>Não</td>
                            <td>Sim</td>
                        </tr>
                        <tr>
                            <td>Preço Anual com Desconto</td>
                            <td>Gratuito</td>
                            <td>R$ 958,80</td>
                            <td>R$ 2.278,80</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
