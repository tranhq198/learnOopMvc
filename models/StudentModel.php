<?php

class StudentModel extends Database {

    function getAll() {
          $res = mysqli_query($this->conn, 'SELECT * FROM students');
          if($res) {
            return $this->fetch($res);
          }
          return [];
    }

    function getByCode($code) {
        $res = mysqli_query($this->conn, "SELECT * FROM students WHERE `code` = '$code'");

        if($res) {
            return $this->fetch($res)[0];
        }
        return [];
    }

    function add($code, $name, $year_of_birth, $phone, $address)
    {
          $sql = "INSERT INTO students(`code`,`name`,`year_of_birth`,`phone`, `address`)
                  VALUES ('$code','$name','$year_of_birth','$phone','$address')";
          $res = mysqli_query($this->conn, $sql);
          return $res;
    }

    function update($code, $name, $year_of_birth, $phone, $address)
    {
        $sql = "UPDATE students 
                SET `code`='$code',`name`='$name',`year_of_birth`='$year_of_birth',`phone`='$phone',`address`='$address'
                WHERE `code` = '$code'";
        $res = mysqli_query($this->conn, $sql);
//
//        print_r($res);
//
//        $errors = mysqli_error($this->conn);
//        print_r($errors);
//
//        die();
        return $res;
    }

    function delete($code)
    {
       $sql = "DELETE FROM students
               WHERE `code` = '$code'";
       $res = mysqli_query($this->conn, $sql);
       return $res;
    }

}
