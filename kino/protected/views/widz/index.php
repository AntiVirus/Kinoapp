<?php
$this->breadcrumbs=array(
	'Widzs',
);

$this->menu=array(
	array('label'=>'Create Widz', 'url'=>array('create')),
	array('label'=>'Manage Widz', 'url'=>array('admin')),
);
?>

<h1>Widzs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
