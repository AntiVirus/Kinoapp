<?php
$this->breadcrumbs=array(
	'Seans'=>array('index'),
	$model->idSeansu=>array('view','id'=>$model->idSeansu),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seans', 'url'=>array('index')),
	array('label'=>'Create Seans', 'url'=>array('create')),
	array('label'=>'View Seans', 'url'=>array('view', 'id'=>$model->idSeansu)),
	array('label'=>'Manage Seans', 'url'=>array('admin')),
);
?>

<h1>Update Seans <?php echo $model->idSeansu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>