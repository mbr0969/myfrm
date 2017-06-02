<?php
namespace app\controllers;

use app\models\Main;
use R;
use vendor\core\App;
use vendor\libs\PHP_Timer;


class MainController extends AppController {

    //public $layout = 'main';

    public function indexAction() {
        PHP_Timer::start();
//        App::$app->getList();
     //   $model = new Main;
        $news = App::$app->cache->get('news');
        if(!$news){
            $news = R::findAll('bl_news');
            App::$app->cache->set('news',$news, 3600);
        }
        $menu = $this->menu;

        $title = 'PAGE TITLE';
        $this->set(compact('title','news', 'menu'));

        $time = PHP_Timer::stop();
        var_dump($time);
        print PHP_Timer::secondsToTimeString($time);

    }
}