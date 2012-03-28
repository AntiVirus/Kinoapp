<?php
$this->breadcrumbs=array(
	'Widz'=>array('index'),
	'Utwórz',
);

$this->menu=array(
	array('label'=>'Lista Widz', 'url'=>array('index')),
	array('label'=>'Zarządzaj Widz', 'url'=>array('admin')),
);
?>

<h1>Utwórz Widz</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>