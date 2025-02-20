<?php
require_once('../../vendor/autoload.php');
$pasta = dirname(__DIR__);
$dotenv = Dotenv\Dotenv::createImmutable(''.$pasta);
$dotenv->load();

function cadastrarClienteNoAsaas($dadosCliente) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value';

    try {
        $response = $client->request('POST', 'https://sandbox.asaas.com/api/v3/customers', [
            'body' => json_encode($dadosCliente),
            'headers' => [
                'Content-Type' => 'application/json',
                'access_token' => $asaasApiKey,
            ],
        ]);

        $responseArray = json_decode($response->getBody(), true);

        // Verifica se a resposta contém os dados do cliente
        if (!empty($responseArray) && isset($responseArray['id'])) {
            return $responseArray;
        } else {
            return null; // Se o cliente não for criado corretamente
        }

    } catch (\GuzzleHttp\Exception\ClientException $e) {
        // Captura a resposta de erro
        $responseBody = $e->getResponse()->getBody()->getContents();
        $errorArray = json_decode($responseBody, true);

        // Verifica se o erro é relacionado a CPF/CNPJ inválido
        if (!empty($errorArray['errors'][0]['code']) && $errorArray['errors'][0]['code'] === 'invalid_object') {
            // throw new Exception('Erro: O CPF/CNPJ informado é inválido.');
            return 'cpf';
        } else {
            // throw new Exception('Erro ao cadastrar cliente: '. $e->getMessage());
            return 'erro';
        }
    }
}
