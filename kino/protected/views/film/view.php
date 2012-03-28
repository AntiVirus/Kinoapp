<?php
$this->breadcrumbs=array(
	'Film'=>array('index'),
	$model->idFilmu,
);

$this->menu=array(
	array('label'=>'Lista Film', 'url'=>array('index')),
	array('label'=>'Utwórz Film', 'url'=>array('create')),
	array('label'=>'Edytuj Film', 'url'=>array('update', 'id'=>$model->idFilmu)),
	array('label'=>'Usuń Film', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idFilmu),'confirm'=>'Czy na pewno chcesz usunąć?')),
	array('label'=>'Zarządzaj Film', 'url'=>array('admin')),
);
?>

<h1><?php echo $model->tytul; ?></h1>
<table>
<tr>
	<td>
		<?php 
		$this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'tytul',
				'gatunek',
				'rok',
				'opis',
				'rezyser',
				),
		));
		 ?>
	</td>
	<td style="vertical-align: bottom;">
		
		<?php 
			$htmlOptions['width']='300px';
			$htmlOptions['height']='300px';
			if($model->imageUrl!=NULL)
				echo CHtml::image($model->imageUrl,'Foto',$htmlOptions); 
		?>
	</td>
</tr>
</table>
