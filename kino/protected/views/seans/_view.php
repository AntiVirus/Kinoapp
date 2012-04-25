<div class="view">
	<br />
	<?php echo CHtml::encode($data->getAttributeLabel('tytulfilmu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFilmu0->tytul), array('film/view', 'id'=>$data->idFilmu)); 
?>
	<br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('godzina')); ?>:</b>
	<?php echo CHtml::encode($data->godzina); ?>
	<br />


	<br />

</div>
