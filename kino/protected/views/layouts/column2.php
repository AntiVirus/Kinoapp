<?php $this->beginContent('//layouts/main'); ?>
<div class="span-19">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="menulogin">
	<center>
	<?php
	if(!Yii::app()->user->isGuest){
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
		}
	?>
	</center>
	</div><!-- sidebar -->
</div>
<br />
<?php $this->endContent(); ?>