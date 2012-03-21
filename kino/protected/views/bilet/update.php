<?php
$this->breadcrumbs=array(
	'Bilets'=>array('index'),
	$model->idBiletu=>array('view','id'=>$model->idBiletu),
	'Update',
);

$this->menu=array(
	array('label'=>'List Bilet', 'url'=>array('index')),
	array('label'=>'Create Bilet', 'url'=>array('create')),
	array('label'=>'View Bilet', 'url'=>array('view', 'id'=>$model->idBiletu)),
	array('label'=>'Manage Bilet', 'url'=>array('admin')),
);
?>

<h1>Update Bilet <?php echo $model->idBiletu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>