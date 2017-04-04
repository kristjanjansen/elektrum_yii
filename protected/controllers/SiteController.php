<?php

class SiteController extends Controller
{

	public function actions()
	{
	}


	public function actionIndex()
	{
		$client = new Client;
		$client->name = 'Important Client';
		$client->save();

		print Client::all();

		//$this->render('index');
	}


	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

}