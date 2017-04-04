<?php

class SiteController extends Controller
{

	public function actions()
	{
	}


	public function actionIndex()
	{
		$client = new Client;
		$client->name =
			collect(['John', 'Janet', 'Margaret', 'Fred'])->random()
			. ' '
			.collect(['Doe', 'Smith', 'Morgan', 'McLaren'])->random();
		$client->save();

		$clients = Client::all();

		$this->render('index', ['clients' => $clients]);
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