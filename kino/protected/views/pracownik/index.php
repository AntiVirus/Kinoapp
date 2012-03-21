<?php
$this->breadcrumbs=array(
	'Pracowniks',
);

$this->menu=array(
	array('label'=>'Create Pracownik', 'url'=>array('create')),
	array('label'=>'Manage Pracownik', 'url'=>array('admin')),
);
?>

<h1>Pracowniks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
