<?php
$this->breadcrumbs=array(
	'Seans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Seans', 'url'=>array('index')),
	array('label'=>'Manage Seans', 'url'=>array('admin')),
);
?>

<h1>Create Seans</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>