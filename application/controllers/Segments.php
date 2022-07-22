<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este modulo permite obtener un detalle de los segmentos que podrán ser utilizados en tus campañas.
 */
class Segments extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Obtener colección de segmentos 
    Devuelve una lista de todas los segmentos. Pueden filtrarse por nombre.
    */
    public function getall_post(){
        $uri = $this->uri->uri_string();
        //API-KEY es el key de envialo simple api
        $AK = $this->input->get_request_header('API-KEY');
        //AUTH es el key de rest_controller de codeigniter
        $auth =  $this->input->get_request_header('AUTH');
        $api = 'api.esmsv.com/v1/'.$uri;
        
        $rawdata = file_get_contents("php://input");  
        $method = "POST";        
        $auth = $AK;
        $app = api($api, $rawdata, $method, $auth);
        
        $this->response($app); 
    }
}