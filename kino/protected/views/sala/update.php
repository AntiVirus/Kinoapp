<?php
$this->breadcrumbs=array(
	'Sala'=>array('index'),
	$model->idSali=>array('view','id'=>$model->idSali),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Lista Sala', 'url'=>array('index')),
	array('label'=>'Utwórz Sala', 'url'=>array('create')),
	array('label'=>'Zobacz Sala', 'url'=>array('view', 'id'=>$model->idSali)),
	array('label'=>'Zarządzaj Sala', 'url'=>array('admin')),
);
?>

<h1>Edytuj Sala <?php echo $model->idSali; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>