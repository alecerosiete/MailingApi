<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este modulo te permitirá realizar toda la gestión de exclusiones de contactos para que no se les envíen tus campañas.
 */
class Exclusions extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Obtener colección de exclusiones  
    Devuelve una lista con todas las exclusiones creadas por Usuario. Pueden filtrarse por email.
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
    /*
    02) Agregar exclusiones 
    Permite crear exclusiones, teniendo en cuenta que:

    En caso de que algunas de las listas indicadas no existan, las mismas se mostrarán en la respuesta dentro de listsNotFound.
    */
    public function add_post(){
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

    /*
    03) Eliminar exclusiones
    Permite eliminar una exclusión creada por Usuario.
    */
    public function delete_get(){
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
}