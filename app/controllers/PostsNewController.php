<?php
namespace app\controllers;

class PostsNewController extends AppController {


    public function indexAction() {
        debug($this->route);
        echo "PostsNew::indexAction()<br>";
    }
    public function testAction() {
        debug($this->route);
        echo "PostsNew::testAction()<br>";
    }
    public function testPageAction() {
        debug($this->route);
        echo "PostsNew::testPageAction()<br>";
    }

    public function before(){}

}