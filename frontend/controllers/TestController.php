<?php 
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller
{
	public function actionIndex($name)
	{
		return $this->render('index', ['name' => $name,]);
	}
	public function actionCreate()
	{
		echo 'I create a world!';
	}
}









