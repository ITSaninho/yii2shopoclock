<?php

namespace app\widgets;

use yii;
use yii\base\Widget;


class Nav extends Widget{

    public function init(){
        parent::init();
    }
    /**
     * Запуск виджета
     */
    public function run()
    {
        return $this->render('nav');
    }

}