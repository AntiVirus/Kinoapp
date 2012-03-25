<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPracownika')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPracownika), array('view', 'id'=>$data->idPracownika)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imie')); ?>:</b>
	<?php echo CHtml::encode($data->imie); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nazwisko')); ?>:</b>
	<?php echo CHtml::encode($data->nazwisko); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stanowisko')); ?>:</b>
	<?php echo CHtml::encode($data->stanowisko); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />



</div>