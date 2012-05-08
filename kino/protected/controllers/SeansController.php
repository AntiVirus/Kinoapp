<?php

class SeansController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // anonimowy moze przegladac seanse
				'actions'=>array('view','index'),
				'users'=>array('?'),
			),
			array('allow', // kierownicy moga wszystko
				'expression'=>'!$user->isGuest && $user->stanowisko=="Kierownik"',
			),
			array('allow', // kasjer moze przegladac seanse
				'actions'=>array('view','index'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Seans;

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Seans']))
		{
			$model->attributes=$_POST['Seans'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSeansu));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		 $this->performAjaxValidation($model);

		if(isset($_POST['Seans']))
		{
			$model->attributes=$_POST['Seans'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->idSeansu));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($string ='')
	{
		$criteria = new CDbCriteria();

		if(isset($_GET['daymore'])){
		$daymore=$_GET['daymore'];
		} else {
		$daymore=0;
		}
		
		$criteria->addCondition('data = "'.date('Y-m-d', strtotime('now +'.$daymore.' days')).'" ');
		if($daymore==0)
		{
			$criteria->addCondition('godzina > "'.date('H:i', strtotime('now')).'" ');
		}
			//$criteria->addCondition('datakoniec < '.$now);		
			//$criteria->addCondition('datakoniec<'. date('yyyy-mm-dd', strtotime('now')));
			//$criteria->addCondition(time('datakoniec').'<'. date('U', strtotime('now')));
			//$criteria->compare('datakoniec','<'. date('yyyy-mm-dd', strtotime('now')), true);
			//$criteria->compare('datakoniec',date('yyyy-mm-dd', strtotime('now')), false,'<');
			
			$criteria->with[]='idFilmu0';
			$criteria->order = 'idFilmu0.tytul ASC';
			//ddoac kryterium od godziny!
		if (strlen ($string) > 0 )
			$criteria->addSearchCondition( 'idFilmu0.tytul', $string, true, 'AND' );
		$dataProvider=new CActiveDataProvider('Seans', array( 'criteria' => $criteria, )); 

		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Seans('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Seans']))
			$model->attributes=$_GET['Seans'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Seans::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='seans-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
