<?php

class Curl
{

    private $cep = [];

    public function getCep($cep)
    {
        $cep = '05164134';

        $curl = curl_init();

// Configura
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => 'viacep.com.br/ws/' . $cep . '/json/',
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                "cache-control: no-cache",
                'Accept: application/json',
                'Content-Type: application/json'
            ),
        ]);

// Envio e armazenamento da resposta
        $cep = curl_exec($curl);

        $error = curl_error($curl);
// Fecha e limpa recursos
        curl_close($curl);
    }

    public function Teste() {

        $this->getCep();

        echo $cep;

    }

}



?>


