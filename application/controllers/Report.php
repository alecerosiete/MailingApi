<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este módulo te permitirá conocer el reporte y las estadísticas de cada campaña enviada.
 */
class Report extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Reporte general  
    Devuelve el reporte general de una campaña.
    */
    public function campaign_get(){
        $uri = $this->uri->uri_string();
        //API-KEY es el key de envialo simple api
        $AK = $this->input->get_request_header('API-KEY');
        //AUTH es el key de rest_controller de codeigniter
        $auth =  $this->input->get_request_header('AUTH');
        $api = 'api.esmsv.com/v1/'.$uri;
        
        $rawdata = file_get_contents("php://input");  
        $method = "GET";        
        $auth = $AK;
        $app = api($api, $rawdata, $method, $auth);
        
        $this->response($app); 
    }

    /*
    Este módulo te permitirá conocer el reporte y las estadísticas de cada campaña enviada.
    02) Detalle de aperturas     
      https://api.esmsv.com/v1/report/campaign/reads
    03) Detalle de clicks  | 
      https://api.esmsv.com/v1/report/campaign/clicks
    04) Detalle de compartidos  | 
      https://api.esmsv.com/v1/report/campaign/shared
    05) Detalle de rebotes  | 
      https://api.esmsv.com/v1/report/campaign/bounces
    06) Detalle de desuscripciones  | 
      https://api.esmsv.com/v1/report/campaign/unsubscribe
    07) Detalle de quejas  | 
      https://api.esmsv.com/v1/report/campaign/complaints
    08) Detalle de excluidos  | 
      https://api.esmsv.com/v1/report/campaign/exclusions
    09) Descargar enviados  | 
      https://api.esmsv.com/v1/report/campaign/sents
    10) Descargar duplicados  | 
      https://api.esmsv.com/v1/report/campaign/duplicates



    */
    public function campaign_post(){
        $uri = $this->uri->uri_string();
        print $uri;
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

    /*
    Reportes de contactos
    ---------------------------------------------------------
    Este módulo te permitirá conocer el detalle de la actividad del contacto.
    01) Detalle de aperturas  | 
      https://api.esmsv.com/v1/report/contact/reads
    02) Detalle de clicks  | 
      https://api.esmsv.com/v1/report/contact/clicks
    03) Detalle de compartidos  | 
      https://api.esmsv.com/v1/report/contact/shared
    04) Detalle de rebotes  | 
      https://api.esmsv.com/v1/report/contact/bounces
    05) Detalle de desuscripciones  | 
      https://api.esmsv.com/v1/report/contact/unsubscribe
    06) Detalle de quejas  | 
      https://api.esmsv.com/v1/report/contact/complaints
    */
    public function contact_post(){
        $uri = $this->uri->uri_string();
        print $uri;
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