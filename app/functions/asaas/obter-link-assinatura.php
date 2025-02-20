<?php
require_once('../../vendor/autoload.php');
$pasta = dirname(__DIR__);
$dotenv = Dotenv\Dotenv::createImmutable(''.$pasta);
$dotenv->load();
function listarCobrancasDaAssinatura($idAssinatura) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value'; // Ajuste para a sua chave de API real

    try {
        $response = $client->request('GET', "https://sandbox.asaas.com/api/v3/subscriptions/{$idAssinatura}/payments", [
            'headers' => [
                'Content-Type' => 'application/json',
                'access_token' => $asaasApiKey,
            ],
        ]);

        $cobrancas = json_decode($response->getBody(), true);

        // Verificar se existe 'invoiceUrl' e retornar os dados
        $resultados = [];
        if (!empty($cobrancas) && isset($cobrancas['data'])) {
            foreach ($cobrancas['data'] as $cobranca) {
                if (isset($cobranca['invoiceUrl'])) {
                    $resultados[] = [
                        'id' => $cobranca['id'],
                        'invoiceUrl' => $cobranca['invoiceUrl']
                    ];
                }
            }
        }

        return $resultados;

    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        throw new Exception('Erro ao listar cobranças da assinatura: ' . $e->getMessage());
    }
}

