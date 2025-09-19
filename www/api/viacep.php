<?php

class viaCep
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
                        <h6 class=\"text-start\">Resultados da busca para o CEP: ".htmlspecialchars($retorno->cep)." </h6>
                        <hr>
                        <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>Logradouro:</b> <span>".htmlspecialchars($retorno->logradouro)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Complemento:</b> <span>".htmlspecialchars($retorno->complemento)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Unidade:</b> <span>".htmlspecialchars($retorno->unidade)."</span>
                            </div>
                        </div>
                            <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>Bairro:</b> <span>".htmlspecialchars($retorno->bairro)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Localidade:</b> <span>".htmlspecialchars($retorno->localidade)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>UF:</b> <span>".htmlspecialchars($retorno->uf)."</span>
                            </div>
                            </div>
                            <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>Estado:</b> <span>".htmlspecialchars($retorno->estado)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>Região:</b> <span>".htmlspecialchars($retorno->regiao)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>IBGE:</b> <span>".htmlspecialchars($retorno->ibge)."</span>
                            </div>
                            </div>
                            <div class=\"row border\">
                            <div class=\"col-md-4 col-4\">
                                <b>GIA:</b> <span>".htmlspecialchars($retorno->gia)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>DDD:</b> <span>".htmlspecialchars($retorno->ddd)."</span>
                            </div>
                            <div class=\"col-md-4 col-4\">
                                <b>SIAFI:</b> <span>".htmlspecialchars($retorno->siafi)."</span>
                            </div>

                        </div>";
        }
        return $html;
    }
}
