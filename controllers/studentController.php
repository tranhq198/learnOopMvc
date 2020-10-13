<?php


class studentController
{
    private $model;

    public function __construct()
    {
        $this->model = new StudentModel();
    }

    function addStudent() {
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $code = $_POST['code'] ?? null;
            $name = $_POST['name'] ?? null;
            $year_of_birth = $_POST['year_of_birth'] ?? null;
            $phone = $_POST['phone'] ?? null;
            $address = $_POST['address'] ?? null;

            $this->model->add($code, $name, $year_of_birth, $phone, $address);
        }
    }
}