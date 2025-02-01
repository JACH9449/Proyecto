<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    public function index()
    {
        $users = $this->userModel->getAll();
        include __DIR__ . '/../views/users/index.php';
    }

    public function create()
    {
        include __DIR__ . '/../views/users/create.php';
    }

    public function store()
    {
        $data = $_POST;
        $this->userModel->create($data);
        header('Location: /users');
    }

    public function edit($id)
    {
        $user = $this->userModel->find($id);
        include __DIR__ . '/../views/users/edit.php';
    }

    public function update($id)
    {
        $data = $_POST;
        $this->userModel->update($id, $data);
        header('Location: /users');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        header('Location: /users');
    }
}