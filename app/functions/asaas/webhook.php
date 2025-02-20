<?php

function configurarWebhookAsaas($urlWebhook) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = getenv('ASAAS_API_KEY');

    try {
        $response = $client->request('POST', 'https://sandbox.asaas.com/api/v3/webhookConfigurations', [
            'headers' => [
                'access_token' => $asaasApiKey,
                'Content-Type' => 'application/json'
            ],
            'json' => [
                'url' => $urlWebhook,
                'email' => 'email@example.com', // Opcional: E-mail para notificações de erro
                'enabled' => true,
                'interrupted' => false,
                // Aqui você pode configurar os eventos específicos que deseja receber
                'events' => ['PAYMENT_RECEIVED', 'PAYMENT_OVERDUE', 'PAYMENT_CONFIRMED', 'PAYMENT_UPDATED', 'SUBSCRIPTION_CANCELED', 'SUBSCRIPTION_DELETED', 'SUBSCRIPTION_UPDATED']
            ]
        ]);

        return json_decode($response->getBody(), true);
    } catch (\GuzzleHttp\Exception\GuzzleException $e) {
        throw new Exception('Erro ao configurar o webhook: ' . $e->getMessage());
    }
}
