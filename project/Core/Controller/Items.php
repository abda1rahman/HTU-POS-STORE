<?php

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;
use Core\Model\Item;
use Core\Base\View;


class Items extends Controller
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
    // header("Content-Type: application/json"); // changes the header information
    // http_response_code($this->http_code); // set the HTTP Code for the response
    // echo json_encode($this->response_schema);

    if (!empty($this->view))
      $this->view();
  }

  public function __construct()
  {
    $this->admin_view(true);
    //$this->auth();
  }

  public function index()
  {
    // $this->view = 'sales';
    // $item = new Item;
    // $this->data['sales'] = $item->get_all();
    

  }


  public function stock()
  {
    $item = new Item();
    $this->view = 'stock'; 
    $this->data['items'] = $item->get_all();

    
  }


  public function store()
  {
    
    $item = new Item();
    $item->create($_POST);
    Helper::redirect('/stock');

    // for test 

  }

  /**
   * Display the HTML form for update 
   */
  public function edit() 
  {
   // $this->permissions(['item:edit']);
    $item = new Item;
    $this->data['edit'] = $item->get_by_id($_GET['id']);
    $this->redirect('/dashboard');
  }

      /** 
     * Update the user
     * 
     */
    public function update() 
    {
    //  $this->permissions(['item:read','item:update']);
      $item = new Item();
      $item->update($_POST);
      $this->redirect("/stock");
    }

  /**
   * Delete the item
   */
  public function delete()
  {
    
    $item = new Item;
    $item->delete($_GET['id']);
    $this->redirect('/stock');
  }

}
