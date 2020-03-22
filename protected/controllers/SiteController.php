<?php

class SiteController extends Controller
{
	public $layout = 'wisp';

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			array(
				'ext.starship.RestfullYii.filters.ERestFilter + 
			REST.GET, REST.PUT, REST.POST, REST.DELETE'
			),
		);
	}

	public function accessRules()
	{
		return array(
			array(
				'allow', 'actions' => array('REST.GET', 'REST.PUT', 'REST.POST', 'REST.DELETE'),
				'users' => array('@'),
			),
			array(
				'allow',  // allow all users to perform 'index' and 'view' actions
				'actions' => array('index'),
				'users' => array('@'),
				'roles' => array('admin')
			),
			array(
				'allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions' => array('logout', 'login'),
				'users' => array('*'),
			),
			array(
				'deny',  // deny all users
				'users' => array('*'),
			),
		);
	}

	public function actions()
	{
		return array('REST.' => 'ext.starship.RestfullYii.actions.ERestActionProvider',);
	}
	public function actionIndex()
	{
		$this->layout = 'wisp-main';
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if ($error = Yii::app()->errorHandler->error) {
			if (Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model = new ContactForm;
		if (isset($_POST['ContactForm'])) {
			$model->attributes = $_POST['ContactForm'];
			if ($model->validate()) {
				$name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
				$subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
				$headers = "From: $name <{$model->email}>\r\n" .
					"Reply-To: {$model->email}\r\n" .
					"MIME-Version: 1.0\r\n" .
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
				Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact', array('model' => $model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if (Yii::app()->user->isGuest > 0) {
			$model = new LoginForm;

			// if it is ajax validation request
			if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}

			// collect user input data
			if (isset($_POST['LoginForm'])) {
				$model->attributes = $_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if ($model->validate() && $model->login())
					$this->redirect(Yii::app()->createUrl('site/index'));
			}
			// display the login form
			$this->render('login', array('model' => $model));
		} else {
			$this->redirect(Yii::app()->createUrl('site/index'));
		}
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}
