<?php

require_once 'View/View.php';

class UserController {
    public function profile() {
        $view = new View();
        $view->render('user');
    }
}