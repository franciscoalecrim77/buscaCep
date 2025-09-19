<?php

class viacep
{

    public function buscaCep($cepnovo)
    {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://viacep.com.br/ws/' . $cepnovo . '/json',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }

    public function retorno($retorno)
    {
        $html = "";
        if(isset($retorno->erro) && $retorno->erro == true){
            $html .= "<div class=\"alert alert-danger mt-2\" role=\"alert\">
                        CEP n&atilde;o encontrado!
                    </div>";
            return $html;
        }else{

        
        $html .= "    <div class=\"container mt-2\">
                        <h6 class=\"text-start\">Resultados da busca para o CEP: ".$retorno->cep." </h6>
                        <hr>
                        <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>Logradouro:</b> <span>".$retorno->logradouro."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Complemento:</b> <span>".$retorno->complemento."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Unidade:</b> <span>".$retorno->unidade."</span>
                            </div>
                        </div>
                            <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>Bairro:</b> <span>".$retorno->bairro."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Localidade:</b> <span>".$retorno->localidade."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>UF:</b> <span>".$retorno->uf."</span>
                            </div>
                            </div>
                            <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>Estado:</b> <span>".$retorno->estado."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Região:</b> <span>".$retorno->regiao."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>IBGE:</b> <span>".$retorno->ibge."</span>
                            </div>
                            </div>
                            <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>GIA:</b> <span>".$retorno->gia."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>DDD:</b> <span>".$retorno->ddd."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>SIAFI:</b> <span>".$retorno->siafi."</span>
                            </div>

                        </div>";
        }
        return $html;
    }
}
