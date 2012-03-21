<?php
$this->breadcrumbs=array(
	'Pracownik'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Lista Pracownik', 'url'=>array('index')),
	array('label'=>'Utwórz Pracownik', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('pracownik-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Zarządzaj Pracownik</h1>

<p>
Opcjonalnie możesz wprowadzić operator porównania (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
lub <b>=</b>) na początku każdej wyszukiwanej wartości, aby wyspecyfikować jak powinno być wykonane porównanie.
</p>

<?php echo CHtml::link('Wyszukiwanie zaawansowane','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pracownik-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'idPracownika',
		'imie',
		'nazwisko',
		'stanowisko',
		'login',
		'haslo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
