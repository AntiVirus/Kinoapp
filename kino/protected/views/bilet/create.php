<?php
$this->breadcrumbs=array(
	'Bilets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bilet', 'url'=>array('index')),
	array('label'=>'Manage Bilet', 'url'=>array('admin')),
);
?>

<h1>Create Bilet</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>