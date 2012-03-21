<?php
$this->breadcrumbs=array(
	'Bilets',
);

$this->menu=array(
	array('label'=>'Create Bilet', 'url'=>array('create')),
	array('label'=>'Manage Bilet', 'url'=>array('admin')),
);
?>

<h1>Bilets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
