<?php 

namespace Core\Controller;

use Core\Base\Controller;
use Core\Helpers\Helper;


class Admin extends Controller 
{

    public function render()
    {
      if(!empty($this->view))
          $this->view();
    }

    function __construct()
    {
      $this->admin_view(true);
      $this->auth();
    }

    public function index()
    {
      $this->view = 'dashboard';
    }
}