<?php
/* @var $this BidsController */
/* @var $model Bids */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'bids-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'projectId'); ?>
		<?php echo $form->textField($model,'projectId'); ?>
		<?php echo $form->error($model,'projectId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userbidId'); ?>
		<?php echo $form->textField($model,'userbidId'); ?>
		<?php echo $form->error($model,'userbidId'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'comfirm'); ?>
		<?php echo $form->textField($model,'comfirm',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'comfirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateComfirm'); ?>
		<?php echo $form->textField($model,'dateComfirm'); ?>
		<?php echo $form->error($model,'dateComfirm'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->