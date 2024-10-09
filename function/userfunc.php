<?php

class User_class extends DB_conn {

     public function reademail($email){
          $sql = "SELECT * FROM user WHERE u_mail = '$email'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function readid($id){
          $sql = "SELECT * FROM user WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function readall(){
          $sql = "SELECT * FROM user";
          $result = $this->conn->query($sql);
          $row = $result->fetch_all(MYSQLI_ASSOC);
          return $row;
          exit();
     }

     public function login($email, $password){
          $sql = "SELECT * FROM user WHERE u_mail = '$email' AND u_pass = '$password'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function create($email, $password, $fname, $lname, $tell){
          $sql = "INSERT INTO user (u_mail, u_pass, u_fname, u_lname, u_tel, u_role, u_bal) VALUES ('$email', '$password', '$fname', '$lname', '$tell', 'user', 10000)";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function createadmin($email, $password, $fname, $lname, $tell, $role, $bal, $pin){
          $sql = "INSERT INTO user (u_mail, u_pass, u_fname, u_lname, u_tell, u_role, u_bal, u_pin) VALUES ('$email', '$password', '$fname', '$lname', '$tell', '$role', '$bal', '$pin')";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function update($id, $email, $password, $fname, $lname, $tell){
          $sql = "UPDATE user SET u_mail = '$email', u_pass = '$password', u_fname = '$fname', u_lname = '$lname', u_tell = '$tell' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function updateadmin($id, $email, $password, $fname, $lname, $tell, $role, $bal, $pin){
          $sql = "UPDATE user SET u_mail = '$email', u_pass = '$password', u_fname = '$fname', u_lname = '$lname', u_tell = '$tell', u_role = '$role', u_bal = '$bal', u_pin = '$pin' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function updatebal($id, $bal){
          $sql = "UPDATE user SET u_bal = '$bal' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function updatepin($id, $pin){
          $sql = "UPDATE user SET u_pin = '$pin' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function delete($id){
          $sql = "DELETE FROM user WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }
}