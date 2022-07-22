<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');

use chriskacerguis\RestServer\RestController;
/*
    Este modulo te permitirá realizar toda la gestión asociada a contactos que luego serán utilizados en 
    listas y/o segmentos.
 */
class Contacts extends RestController
{
    public function __construct() {
        parent::__construct();       
    } 

    /*
    01) Obtener colección de contactos
    Devuelve una lista con todos los contactos. Pueden filtrarse por email o por lista.
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
    02) Obtener el detalle de un contacto
    Devuelve el detalle de un contacto.
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
    03) Crear contacto
    Permite crear un nuevo contacto, teniendo en cuenta las siguientes consideraciones:

    Sólo es requerido ingresar el correo electrónico.
    El contacto se asignará a las listas mediante otro servicio.
    Para completar los campos personalizados se utilizará el siguiente criterio:
        Si se envía el campo con un valor, se completará con dicho valor.
        Si se envía el campo vacío, el campo se completará con valor vacío.
        Si no se envía el campo, se completará con el valor por defecto configurado (en caso de tenerlo).
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
    04) Editar un contacto
    Permite editar un contacto, teniendo en cuenta las siguientes consideraciones:

    No es requerido ningún campo.
    El contacto se asignará a listas mediante otro servicio.
    Para editar los campos personalizados se utilizará el siguiente criterio:
        Si se envía el campo con un valor, se modifica con el valor indicado.
        Si se envía el campo vacío, se modifica con el valor indicado (blanco).
        Si no se envía el campo, no se actualiza el valor del campo quedando el valor actual.
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
    05) Suscribir contactos a una lista
    Permite suscribir varios contactos a una lista, teniendo en cuenta las siguiente consideraciones:

    Los contactos que estén excluidos no podrán suscribirse. En estos casos, los mismos se mostrarán en la respuesta dentro de contactExclude y no se suscribirán.
    En caso de que algunos de los contactos indicados no existan, los mismos se mostrarán en la respuesta dentro de contactNotFound.
    */
    public function suscribe_post(){
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
    06) Desuscribir contactos de una lista
    Permite desuscribir varios contactos de una lista, teniendo en cuenta las siguiente consideraciones:

    En caso de que algunos de los contactos indicados no existan, los mismos se mostrarán en la respuesta dentro de contactNotFound.
    Los contactos que no estén suscriptos a la lista indicada, se mostrarán en la respuesta dentro de subscribeNotFound.
    */
    public function unsuscribe_post(){
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
     * 07) Eliminar contactos
     * Permite eliminar varios contactos, teniendo en cuenta que:
     *     En caso de que algunos de los contactos indicados no existan, los mismos se mostrarán en la respuesta dentro de contactsNotFound.
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