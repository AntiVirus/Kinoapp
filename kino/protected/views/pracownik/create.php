<?php
$this->breadcrumbs=array(
	'Pracowniks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Pracownik', 'url'=>array('index')),
	array('label'=>'Manage Pracownik', 'url'=>array('admin')),
);
?>

<h1>Create Pracownik</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>