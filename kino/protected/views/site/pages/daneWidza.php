<div class="view">
	<br />
	
	<?php $seans = Seans::model()->findByPk($_GET['seans']); ?>
	<?php $sala = Sala::model()->findByPk($seans->idSali); ?>
	
	<?php
		
		if (isset($_POST['Widz']))
		{
			$nowy_widz = new Widz();
			
			$nowy_widz->setAttributes( Array(
			imie=>$_POST['Widz']['imie'],
			nazwisko=>$_POST['Widz']['nazwisko'],
			telefon=>$_POST['Widz']['telefon'],
			email=>$_POST['Widz']['email']
			) );
			
			$nowy_widz->save();	

			$id_widza = $nowy_widz->getAttribute('idWidza');
			
			//$bilety = Array();
			for ($i=1; $i<=$sala->rzedy; ++$i)
			{
				for ($j=1; $j<=$sala->miejsca; ++$j)
				{
					if (isset($_POST['bilet'.$i.'m'.$j]))
					{
						$rodzaj_nr = $_POST['bilet'.$i.'m'.$j];
						$rodzaj_biletu = $rodzaj_nr==1?'Normalny':($rodzaj_nr==2?'Ulgowy':($rodzaj_nr==3?'Studencki':'Seniorski'));
						$cena_biletu = $rodzaj_nr==1?'22':($rodzaj_nr==2?'16':($rodzaj_nr==3?'16':'10'));
						$nowy_bilet = new Bilet();
						$nowy_bilet->setAttributes( Array(
							idSeansu=>$seans->idSeansu,
							rzad=>Chr($i+64),
							miejsce=>$j,
							rodzaj=>$rodzaj_biletu,
							cena=>$cena_biletu,
							idWidza=>$id_widza
							) );
						$nowy_bilet->save();
						
						//$bilety[count($bilety)] = Array($i, $j, $_POST['bilet'.$i.'m'.$j]);
					}
				}
			}
			
			print_r($bilety);
			
			echo '<strong>Potwierdzenie zamówienia nr '.$id_widza.': </strong><br />';
			
			echo 'Imię: '.$_POST['Widz']['imie'].'<br />';
			echo 'Nazwisko: '.$_POST['Widz']['nazwisko'].'<br />';
			echo 'Telefon: '.$_POST['Widz']['telefon'].'<br />';
			echo 'Email: '.$_POST['Widz']['email'].'<br /><br />';
			
			echo '<strong>Zakupione bilety: </strong><br />';
			
			for ($i=1; $i<=$sala->rzedy; ++$i)
			{
				for ($j=1; $j<=$sala->miejsca; ++$j)
				{
					if (isset($_POST['bilet'.$i.'m'.$j]))
					{
						$rodzaj_nr = $_POST['bilet'.$i.'m'.$j];
						echo 'Rząd: '.$i.', Miejsce: '.$j.', Typ biletu: '.
						($rodzaj_nr==1?'Normalny':($rodzaj_nr==2?'Ulgowy':($rodzaj_nr==3?'Studencki':'Seniorski')))
						.', Cena biletu: '.($rodzaj_nr==1?'22':($rodzaj_nr==2?'16':($rodzaj_nr==3?'16':'10'))).'.00 zł<br />';
					}
				}
			}
		}
		else
		{
		?>
		
		<?php $model = new Widz(); ?>
		
		<div class="form">

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'widz-form',
			'enableClientValidation'=>true,
		)); ?>
			
			<h2> Aby dokończyć rezerwację proszę podać swoje dane. </h2>
			<p class="note">Pola oznaczone <span class="required">*</span> są wymagane.</p>

			<?php echo $form->errorSummary($model); ?>

			<div class="row">
				<?php echo $form->labelEx($model,'imie'); ?>
				<?php echo $form->textField($model,'imie',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'imie'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'nazwisko'); ?>
				<?php echo $form->textField($model,'nazwisko',array('size'=>40,'maxlength'=>40)); ?>
				<?php echo $form->error($model,'nazwisko'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'telefon'); ?>
				<?php echo $form->textField($model,'telefon',array('size'=>40,'maxlength'=>40)); ?>
				<?php echo $form->error($model,'telefon'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email',array('size'=>40,'maxlength'=>40)); ?>
				<?php echo $form->error($model,'email'); ?>
			</div>

			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Utwórz' : 'Zapisz'); ?>
			</div>
			
		<?php
			for ($i=1; $i<=$sala->rzedy; ++$i)
			{
				for ($j=1; $j<=$sala->miejsca; ++$j)
				{
					if (isset($_POST['bilet'.$i.'m'.$j]))
					{
						echo '<input type="hidden" name="bilet'.$i.'m'.$j.'" value="'.$_POST['bilet'.$i.'m'.$j].'" />';
					}
				}
			}
		?>

		<?php $this->endWidget(); ?>

		</div><!-- form -->
		
		<?php } ?>
		
		<br />
	
	<br />

</div>
