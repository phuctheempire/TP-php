<?php
// A template of objectController

// first we include Controller to use loadModel and loadView ( heritage )
// we already included in init.php

// Then we create objectController extends Controller
class objectController extends Controller
{
    public function __construct()
    {
        $this->objectModel = $this->loadModel('objectModel');
    }

    public function action1()
    {
        /// ...
        // echo $_SERVER['REQUEST_METHOD'];
        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     if (isset($_POST['email']) && isset($_POST['password'])) {
        //         if ($this->UserModel->findDoctorByEmail($_POST['email'])) {
        //             $doctor = $this->UserModel->login($_POST['email'], $_POST['password']);
        //             if ($doctor) {
        //                 $this->createDoctorSession($doctor);
        //                 header('Location: /');
        //                 die;
        //             } else {
        //                 header('Location: /doctors/login');
        //                 echo 'wrong password';
        //                 die;
        //             }
        //         } else {
        //             header('Location: /doctors/login');
        //             echo 'email not found';
        //             die;
        //         }
        //     }

        // } else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        //     $this->render("login", []);
        // } Example
        


}

?>