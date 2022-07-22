<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este modulo agrupa servicios para gestionar la configuración de tu cuenta y conocer el resumen de tu actividad.
 */
class Administrator extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Obtener configuración general de la cuenta
    Devuelve información de la cuenta del administrador.
    
    03) Obtener estadísticas de la cuenta 
    Devuelve estadísticas de la cuenta del administrador.
    
    04) Obtener zonas horarias
    Devuelve un listado de las posibles zonas horarias para la configuración de la cuenta.

    05) Obtener países  
    Devuelve un listado de los posibles países para la configuración de la cuenta.
    */

    public function profile_get(){
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
    02) Editar configuración general de la cuenta
    Permite editar la configuración de la cuenta.
    */
    public function profile_post(){
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