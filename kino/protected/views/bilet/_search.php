<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idBiletu'); ?>
		<?php echo $form->textField($model,'idBiletu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idSeansu'); ?>
		<?php echo $form->textField($model,'idSeansu'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rzad'); ?>
		<?php echo $form->textField($model,'rzad',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'miejsce'); ?>
		<?php echo $form->textField($model,'miejsce'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rodzaj'); ?>
		<?php echo $form->textField($model,'rodzaj',array('size'=>9,'maxlength'=>9)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cena'); ?>
		<?php echo $form->textField($model,'cena'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idWidza'); ?>
		<?php echo $form->textField($model,'idWidza'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idPracownika'); ?>
		<?php echo $form->textField($model,'idPracownika'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->