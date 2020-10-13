<?php


class UserModel extends Database
{
    public function checkUser($username, $password) {
        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $res = mysqli_query($this->conn, $sql);
        $num_rows = mysqli_num_rows($res);
        return $num_rows == true;
    }
}