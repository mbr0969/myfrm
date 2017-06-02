<?php


namespace app\controllers;


use vendor\core\base\Controller;
use R;
use  vendor\core\App;

class AppController extends Controller {

    public $menu;

    public function __construct($route) {
        parent::__construct($route);
        new \app\models\Main;
        $this->menu = App::$app->cache->get('menu');
        if(!$this->menu){
            $this->menu = R::findAll('bl_menu');
            App::$app->cache->set('menu',$this->menu, 3600);
        }
        //$this->menu = R::findAll('bl_menu');
    }

    public function menu(){
        return R::findAll('bl_menu');
    }

}