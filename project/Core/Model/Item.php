<?php

namespace Core\Model;

use Core\Base\Model;

class Item extends Model
{
  public function get_price_item($item_name)
  {
    $result = $this->connection->query("SELECT * FROM $this->table WHERE item_name=$item_name");
    var_dump($result->fetch_object());die;
    //return $result->fetch_object();

  }
}