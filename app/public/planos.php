<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fepacoc | Planos Disponíveis</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="icon" type="image/x-icon" href="vendor/images/fepacoc/icone.png" />
  <style>
    body {
      padding-top: 70px;
      background: #f8f9fa;
    }
    .card {
      border: none;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s;
      margin-bottom: 30px;
    }
    .card:hover {
      transform: scale(1.02);
    }
    .card-header {
      background: transparent;
      font-weight: bold;
      padding: 0.75rem 1.25rem;
    }
    .price-original {
      font-size: 1.2rem;
      text-decoration: line-through;
      color: #888;
    }
    .price-discount {
      font-size: 1.5rem;
      font-weight: bold;
      color: #333;
    }
    .btn {
      margin-top: 15px;
    }
    .feature-list li {
      margin-bottom: 5px;
    }
    .table-responsive {
      max-height: 500px;
      overflow-y: auto;
    }
  </style>
</head>
<body>
  <div class="container">
    <header class="text-center mb-5">
      <h1>Planos e Preços</h1>
      <p class="lead">Escolha o plano que melhor se adapta às necessidades da sua empresa</p>
    </header>

    <div class="row">
      <!-- Plano Gratuito -->
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header" style="border-top: 4px solid #FFC107;">
            <i class="bi bi-star" style="font-size: 1.5rem;"></i>
            <span class="ms-2">Iniciar a Gestão Estratégica</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Plano Gratuito</h5>
            <p class="price-discount">Gratuito</p>
            <ul class="list-unstyled text-start">
              <li>Acesso a Ferramentas e Vídeos para iniciar na gestão estratégica e organização dos processos da empresa, estruturando com o método fepacoc.</li>
              <li><i class="bi bi-check-circle-fill text-success"></i> Acesso prioritário a teste de ferramentas exclusivas</li>
              <li><i class="bi bi-check-circle-fill text-success"></i> Agende uma reunião de análise do plano ideal para sua empresa</li>
            </ul>
            <a href="#" class="btn btn-outline-primary w-100">Assine Agora</a>
          </div>
        </div>
      </div>

      <!-- Plano Estratégia -->
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header" style="border-top: 4px solid #0d6efd;">
            <i class="bi bi-rocket" style="font-size: 1.5rem;"></i>
            <span class="ms-2">Ajustar o Marketing e Vendas</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Plano Estratégia</h5>
            <p>
              <span class="price-original">R$179,90</span><br>
              <span class="price-discount">R$79,90/mês</span>
            </p>
            <ul class="list-unstyled text-start">
              <li>Acesso a Ferramentas e Vídeos Estratégicos para organizar a empresa nas áreas de Marketing, Vendas e Atendimento ao Cliente.</li>
              <li><i class="bi bi-check-circle-fill text-success"></i> Suporte via WhatsApp para ajudar nos processo de implementação</li>
              <li><i class="bi bi-check-circle-fill text-success"></i> Receba vídeos estratégicos exclusivos para seu segmento no Whatsapp</li>
            </ul>
            <a href="#" class="btn btn-outline-primary w-100">Assine Agora</a>
          </div>
        </div>
      </div>

      <!-- Plano Ferramenta -->
      <div class="col-md-4">
        <div class="card text-center">
          <div class="card-header" style="border-top: 4px solid #198754;">
            <i class="bi bi-gem" style="font-size: 1.5rem;"></i>
            <span class="ms-2">Consolidar os Processos</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Plano Ferramenta</h5>
            <p>
              <span class="price-original">R$399,90</span><br>
              <span class="price-discount">R$189,90/mês</span>
            </p>
            <ul class="list-unstyled text-start">
              <li> Acesso a Todas as Ferramentas e Vídeos Estratégicos para organizar todos os processos da empresa, criando valor a marca e cultura</li>
              <li><i class="bi bi-check-circle-fill text-success"></i> Sistema de controle exclusivo do fepacoc que garante o crescimento da empresa, com suporte da nossa equipe</li>
              <li><i class="bi bi-check-circle-fill text-success"></i> Lives exclusivas com especialistas sobre estratégias e novidades do mercado.</li>
            </ul>
            <a href="#" class="btn btn-outline-primary w-100">Assine Agora</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Plano Personalizado -->
    <div class="row">
      <div class="col-12">
        <div class="card text-center">
          <div class="card-header" style="border-top: 4px solidrgb(40, 43, 44);">
            <i class="bi bi-person-check" style="font-size: 1.5rem;"></i>
            <span class="ms-2">Empresas que buscam crescimento estruturado</span>
          </div>
          <div class="card-body">
            <h5 class="card-title">Plano Personalizado</h5>
            <p class="card-text">
              Para empresas que desejam um consultor ativo no seu projeto, para garantir o crescimento estruturado da empresa.
            </p>
            <a href="#" class="btn btn-dark ">Falar com Consultor</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Botão para expandir a tabela comparativa -->
    <div class="text-center mt-5 mb-5">
      <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#comparativoFuncionalidades" aria-expanded="false" aria-controls="comparativoFuncionalidades">
        Comparar Funcionalidades
      </button>
    </div>

    <!-- Tabela Comparativa de Funcionalidades -->
    <div class="collapse" id="comparativoFuncionalidades">
      <div class="card card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered align-middle">
            <thead class="table-light">
              <tr class="text-center">
                <th>Funcionalidade</th>
                <th>Gratuito</th>
                <th>Estratégia</th>
                <th>Ferramenta</th>
              </tr>
            </thead>
            <tbody>
              <!-- Linhas 1 a 10: disponíveis para Gratuito e Estratégia; Ferramenta sempre -->
              <tr>
                <td>1. OKRs</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>2. Índice de Eficiência Operacional</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>3. Indicadores de Desempenho</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>4. Crescimento Real da Empresa</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>5. Valuation</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>6. Custo de Aquisição de Clientes (CAC)</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>7. Lucro Antes de Juros, Impostos e Taxas (EBIT)</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>8. Performance de Departamentos</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>9. Ferramentas para Melhorar Atendimento</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>10. Treinamentos para Equipe</td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <!-- Linhas 11 a 30: Disponíveis apenas para o Plano Estratégia e Ferramenta -->
              <tr>
                <td>11. Relacionamento Com Cliente</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>12. Criação de Cultura da Empresa</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>13. Hábitos para Realizar Com a Equipe</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>14. Incentivos da Sua Empresa</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>15. Performance de Terceiros</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>16. Estratégias de Reuniões</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>17. Estratégias de Marketing</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>18. Classificação dos Preços de Produtos</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>19. Tendência dos seus preços</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>20. Retorno de Investimento</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>21. Análise de Performance da Equipe</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>22. Análise de Receitas e Despesas</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>23. Análise de Criativos de Anúncios</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>24. Radar de Performance</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>25. Números Mágicos</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>26. Principais Indicadores (CMV, EBIT..)</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>27. Despesas Previsionadas</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>28. Ativos, Passivos e Patrimônio</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>29. Melhoria de Performance da Equipe</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>30. Qualidade da Infraestrutura</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <!-- Linhas 31 a 52: Disponíveis apenas para o Plano Ferramenta -->
              <tr>
                <td>31. Avaliação de Funcionários</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>32. Estratégia de Venda p/ Sua Localidade</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>33. Estratégia de Endomarketing</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>34. Criação de Parcerias B2B</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>35. Divulgação Através de Eventos</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>36. Políticas Internas e de Cultura</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>37. Estudo da Persona</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>38. Segmentação dos Produtos</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>39. Canais de Vendas</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>40. Avaliação de Fornecedores</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>41. Valorização da Marca</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>42. Formatos de Entrega</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>43. Estratégias de UP SELL</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>44. Táticas de Vendas</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>45. Análise das Redes Sociais</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>46. Análise do Tráfego Pago</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>47. Classificação de Melhores Criativos</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>48. Apresentação de Ferramentas Úteis</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>49. 60 Estratégias de Anúncios</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>50. Construção de Funil Interno de Clientes</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>51. Análise de Performance do Atendimento</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
              <tr>
                <td>52. Segmentação das Vendas</td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-x-circle-fill text-danger"></i></td>
                <td class="text-center"><i class="bi bi-check-circle-fill text-success"></i></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
