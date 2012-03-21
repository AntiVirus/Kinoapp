<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idBiletu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idBiletu), array('view', 'id'=>$data->idBiletu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSeansu')); ?>:</b>
	<?php echo CHtml::encode($data->idSeansu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rzad')); ?>:</b>
	<?php echo CHtml::encode($data->rzad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miejsce')); ?>:</b>
	<?php echo CHtml::encode($data->miejsce); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rodzaj')); ?>:</b>
	<?php echo CHtml::encode($data->rodzaj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cena')); ?>:</b>
	<?php echo CHtml::encode($data->cena); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idWidza')); ?>:</b>
	<?php echo CHtml::encode($data->idWidza); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idPracownika')); ?>:</b>
	<?php echo CHtml::encode($data->idPracownika); ?>
	<br />

	*/ ?>

</div>