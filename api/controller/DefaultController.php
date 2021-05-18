<?php

namespace api\controller;

use yii\rest\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return 'default route';
    }
}
