<?php

namespace Core\Controller;

use Core\Base\View;
use Core\Base\Controller;
use Core\Model\Item;
use Core\Model\Tran;
use Exception;

class Sales extends Controller
{
    protected $request_body;
    protected $http_code = 200;
    protected $response_schema = array(
        "success" => true, // to provide the response status.
        "message_code" => "", // to provide message code for the front-end developer for a better error handling
        "body" => []
    );

    public function render()
    {
        //header("Content-Type: application/json"); // changes the header information
        //http_response_code($this->http_code); // set the HTTP Code for the response
        //echo json_encode($this->response_schema);

        if (!empty($this->view))
            $this->view();
    }

    function __construct()
    {
        
        //  $this->admin_view(false);
        //  $this->auth();

    }


    public function index()
    {
        $this->view = 'sales';
        $sales = new Tran;
        $this->data['sales'] = $sales->get_order_by_id($_SESSION['user']['user_id']);
       
    }

    public function delete()
    {
      
      $item = new Tran;
      $item->delete($_GET['id']);
      $this->redirect('/sales');
    }
  
}