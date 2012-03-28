<?php
$this->breadcrumbs=array(
	'Seans'=>array('index'),
	'Utwórz',
);

$this->menu=array(
	array('label'=>'Lista Seans', 'url'=>array('index')),
	array('label'=>'Zarządzaj Seans', 'url'=>array('admin')),
);
?>

<h1>Utwórz Seans</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>