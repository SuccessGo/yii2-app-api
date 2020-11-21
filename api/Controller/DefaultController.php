<?php

namespace Api\Controller;

use yii\rest\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return ['author' => 'Success Go'];
    }
}
