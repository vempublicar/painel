<?php
if (isset($_GET['user'])) {
    $asaasId = $_GET['user'];
}
if (isset($_GET['plan'])) {
    if ($_GET['plan'] == 'estrategia') {
        $valorPlanoAnual = 79;
        $descricaoPlano = '
            Com o plano ESTRATÉGIA, por apenas R$79/ano, você poderá aprender a aplicar o método FEPACOC diretamente em sua empresa 
            e ter acesso ao grupo exclusivo FEPACOC, onde empresários compartilham experiências e conhecimento. Esse plano inclui 
            estratégias e aulas que irão auxiliar na implementação de uma gestão mais eficiente e orientada para resultados. Ele é 
            ideal para quem está começando e quer entender melhor o método FEPACOC, aproveitando as lições e estratégias aplicáveis 
            ao dia a dia da empresa, de forma prática e acessível.
        ';
        $identificadorAssinatura = 'PLANO-ESTRATEGIA-2';
        $imagem = 'estrategia.png';
        $plano = 'Início';
    }
    if ($_GET['plan'] == 'analise') {
        $valorPlanoMensal = 247;
        $valorPlanoAnual = 1790;
        $descricaoPlano = 'O plano ANÁLISE oferece acesso completo a estratégias avançadas e todas as ferramentas do FEPACOC por 
        R$247/mês no boleto, ou com um desconto de 39% no plano anual, de R$2.964,00 por apenas R$1.790,00. Com este plano, você terá 
        à disposição as estratégias mais sofisticadas de gestão, além de acesso completo a todas as ferramentas da plataforma, 
        permitindo uma administração eficiente e focada no crescimento. Além disso, os treinamentos exclusivos proporcionarão uma 
        capacitação profunda, ajudando você a implementar o método de forma prática e eficaz. Esse plano é ideal para quem busca 
        um entendimento mais avançado da metodologia FEPACOC e deseja obter o máximo de sua aplicação com ferramentas e treinamentos 
        de alto nível.';
        $identificadorAssinatura = 'PLANO-ANALISE-2';
        $imagem = 'analise.png';
        $plano = 'Estratégia ';
    }
    if ($_GET['plan'] == 'crescimento') {
        $valorPlanoMensal = 579;
        $valorPlanoAnual = 4870;
        $descricaoPlano = 'O plano CRESCIMENTO é a escolha ideal para empresas que buscam uma gestão robusta e a otimização de seus 
        resultados. Por R$579/mês no plano mensal, ou com um desconto de 29% no plano anual, que sai de R$6.948,00 por apenas R$4.870,00, 
        você terá acesso a uma análise detalhada de até 2 CNPJs. Este plano inclui todas as ferramentas disponíveis da plataforma FEPACOC, 
        garantindo que você tenha tudo o que precisa para uma gestão eficaz. Além disso, os treinamentos exclusivos fornecerão conhecimentos 
        práticos para implementar estratégias de crescimento. Com uma consultoria semanal de 1 hora, você receberá acompanhamento 
        personalizado, ajudando a direcionar suas ações e ajustes de forma estratégica. Esse plano é perfeito para quem deseja não 
        apenas manter, mas expandir sua operação com confiança e eficiência.';
        $identificadorAssinatura = 'PLANO-CRESCIMENTO-2';
        $imagem = 'crescimento.png';
        $plano = 'Crescimento';
    }
    if ($_GET['plan'] == 'aceleracao') {
        $valorPlanoMensal = 1690;
        $descricaoPlano = 'O plano ACELERAÇÃO é voltado para empresas que possuem faturamento acima de R$150.000 por mês e buscam impulsionar 
        seu crescimento de maneira estratégica. Com um investimento de R$1.690/mês no plano mensal, você terá acesso a uma análise detalhada 
        de até 3 CNPJs, permitindo uma gestão ainda mais abrangente e eficaz. Este plano inclui todas as ferramentas disponíveis da plataforma 
        FEPACOC, garantindo que você tenha recursos completos para otimizar sua operação. Além disso, os treinamentos exclusivos proporcionarão 
        capacitação especializada, ajudando a implementar estratégias de alto impacto. Com uma consultoria semanal de 2 horas, você receberá 
        um acompanhamento personalizado e direcionado, além de gestão conjunta para alinhar suas ações com os melhores especialistas. 
        Esse plano é ideal para empresas que estão prontas para acelerar seu crescimento e maximizar resultados de forma eficaz.';
        $identificadorAssinatura = 'PLANO-ACELERACAO-2';
        $imagem = 'acelerado.png';
        $plano = 'Aceleração';
    }
}

?>


<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fepacoc | Registro</title>
    <!-- CSS files -->
    <link rel="icon" type="image/x-icon" href="vendor/images/fepacoc/icone.png" />
    <link href="vendor/css/tabler.min.css" rel="stylesheet" />
    <link href="vendor/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="vendor/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="vendor/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="vendor/css/projeto.css" rel="stylesheet" />
    <link href="vendor/css/demo.min.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>


<body class="layout-fluid">
    <script src="vendor/js/demo-theme.min.js"></script>
    <div class="page page-center">
        <div class="text-start p-3 mb-0">
            <a href="." id="logo-branco">
                <img src="vendor/images/fepacoc/logotipo_fepacoc.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
            <a href="." id="logo-escuro">
                <img src="vendor/images/fepacoc/logobranco_fepacoc.png" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </div>
        <div class="container container-normal py-1">
            <div class="row align-items-center g-2">
                <div class="col-sm-7 ">
                    <img src="vendor/images/template/<?= $imagem ?>" height="200" class="d-block mx-auto" alt="">
                    <h2 class="h2 text-center mb-2"><?= $identificadorAssinatura ?></h2>
                    <div class="col-sm-9 m-auto">
                        <p class="text-secondary text-center " ><?= $descricaoPlano ?></p>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="container-tight">

                        <div class="card card-md">
                            <div class="card-body">
                                <h2 class="h2 text-center mb-2">Cadastro da Assinatura</h2>
                                <form action="function/auth/cadastro-plano-asaas.php" method="post" autocomplete="on" novalidate>
                                    <input type="hidden" class="form-control" name="customer" value="<?= $asaasId ?>" >
                                    <input type="hidden" class="form-control bg-secondary-lt" name="dueDate" value="<?= date('Y-m-d', strtotime('+2 day')) ?>" readonly>
                                    <input type="hidden" class="form-control bg-secondary-lt" name="endDate" value="<?= date('Y-m-d', strtotime('+1 Year')) ?>" readonly>
                                    <input type="hidden" class="form-control bg-secondary-lt" name="externalReference" value="<?= $identificadorAssinatura ?>" readonly>
                                    <input type="hidden" class="form-control" name="description" value="<?= $descricaoPlano ?>">
                                    <input type="hidden" name="billingType" value="UNDEFINED" class="form-selectgroup-input">

                                    <!-- Adicionar campos para CNPJ e nome da empresa -->
                                    <div class="mb-2">
                                        <label class="form-label">Nome da Empresa</label>
                                        <input type="text" class="form-control" name="companyName" placeholder="Nome da empresa">
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label">CNPJ</label>
                                        <input type="text" class="form-control" name="cnpj" data-mask="00.000.000/0000-00" pattern="\d{2}\.\d{3}\.\d{3}/\d{4}-\d{2}" required>
                                    </div>                                   

                                    <div class="mb-2">
                                        <label class="form-label">Tipo</label>
                                        <input type="hidden" name="cycle" id="cycle" value="MONTHLY">
                                        <div class="form-selectgroup-boxes row mb-3">
                                            <?php if(isset($valorPlanoMensal )){ ?>
                                            <div class="col-lg-6">
                                                <label class="form-selectgroup-item">
                                                    <input type="radio" name="value" value="<?= $valorPlanoMensal ?>" class="form-selectgroup-input" checked onclick="setCycle('MONTHLY')">
                                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                        <span class="me-3">
                                                            <span class="form-selectgroup-check"></span>
                                                        </span>
                                                        <span class="form-selectgroup-label-content">
                                                            <span class="d-block text-secondary">Pagamento Mensal</span>
                                                            <span class="form-selectgroup-title strong mb-1">R$ <?= number_format($valorPlanoMensal, 2, ',', '.') ?></span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <?php } 
                                            if(isset($valorPlanoAnual)){
                                            ?>
                                            <div class="col-lg-6">
                                                <label class="form-selectgroup-item">
                                                    <input type="radio" name="value" value="<?= $valorPlanoAnual ?>" class="form-selectgroup-input" onclick="setCycle('YEARLY')">
                                                    <span class="form-selectgroup-label d-flex align-items-center p-3">
                                                        <span class="me-3">
                                                            <span class="form-selectgroup-check"></span>
                                                        </span>
                                                        <span class="form-selectgroup-label-content">
                                                            <span class="d-block text-secondary">Pagamento Anual</span>
                                                            <span class="form-selectgroup-title strong mb-1">R$ <?= number_format($valorPlanoAnual, 2, ',', '.') ?></span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                            <?php } ?>
                                        </div>
                                    </div>

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-primary w-100">Avançar</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="vendor/js/tabler.min.js" defer></script>
    <script src="vendor/js/demo.min.js" defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('togglePassword').addEventListener('click', function(e) {
                e.preventDefault();
                const passwordInput = document.getElementById('passwordInput');
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
            });
        });

        function setCycle(cycle) {
            document.getElementById('cycle').value = cycle;
        }
    </script>

</body>

</html>