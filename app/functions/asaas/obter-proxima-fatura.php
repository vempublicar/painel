<?php
require_once('vendor/autoload.php');
$pasta = dirname(__DIR__);
$dotenv = Dotenv\Dotenv::createImmutable(''.$pasta);
$dotenv->load();
function obterProximaFaturaAsaas($idAssinatura) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = $_ENV['ASAAS_API_KEY'] ?? 'fallback_default_value';

    if (!empty($idAssinatura)) {
        // URL para obter a próxima fatura da assinatura
        $urlProximaFatura = "https://sandbox.asaas.com/api/v3/subscriptions/$idAssinatura/payments?status=PENDING&limit=1";

        try {
            // Faz a requisição GET
            $response = $client->request('GET', $urlProximaFatura, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'access_token' => $asaasApiKey,
                ],
            ]);

            // Decodifica o JSON da resposta
            $data = json_decode($response->getBody()->getContents(), true);

            // Verifica se há alguma fatura pendente
            if (!empty($data['data']) && isset($data['data'][0])) {
                return $data['data'][0]; // Retorna a próxima fatura
            } else {
                return 'false';
            }

        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return 'false';
        }
    }

    return 'null';
}
