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
        } elseif (isset($_POST['update_user'])) {
            $select = new User();
            $result = $select->select($_POST['id']);
            // print_r($result[0]['username']);
            // die();
            require __DIR__ . '/../../views/admin/update.php';
        }
    }



    public function add_user()
    {
        if (isset($_POST['submit'])) {

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


    public function update()
    {
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $email = $_POST['email'];

            $username = $_POST['user_name'];
            // echo $username;
            $role = $_POST['role'];

            $user = new User();
            $result = $user->update($id, $email, $username, $role);
            if ($result) {
                header('location:/home');
            } else {
                echo 'Error updating user.';
            }
        } else {
            echo 'Error: Update form not submitted.';
        }

        // require __DIR__ . '/../../views/admin/update.php';
    }



    // public function update_user()
    // {


    //     $select = new User();
    //     $select->update_user($_POST['user_id']);

    //     require __DIR__ . '/../../views/admin/update.php';
    // }

}
