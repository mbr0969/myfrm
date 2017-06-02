<?php


namespace app\controllers;

class PageController extends AppController {

    //public $view = 'view';

    public function viewAction() {
        //$model = new Page;
        $menu = $menu = $this->menu;;
        $title = 'Страницы';
        $this->set(compact('title', 'menu'));
    }

}