<?php
$this->breadcrumbs=array(
	'Widzs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Widz', 'url'=>array('index')),
	array('label'=>'Manage Widz', 'url'=>array('admin')),
);
?>

<h1>Create Widz</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>