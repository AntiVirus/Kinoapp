<?php
$this->breadcrumbs=array(
	'Widzs'=>array('index'),
	$model->idWidza=>array('view','id'=>$model->idWidza),
	'Update',
);

$this->menu=array(
	array('label'=>'List Widz', 'url'=>array('index')),
	array('label'=>'Create Widz', 'url'=>array('create')),
	array('label'=>'View Widz', 'url'=>array('view', 'id'=>$model->idWidza)),
	array('label'=>'Manage Widz', 'url'=>array('admin')),
);
?>

<h1>Update Widz <?php echo $model->idWidza; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>