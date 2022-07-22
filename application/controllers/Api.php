<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require (APPPATH.'/libraries/RestController.php');
require (APPPATH . '/libraries/Format.php');
use chriskacerguis\RestServer\RestController;

class Api extends RestController
{

       public function __construct() {
               parent::__construct();
               $this->load->model('user_model');

       }    
       public function user_get(){
           $r = $this->user_model->read();        
           /*
            --data-urlencode 'limit=10' \
            --data-urlencode 'page=1' \
            --data-urlencode 'orderBy=name' \
            --data-urlencode 'order=asc'
            *
            */  
           $app = api();
           print_r($app);
           $this->response($r); 
       }
       public function campaign_get(){
        
        // uri: http://localhost:8888/api/envialo/
        //return api/envialo
        $uri = $this->uri->uri_string();
        $api = 'api.esmsv.com/v1/$uri';
        print $api;
        $rawdata = file_get_contents("php://input");  
        
       // $app = api($uri, $rawdata);
        
        //$this->response($app); 
    }
       public function user_put(){
           $id = $this->uri->segment(3);

           $data = array('name' => $this->input->get('name'),
           'pass' => $this->input->get('pass'),
           'type' => $this->input->get('type')
           );

            $r = $this->user_model->update($id,$data);
               $this->response($r); 
       }

       public function user_post(){
           $data = array('name' => $this->input->post('name'),
           'pass' => $this->input->post('pass'),
           'type' => $this->input->post('type')
           );
           $r = $this->user_model->insert($data);
           $this->response($r); 
       }
       public function user_delete(){
           $id = $this->uri->segment(3);
           $r = $this->user_model->delete($id);
           $this->response($r); 
       }
    

}