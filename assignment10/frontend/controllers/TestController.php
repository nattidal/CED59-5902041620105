<?php

namespace frontend\controllers;

use yii\web\Controller;

class TestController extends \yii\web\Controller
{
    public function actionIndex() {
        echo 'data Test';
        return $this->render('index', [ 'xdata' => $xdata]);
    }

    public function actionTest() {
        echo 'Nattida';
    }
}
