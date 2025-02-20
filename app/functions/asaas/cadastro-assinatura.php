<?php 
require_once('../../vendor/autoload.php');
$pasta = dirname(__DIR__);
$dotenv = Dotenv\Dotenv::createImmutable(''.$pasta);
$dotenv->load();

function cadastrarAssinaturaNoAsaas($dadosAssinatura) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value';

    
    try {
        $response = $client->request('POST', 'https://sandbox.asaas.com/api/v3/subscriptions', [
            'body' => json_encode($dadosAssinatura),
            'headers' => [
                'Content-Type' => 'application/json',
                'access_token' => $asaasApiKey,
            ],
        ]);

        $subscriptionData = json_decode($response->getBody(), true);
        return $subscriptionData; // Retorna os dados da assinatura

    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        return false;
    }
}

function alterarAssinaturaNoAsaas($subscriptionId, $dadosAlterados) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value';

    try {
        // Faz a requisição para alterar a assinatura
        $response = $client->request('PUT', 'https://sandbox.asaas.com/api/v3/subscriptions/' . $subscriptionId, [
            'body' => json_encode($dadosAlterados),
            'headers' => [
                'Content-Type' => 'application/json',
                'access_token' => $asaasApiKey,
            ],
        ]);

        // Decodifica a resposta em JSON
        $alteracaoData = json_decode($response->getBody(), true);
        return $alteracaoData; // Retorna os dados da assinatura alterada

    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        return false;
    }
}
