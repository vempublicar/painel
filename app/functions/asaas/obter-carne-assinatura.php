<?php
require_once('../../vendor/autoload.php');
$pasta = dirname(__DIR__);
$dotenv = Dotenv\Dotenv::createImmutable(''.$pasta);
$dotenv->load();
function obterCarneAsaas($idAssinatura) {
    $client = new \GuzzleHttp\Client();
    $asaasApiKey = getenv('ASAAS_API_KEY');
    
    if (!empty($idAssinatura)) {
        // Calcula o ano seguinte
        $anoAtual = date("Y");
        $anoSeguinte = $anoAtual + 1;
        $mesAtual = date("m");

        // URL para obter o carnê em PDF
        $urlPdf = "https://sandbox.asaas.com/api/v3/subscriptions/$idAssinatura/paymentBook?month=$mesAtual&year=$anoSeguinte";

        try {
            $responsePdf = $client->request('GET', $urlPdf, [
                'headers' => [
                    'accept' => 'application/pdf',
                    'access_token' => $asaasApiKey,
                ],
            ]);

            // Salva o PDF
            $pdfContent = $responsePdf->getBody()->getContents();
            $pdfPath = '../../app/assinaturas/' . $idAssinatura . '.pdf';
            $pdfPathForClient = 'app/assinaturas/' . $idAssinatura . '.pdf';
            file_put_contents($pdfPath, $pdfContent);

            return $pdfPathForClient;

        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            throw new Exception('Erro ao baixar o carnê: ' . $e->getMessage());
        }
    }

    return null;
}
