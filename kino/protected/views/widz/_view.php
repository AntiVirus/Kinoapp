<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idWidza')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idWidza), array('view', 'id'=>$data->idWidza)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imie')); ?>:</b>
	<?php echo CHtml::encode($data->imie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwisko')); ?>:</b>
	<?php echo CHtml::encode($data->nazwisko); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefon')); ?>:</b>
	<?php echo CHtml::encode($data->telefon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>