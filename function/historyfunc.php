<?php

class His_class extends DB_conn {

     public function readall(){
          $sql = "SELECT * FROM history";
          $result = $this->conn->query($sql);
          $row = $result->fetch_all(MYSQLI_ASSOC);
          return $row;
          exit();
     }

     public function readid($id){
          $sql = "SELECT * FROM history WHERE h_id = '$id'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function readuser($id){
          $sql = "SELECT * FROM history WHERE h_uid = '$id'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_all(MYSQLI_ASSOC);
          return $row;
          exit();
     }

     public function create($uid, $type, $num, $balance){
          $sql = "INSERT INTO history (h_uid, h_type, h_num, h_balance) VALUES ('$uid', '$type', '$num', '$balance')";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     //delete all history of user
     public function deleteuser($id){
          $sql = "DELETE FROM history WHERE h_uid = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

}