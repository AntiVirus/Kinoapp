<?php
$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->idSali=>array('view','id'=>$model->idSali),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sala', 'url'=>array('index')),
	array('label'=>'Create Sala', 'url'=>array('create')),
	array('label'=>'View Sala', 'url'=>array('view', 'id'=>$model->idSali)),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>Update Sala <?php echo $model->idSali; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>