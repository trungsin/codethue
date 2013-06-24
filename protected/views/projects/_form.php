<?php
/* @var $this ProjectsController */
/* @var $model Projects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'projects-form',
    'enableAjaxValidation'=>false,
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'projectName'); ?>
        <?php echo $form->textField($model,'projectName',array('size'=>60,'maxlength'=>100)); ?>
        <?php echo $form->error($model,'projectName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
        <?php echo $form->error($model,'status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Description'); ?>
        <?php echo $form->textArea($model,'Description',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'Description'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'startday'); ?>
        <?php
            $this->widget(
            'ext.jui.EJuiDateTimePicker',
            array(
                'model'     => $model,
                'attribute' => 'startday',
                //'language'=> 'ru',//default Yii::app()->language
                //'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
                'options'   => array(
                    'dateFormat' => 'yy/mm/dd',
                    'timeFormat' => '',//'hh:mm tt' default
                    ),
                )
            );
        ?>
        <?php //echo $form->textField($model,'startday'); ?>
        <?php echo $form->error($model,'startday'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'endday'); ?>
        <?php echo $form->textField($model,'endday'); ?>
        <?php echo $form->error($model,'endday'); ?>
    </div>

   

    <div class="row">
        <?php echo $form->labelEx($model,'bid'); ?>
        <?php echo $form->textField($model,'bid'); ?>
        <?php echo $form->error($model,'bid'); ?>
    </div>
    
    <div class="row">
        <?php echo $form->labelEx($model,'ProjectBudget'); ?>
        <?php echo $form->textField($model,'ProjectBudget'); ?>
        <?php echo $form->error($model,'ProjectBudget'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->