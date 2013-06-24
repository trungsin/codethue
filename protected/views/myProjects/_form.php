<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'my-projects-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'projectName',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'userId',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'Description',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'startday',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'endday',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'update_user_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'ProjectBudget',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
