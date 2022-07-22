<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este módulo agrupa servicios para la gestión de las listas de contactos que podrán ser utilizadas en tus campañas.
 */
class Listscontacts extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Obtener colección de listas de contactos
    Devuelve una lista de todas las listas de contactos. Pueden filtrarse por nombre.
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
    02) Obtener el detalle de una lista    
    */
    public function index_get(){
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
    03) Crear listas de contactos
    Permite crear una nueva lista.
    */
    public function create_post(){
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
    04) Editar listas de contactos 
    Permite editar una lista.
     */
    public function edit_post(){
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
    05) Eliminar listas de contactos
    Permite eliminar una lista.
     */
    public function delete_post(){
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