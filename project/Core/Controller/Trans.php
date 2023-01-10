<?php 

namespace Core\Controller;

use Core\Base\View;
use Core\Base\Controller;
use Core\Model\Item;
use Core\Model\Tran;
use Core\Helpers\Tests;


class Trans extends Controller
{
    use Tests;
    protected $request_body;
    protected $http_code = 200;
    protected $response_schema = array(
      "status" => 200, // to provide the response status.
      "message_code" => "", // to provide message code for the front-end developer for a better error handling
      "body" => []
  );

 public function render()
 {
      header("Content-Type: application/json"); // changes the header information
      http_response_code($this->http_code); // set the HTTP Code for the response
       echo json_encode($this->response_schema);

  if (!empty($this->view))
      $this->view();
 
 }

 function __construct()
 {
      $this->request_body =(array) json_decode(file_get_contents("php://input"));


     //$this->admin_view(false);
     //$this->auth();

     // test api
     

 }

 public function index()
{
    
    try{
        if(empty($this->request_body['item_qty']) || $this->request_body['item_name'] == "Select One Of The Items"){
            throw new \Exception();
        }
      $trans = new Tran;
      $create_trans =  $trans->create($this->request_body);      
      $this->response_schema['message_code'] = "item_create_successfuly";
      if($trans->last_insert_id() == null){
          throw new \Exception();
    }else {
          $this->response_schema['body'] = $trans->last_insert_id();
      }
      
  }catch(\Exception $error) {
      $this->response_schema['status'] = 500;
      $this->response_schema['message_code'] = "item_was_not_created";
      }
}


}


