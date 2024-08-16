<?php

require_once 'View/View.php';

class ProductController {
    public function index() {
        $view = new View();
        $view->render('product');
    }
}