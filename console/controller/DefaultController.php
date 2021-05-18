<?php

namespace console\controller;

use yii\console\Controller;
use yii\helpers\Console;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        Console::output('default console command');
    }
}
