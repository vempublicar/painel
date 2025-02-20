<?Php

// Define as opções válidas
$validOptions = ["Ferramenta", "Personalizado", "Estrategia", "Gratuito"];

// Verifica se o parâmetro 'plano' existe na URL
if (!isset($_GET['plano'])) {
    $plano = null;
}

$planoBase64 = $_GET['plano'];

// Decodifica o valor em base64 com verificação rigorosa
$decoded = base64_decode($planoBase64, true);

// Verifica se a decodificação foi bem-sucedida e se o valor decodificado é uma das opções válidas
if ($decoded === false || !in_array($decoded, $validOptions)) {
    $plano = null;
}

// Se tudo estiver correto, $decoded contém o plano válido
$plano = $decoded;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Fepacoc | Cadastro</title>
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
<body class="d-flex flex-column">
    <div class="page page-center">
        <div class="container container-normal py-4">
        
            <div class="row align-items-center g-4">
                <!-- Coluna principal: Formulário -->
                 <?php 
                    if($plano != null){
                 ?>
                    <div class="">
                    
                        <div class="">
                            <div class="text-center mb-4">
                                <a href="." id="logo-branco">
                                    <img src="vendor/images/fepacoc/logotipo_fepacoc.png"
                                        width="210" 
                                        alt="FEPACOC"
                                        class="navbar-brand-image">
                                </a>
                            </div>
                            <div class="card ">
                                                <div class="card-body">
                                <h2 class="h2 text-center mb-4">Cadastro de Membro</h2>
                                    <form action="app/functions/auth/register_user.php" method="post" id="registrationForm">
                                        <!-- Linha com duas colunas: Empresa e Contato -->
                                        <div class="row">
                                            <!-- Cadastro da Empresa -->
                                            
                                                        <div class="col-md-6">
                                                            <h4 class="mb-3">Cadastro da Empresa</h4>
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <!-- Nome da Empresa -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Nome da Empresa</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="nome_empresa"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <!-- CNPJ ou CPF -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">CNPJ ou CPF</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="cnpj_cpf"
                                                                            id="cnpjCpf"
                                                                            required
                                                                            placeholder="00.000.000/0000-00 ou 000.000.000-00">
                                                                    </div>                                                                
                                                                </div>
                                                                <div class="col-6">
                                                                    <!-- CEP -->
                                                                        <div class="mb-3">
                                                                        <label class="form-label">CEP</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="cep"
                                                                            id="cep"
                                                                            placeholder="00000-000"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Faturamento Atual</label>
                                                                        <select class="form-select" name="faturamento" required>
                                                                            <option value="">Selecione...</option>
                                                                            <option value="1 a 10 mil">1 a 10 mil</option>
                                                                            <option value="10 a 30 mil">10 a 30 mil</option>
                                                                            <option value="30 a 60 mil">30 a 60 mil</option>
                                                                            <option value="Acima de 60 mil">Acima de 60 mil</option>
                                                                        </select>
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div class="col-8">
                                                                    <!-- Cidade, Estado e Endereço (readonly) -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Cidade</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="cidade"
                                                                            id="cidade"
                                                                            >
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Estado (UF)</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="estado"
                                                                            id="estado"
                                                                            maxlength="2" >
                                                                    </div>
                                                                </div>
                                                                <div class="col-8">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Endereço</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="endereco"
                                                                            id="endereco"
                                                                            >
                                                                    </div>
                                                                </div>
                                                                <div class="col-4">
                                                                    <!-- Número -->
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Número</label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            name="numero"
                                                                            maxlength="6">
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>   
                                                        </div>
                                                    <div class="col-md-6">
                                                        <h4 class="mb-3">Contato</h4>
                                                        <!-- Nome Completo -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Nome Completo</label>
                                                            <input type="text" class="form-control" name="name" required>
                                                        </div>
                                                        <!-- Email -->
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" class="form-control" name="email-username" required>
                                                        </div>
                                                        <!-- WhatsApp -->
                                                        <div class="mb-3">
                                                            <label class="form-label">WhatsApp</label>
                                                            <input type="text"
                                                                class="form-control"
                                                                name="whatsapp"
                                                                id="whatsapp"
                                                                placeholder="(00) 00000-0000"
                                                                required>
                                                        </div>
                                                        <!-- Plano Escolhido (readonly) -->
                                                        <div class="mb-3">
                                                                <label class="form-label">Plano Escolhido</label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    name="plano"
                                                                    value="<?= $plano ?>"
                                                                    readonly>
                                                            </div>
                                                        <!-- Senha gerada (hidden) -->
                                                        <input type="hidden" name="password" value="<?= bin2hex(random_bytes(4)); ?>">
                                                    </div>
                                        </div>

                                        <!-- Texto de instruções -->
                                        <p class="text-muted mt-3" style="font-size: .875rem;">
                                            Após o cadastro, será enviado um email com a chave de acesso. Já dentro do painel,
                                            você poderá selecionar o formato de pagamento e, caso esteja dentro do horário comercial,
                                            em breve um membro da nossa equipe poderá entrar em contato via WhatsApp.
                                        </p>
                                        <div class="card my-4">
                                            <div class="card-body">
                                                <h5 class="card-title">Nossos Compromissos</h5>
                                                <ul class="list-unstyled">
                                                <li class="mb-2">
                                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                                    ☑ Não enviaremos e-mail de propaganda (apenas se o usuário assinar a newsletter).
                                                </li>
                                                <li class="mb-2">
                                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                                    ☑ Não enviaremos WhatsApp de ofertas de produtos (apenas mensagens de suporte ou material estratégico se pré-cadastrado).
                                                </li>
                                                <li class="mb-2">
                                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                                    ☑ A qualquer momento, você poderá solicitar a exclusão de seus dados do nosso banco.
                                                </li>
                                                <li class="mb-2">
                                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                                    ☑ Nos comprometemos a trabalhar em soluções e estratégias que beneficiam sua empresa.
                                                </li>
                                                <li class="mb-2">
                                                    <i class="bi bi-check-circle-fill text-success me-2"></i>
                                                    ☑ Qualquer inconsistência ou falhas, solicite suporte especializado; temos um time preparado para resolver.
                                                </li>
                                                </ul>
                                            </div>
                                                <p class="text-center m-1" ><b>Entre apenas se você realmente vai se comprometer em melhorar sua empresa.<br> Da nossa parte, faremos o máximo para que você e sua empresa tenham sucesso!</b></p>
                                        </div>

                                        <!-- Botão de Envio -->
                                         <div class="row">
                                         <div class="form-check mb-3 mt-2 col-md-6">
                                        
                                        <input type="checkbox" class="form-check-input" id="agreeCheck">
                                        <label class="form-check-label" for="agreeCheck">
                                        ← Ao cadastrar, você concorda com nossos 
                                            <a href="https://fepacoc.com/termos" target="_blank">Termos de Uso</a> e 
                                            <a href="https://fepacoc.com/politica-privacidade" target="_blank">Política de Privacidade</a>.
                                        </label>
                                        </div>
                                        <div class="form-footer mb-3 col-md-6">
                                        <button type="submit" class="btn btn-indigo w-100" id="submitBtn" disabled>REGISTRAR</button>
                                        </div>
                                         </div>
                                        
                                    </form>
                            </div>
                            </div>
                            <div class="text-center text-secondary mt-3">
                                Já possui uma conta? <a href="login" tabindex="-1">Entrar</a>
                            </div>
                        </div>
                    </div>
                 <?php 
                    }else{
                 ?>
                    <div class="card text-center" style="max-width: 400px; margin: 20px auto;">
                    <div class="card-body">
                        <p class="card-text">Selecione um plano válido para continuar.</p>
                        <a href="planos" class="btn btn-primary">Planos</a>
                    </div>
                    </div>
                 <?php 
                    }
                 ?>
                
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="vendor/js/tabler.min.js" defer></script>
    <script src="vendor/js/demo.min.js" defer></script>
    <!-- jQuery e Máscara -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script>
        document.getElementById('agreeCheck').addEventListener('change', function() {
            document.getElementById('submitBtn').disabled = !this.checked;
        });
    </script>
    <script>
      $(document).ready(function() {
        // Máscaras
        $('#whatsapp').mask('(00) 00000-0000');
        // Para CPF/CNPJ de modo simples (exemplo):
        $('#cnpjCpf').on('input', function() {
        // Permite apenas números enquanto o usuário digita
        this.value = this.value.replace(/\D/g, '');
        });

        $('#cnpjCpf').on('blur', function() {
        var val = $(this).val();
        var numeric = val.replace(/\D/g, '');
        if (numeric.length === 11) {
            // Formata como CPF: XXX.XXX.XXX-XX
            var cpf = numeric.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            $(this).val(cpf);
            $(this).removeClass('is-invalid');
        } else if (numeric.length === 14) {
            // Formata como CNPJ: XX.XXX.XXX/XXXX-XX
            var cnpj = numeric.replace(/(\d{2})(\d{3})(\d{3})(\d{4})(\d{2})/, "$1.$2.$3/$4-$5");
            $(this).val(cnpj);
            $(this).removeClass('is-invalid');
        } else {
            // Se não tiver 11 ou 14 dígitos, adiciona a classe de erro (borda vermelha)
            $(this).addClass('is-invalid');
        }
        });

        // Habilita/desabilita o botão se os campos obrigatórios estão preenchidos
        $('#registrationForm input[required], #registrationForm select[required]').on('keyup change', function() {
          let valid = true;
          $('#registrationForm input[required], #registrationForm select[required]').each(function() {
            if (!$(this).val()) {
              valid = false;
            }
          });
          $('#submitBtn').prop('disabled', !valid);
        });
      });

      // Consulta CEP via ViaCEP
      function limpaCamposEndereco() {
        $('#cidade').val('');
        $('#estado').val('');
        $('#endereco').val('');
      }
      document.getElementById('cep').addEventListener('blur', function() {
        let cep = this.value.replace(/\D/g, '');
        if (cep.length !== 8) {
          limpaCamposEndereco();
          return;
        }
        fetch('https://viacep.com.br/ws/'+ cep +'/json/')
          .then(response => response.json())
          .then(data => {
            if (data.erro) {
              limpaCamposEndereco();
              return;
            }
            $('#cidade').val(data.localidade || '');
            $('#estado').val(data.uf || '');
            $('#endereco').val(data.logradouro || '');
          })
          .catch(() => limpaCamposEndereco());
      });
    </script>
</body>
</html>
