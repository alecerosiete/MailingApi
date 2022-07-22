<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');
use CodeIgniter\HTTP\IncomingRequest;

use chriskacerguis\RestServer\RestController;

class Campaign extends RestController
{

    public function __construct() {
        parent::__construct();
    }  
    /*
    Obtener colección de campañas 
    Devuelve una lista todas las campañas. Pueden filtrarse por nombre o por estado.
    */
    public function getAll_post(){
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
    Obtener el detalle de una campaña 
    Devuelve el detalle de una campaña.
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
    03) Crear una campaña
    Permite crear una nueva campaña. Sólo es requerido el Título.    
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
    04) Editar una campaña 
    Permite editar todos los campos de una campaña existente, teniendo en cuenta las siguiente consideraciones:

    Solo pueden modificarse campañas en Borrador o Detenidas.
    Si se desea blanquear los datos deben enviarse los parámetros con el valor en blanco.
    Al modificar un campaña Detenida la misma quedará en Borrador automáticamente.
    En caso de que alguna de las listas indicadas no exista, la misma se mostrará en la respuesta dentro de mailListsNotFound y no se asignará a la campaña.
    En caso de que el segmento indicado no exista, el mismo se mostrará en la respuesta dentro de segmentNotFound y no se asignará a la campaña.
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
    
    /**
     * 05) Previsualizar una campaña por email 
     * Permite previsualizar las campañas por email.
     * Email: Se enviará una vista previa de la campaña a los correos indicados. Si posee campos personalizados en el contenido: toma el valor de algún contacto al azar de la lista asignada o cualquier usuario al azar en el caso que no posea lista.
     
     * 06) Previsualizar una campaña por html 
     * Permite previsualizar las campañas por html.
     * Html: Permite previsualizar las campañas por navegador. Devuelve un Html de la campaña para poder previsualizarla en cualquier navegador.    */
    public function preview_post($type = null){
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
    07) Chequear el estado de la campaña 
    Chequea si la campaña cumple con todas las condiciones para poder ser enviada. En la respuesta se incluirán tres secciones adicionales:

    canSend donde se indicará si la campaña está en condiciones de ser enviada o no.
    errors donde se mostrará un detalle de los motivos por los cuales no podrá ser enviada la campaña, en caso de existir.
    warnings donde se mostrará un detalle de advertencias que si bien no impiden enviar la campaña indican cuestiones a mejorar, en caso de existir.
    */

    public function checkstatus_post($type = null){
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
    08) Enviar campaña
    Permite enviar una campaña en borrador o detenida, teniendo en cuenta que:

    Si la campaña está en borrador, siempre hay que indicar el campo Enviar ahora.
    Si la campaña está detenida, si se indica el campo Enviar ahora tomará el valor indicado, caso contrario se reanudará con los valores que ya tenga configurado.
     */
    public function send_post($type = null){
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
    09) Pausar campaña
    Permite pausar una campaña que está enviándose, programada o en revisión.
    */
    public function pause_post($type = null){
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
    10) Detener campaña  
    Permite detener una campaña que está enviándose, programada, en revisión o pausada
    */
    public function stop_post($type = null){
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
    11) Reanudar campaña
    Permite reanudar una campaña detenida o pausada.
    */
    public function resume_post($type = null){
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
    12) Eliminar campaña  
    Permite eliminar una campaña.
    */
    public function delete_post($type = null){
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

