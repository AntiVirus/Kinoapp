<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bilet-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idSeansu'); ?>
		<?php 
		
		$models = Seans::model()->findAll();
		$data = array();
		foreach ($models as $m) {
			if(strtotime($m->data)>time()-30*60){ // mozna dodawac/edytowac tylko dla seansow rozpoczetych max 30min temu
			$data[$m->idSeansu] = $m->data . ' '. $m->godzina . ' ' .$m->idFilmu0->tytul;  
			}   
		}
		//echo $form->dropDownList($model,'idSeansu', $data, 'idSeansu', 'data', array('empty'=>'--Proszę wybrać--')); 
		echo $form->dropDownList($model,'idSeansu', $data,  array('empty'=>'--Proszę wybrać--'));
		?>
		<?php echo $form->error($model,'idSeansu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rzad'); ?>
		<?php echo $form->textField($model,'rzad',array('size'=>1,'maxlength'=>1)); 
		//echo $form->dropDownList($model,'rzad', CHtml::listData(Sala::model()->findAll(), 'rzedy', 'rzedy'), array('empty'=>'--Proszę wybrać--'));
		?>
		<?php echo $form->error($model,'rzad'); //todo auto ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'miejsce'); ?>
		<?php echo $form->textField($model,'miejsce'); //todo auto ?>
		<?php echo $form->error($model,'miejsce'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rodzaj'); ?>
		<?php $cats=array('normalny'=>'Normalny','ulgowy'=>'Ulgowy','student'=>'Student','senior'=>'Senior');?>
		<?php echo $form->dropDownList($model,'rodzaj',$cats, array('empty' => '--Wybierz--')); ?>
		<?php echo $form->error($model,'rodzaj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cena'); ?>
		<?php echo $form->textField($model,'cena'); //todo auto ?> 
		<?php echo $form->error($model,'cena'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idWidza'); ?>
		<?php echo $form->dropDownList($model,'idWidza', CHtml::listData(Widz::model()->findAll(), 'idWidza', 'idWidza'), array('empty'=>'--Proszę wybrać--'));  ?>
		<?php echo $form->error($model,'idWidza'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idPracownika'); ?>
		<?php echo $form->dropDownList($model,'idPracownika', CHtml::listData(Pracownik::model()->findAll(), 'idPracownika', 'nazwisko'), array('empty'=>'--Proszę wybrać--')); //todo auto ?>
		<?php echo $form->error($model,'idPracownika'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz' : 'Zapisz'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->