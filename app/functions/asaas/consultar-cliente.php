<?php
require_once('../../vendor/autoload.php');
$pasta = dirname(__DIR__);
$dotenv = Dotenv\Dotenv::createImmutable(''.$pasta);
$dotenv->load();
function verificarClienteExistenteNoAsaas($cpfCnpj) {
   $client = new \GuzzleHttp\Client();
   $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value';

    try {
        $responseConsulta = $client->request('GET', 'https://sandbox.asaas.com/api/v3/customers?cpfCnpj=' . $cpfCnpj, [
            'headers' => [
                'Content-Type' => 'application/json',
                'access_token' => $asaasApiKey, // Substitua pela sua chave de API real
            ]
        ]);

        $dadosConsulta = json_decode($responseConsulta->getBody(), true);
          
            // Verifica se a resposta contém os dados do cliente
            if (!empty($dadosConsulta) && isset($dadosConsulta['data'][0])) {
                // Cliente existe ou foi criado com sucesso, retorna os dados do cliente
                return $dadosConsulta['data'][0];
            } else {
                // Nenhum cliente encontrado ou criado, retorna null
                return null;
            }

    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        throw new Exception('Erro ao consultar cliente: '.$asaasApiKey . $e->getMessage());
    }
}

function consultaClienteId ($customer){
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value';
    $response = $client->request('GET', 'https://sandbox.asaas.com/api/v3/customers/'.$customer, [
        'headers' => [
            'Content-Type' => 'application/json',
            'access_token' => $asaasApiKey,
        ],
    ]);
    $customerData = json_decode($response->getBody(), true);

    return $customerData;
}

