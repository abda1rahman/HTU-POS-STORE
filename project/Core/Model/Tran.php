<?php 

namespace Core\Model;

use Core\Base\Model;

class Tran extends Model
{

  public function last_insert_id()
  {
      $result = $this->connection->query("SELECT * FROM $this->table ORDER BY trans_id DESC LIMIT 1");
         return $result->fetch_object();
  }

  public function get_order_by_id($user_id)
  {
        $result = $this->connection->query("SELECT * FROM $this->table WHERE user_id=$user_id");
      
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_object()) {
            $data[] = $row;
        }

        return $data;
      }else{
        return null;
      }
  }



  public function delete($id)
  {
      $result = $this->connection->query("DELETE FROM $this->table WHERE trans_id=$id");
      return $result;
  }

  // public function checkerror()
  // {
  //   if()
  // }

}