<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este módulo agrupa servicios para la gestión de campos personalizados utilizados 
    para la información de los contactos, los formularios de suscripción y la personalización de tus campañas.
 */
class Customfields extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Obtener colección de campos personalizados
    Devuelve una lista con todos los campos personalizados. Pueden filtrarse por nombre.
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
    02) Obtener detalle de un campo personalizado
    Devuelve el detalle de un campo personalizado.
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
    03) Obtener validaciones de campos personalizados
    Devuelve un listado de tipos de validaciones que serán 
    utilizados en la creación y/o edición de los campos personalizados tipo = Campo de texto o Campo oculto.
    */
    public function getvalidations_get(){
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
    04) Obtener tipos de campos personalizados 
    Devuelve un listado de tipos de campos que serán utilizados en la creación y/o edición de los campo personalizados.
    */
    
    public function gettypes_get(){
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
    05) Crear campo personalizado
    Permite crear un nuevo campo personalizado, teniendo en cuenta las siguientes consideraciones:

    Siempre será requerido: Nombre y Tipo de campo.
    Para campos tipo = Campo de texto o Campo oculto, siempre se pedirán los siguientes parámetros:
        Tipo de validación. Es requerido indicar un valor.
        Expresión regular. Es requerido indicar un valor para Validación = Personalizada.
        Valor por defecto. No es requerido indicar un valor por lo que puede quedar en blanco.
    Para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única siempre se pedirá el parámetro Opciones, siendo requerido indicar un valor.
    Para Tipo de campo = Evento anual, siempre se pedirá el parámetro Valor por defecto pero no es requerido indicar un valor por lo que puede quedar en blanco.
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

    /**
     * 06) Editar un campo personalizado 
     * Permite editar un campo personalizado, teniendo en cuenta las siguientes consideraciones:
     *     Siempre será requerido: Nombre y Tipo de campo.
     *     Para campos tipo = Campo de texto o Campo oculto, siempre se pedirán los siguientes parámetros:
     *         Tipo de validación. Es requerido indicar un valor.
     *         Expresión regular. Es requerido indicar un valor para Validación = Personalizada.
     *         Valor por defecto. No es requerido indicar un valor por lo que puede quedar en blanco.
     * Para Tipo de campo = Listado o Listado con selección múltiple o Listado con selección única siempre se pedirá el parámetro Opciones, siendo requerido indicar un valor.
     * Para Tipo de campo = Evento anual, siempre se pedirá el parámetro Valor por defecto pero no es requerido indicar un valor por lo que puede quedar en blanco.
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
    07) Eliminar campo personalizado
    Permite eliminar una campo personalizado siempre que el mismo no esté siendo usado en algún segmento, formulario o automation.
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