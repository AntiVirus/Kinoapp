<tr>

	
	<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('tytul')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tytul), array('view', 'id'=>$data->idFilmu)); ?>
	</td>
	
	<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('gatunek')); ?>:</b>
	<?php echo CHtml::encode($data->gatunek); ?>
	</td>
	
	<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('rok')); ?>:</b>
	<?php echo CHtml::encode($data->rok); ?>
	</td>
	
	<td>
	<b><?php echo CHtml::encode($data->getAttributeLabel('rezyser')); ?>:</b>
	<?php echo CHtml::encode($data->rezyser); ?>
	</td>
	
</tr>