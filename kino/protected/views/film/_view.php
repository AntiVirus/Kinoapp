<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFilmu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idFilmu), array('view', 'id'=>$data->idFilmu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tytul')); ?>:</b>
	<?php echo CHtml::encode($data->tytul); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gatunek')); ?>:</b>
	<?php echo CHtml::encode($data->gatunek); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rok')); ?>:</b>
	<?php echo CHtml::encode($data->rok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('opis')); ?>:</b>
	<?php echo CHtml::encode($data->opis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rezyser')); ?>:</b>
	<?php echo CHtml::encode($data->rezyser); ?>
	<br />


</div>