<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSeansu')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSeansu), array('view', 'id'=>$data->idSeansu)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSali')); ?>:</b>
	<?php echo CHtml::encode($data->idSali); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idFilmu')); ?>:</b>
	<?php echo CHtml::encode($data->idFilmu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data')); ?>:</b>
	<?php echo CHtml::encode($data->data); ?>
	<br />


</div>