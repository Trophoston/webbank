<?php

class User_class extends DB_conn {

     public function reademail($email){
          $sql = "SELECT * FROM users WHERE u_mail = '$email'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function readid($id){
          $sql = "SELECT * FROM users WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function readsecid($id){
          $sql = "SELECT * FROM users WHERE u_secid = '$id'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function readall(){
          $sql = "SELECT * FROM users";
          $result = $this->conn->query($sql);
          $row = $result->fetch_all(MYSQLI_ASSOC);
          return $row;
          exit();
     }

     public function login($email, $password){
          $sql = "SELECT * FROM users WHERE u_mail = '$email' AND u_pass = '$password'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          return $row;
          exit();
     }

     public function create($email, $password, $fname, $lname, $tell, $secid){
          $sql = "INSERT INTO users (u_mail, u_pass, u_fname, u_lname, u_tel, u_role, u_bal, u_secid) VALUES ('$email', '$password', '$fname', '$lname', '$tell', 'users', 10000, '$secid')";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function createadmin($email, $password, $fname, $lname, $tell, $role, $bal, $pin, $secid){
          $sql = "INSERT INTO users (u_mail, u_pass, u_fname, u_lname, u_tel, u_role, u_bal, u_pin, u_secid) VALUES ('$email', '$password', '$fname', '$lname', '$tell', '$role', '$bal', '$pin', '$secid')";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function update($id, $email, $password, $fname, $lname, $tell){
          $sql = "UPDATE users SET u_mail = '$email', u_pass = '$password', u_fname = '$fname', u_lname = '$lname', u_tel = '$tell' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function updateadmin($id, $email, $password, $fname, $lname, $tell, $role, $bal, $pin){
          $sql = "UPDATE users SET u_mail = '$email', u_pass = '$password', u_fname = '$fname', u_lname = '$lname', u_tel = '$tell', u_role = '$role', u_bal = '$bal', u_pin = '$pin' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function updatebal($id, $bal){
          $sql = "UPDATE users SET u_bal = '$bal' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function updatepin($id, $pin){
          $sql = "UPDATE users SET u_pin = '$pin' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     public function delete($id){
          $sql = "DELETE FROM users WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }

     //tranfer secid = reciver, id = sender
     public function transfer($id, $secid, $amount){
          $sql = "SELECT * FROM users WHERE u_id = '$id'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          $bal = $row['u_bal'];
          $bal = $bal - $amount;
          $sql = "UPDATE users SET u_bal = '$bal' WHERE u_id = '$id'";
          $result = $this->conn->query($sql);

          $sql = "SELECT * FROM users WHERE u_secid = '$secid'";
          $result = $this->conn->query($sql);
          $row = $result->fetch_assoc();
          $bal = $row['u_bal'];
          $bal = $bal + $amount;
          $sql = "UPDATE users SET u_bal = '$bal' WHERE u_secid = '$secid'";
          $result = $this->conn->query($sql);
          return $result;
          exit();
     }
}