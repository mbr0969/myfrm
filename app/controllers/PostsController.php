<?php

namespace app\controllers;


class PostsController extends AppController {


    public function indexAction() {
        debug($this->route);
        echo "Posts::indexAction()<br>";
    }

    public function testAction() {
        debug($this->route);
        echo "Posts::testAction()<br>";
    }
    public function testPageAction() {
        debug($this->route);
        echo "Posts::testPageAction()<br>";
    }

    public function before(){

    }
}