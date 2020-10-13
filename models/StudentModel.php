<?php

class StudentModel extends Database {

    function getAll() {
          $res = mysqli_query($this->conn, 'SELECT * FROM students');
          if($res) {
            return $this->fetch($res);
          }
          return [];
    }

    function add($code, $name, $year_of_birth, $phone, $address)
    {
          $this->conn;
          $sql = "INSERT INTO students(`code`,`name`,`year_of_birth`,`phone`, `address`)
                  VALUES ('$code','$name','$year_of_birth','$phone','$address')";
          $res = mysqli_query($this->conn, $sql);
          return $res;
    }

    function update($code, $name, $year_of_birth, $phone, $address)
    {
        $this->conn;
        $sql = "UPDATE students 
                SET `code`='$code',`name`='$name',`year_of_birth`='$year_of_birth',`phone`='$phone',`address`='$address';
                WHERE id = $code";
        $res = mysqli_query($this->conn, $sql);
        return $res;
    }

    function delete($student_id)
    {
       $this->conn;
       $sql = "DELETE FROM students
               WHERE id = $student_id";
       $res = mysqli_query($this->conn, $sql);
       return $res;
    }

}
