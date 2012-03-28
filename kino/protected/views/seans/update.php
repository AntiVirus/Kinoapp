<?php
$this->breadcrumbs=array(
	'Seans'=>array('index'),
	$model->idSeansu=>array('view','id'=>$model->idSeansu),
	'Edytuj',
);

$this->menu=array(
	array('label'=>'Lista Seans', 'url'=>array('index')),
	array('label'=>'Utwórz Seans', 'url'=>array('create')),
	array('label'=>'Zobacz Seans', 'url'=>array('view', 'id'=>$model->idSeansu)),
	array('label'=>'Zarządzaj Seans', 'url'=>array('admin')),
);
?>

<h1>Edytuj Seans <?php echo $model->idSeansu; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>