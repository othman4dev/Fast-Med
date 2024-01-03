<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{

    public function home()
    {

        $result = User::select_users();

        require __DIR__ . '/../../views/admin/index.php';
    }

    public function delete()
    {
        if (isset($_POST['delete'])) {

            $result = new User();
            $result->delete($_POST['id']);
            if ($result) {
                header('location:/home');
            }
        }
    }
    public function add_user()
    {
        if (isset($_POST['submit'])) {
            // print_r($_POST);
            // die();
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            $result = new User();
            $result->add_user($user_name, $email, $password, $role);
            if ($result) {
                header('location:/home');
            } else {
                echo 'not work';
            }
        }
    }
}
