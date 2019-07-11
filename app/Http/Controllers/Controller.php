<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function peticion($metodo, $url, $paramatros=[]){
        $cliente = new Client;
        $respuesta = $cliente->request($metodo, $url, $paramatros);
        return $respuesta->getBody()->getContents();
    }
}