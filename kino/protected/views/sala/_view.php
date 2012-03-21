<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSali')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSali), array('view', 'id'=>$data->idSali)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rzedy')); ?>:</b>
	<?php echo CHtml::encode($data->rzedy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('miejsca')); ?>:</b>
	<?php echo CHtml::encode($data->miejsca); ?>
	<br />


</div>