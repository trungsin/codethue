<?php
/* @var $this BidsController */
/* @var $data Bids */
?>

<div class="view">
<?php

?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectId')); ?>:</b>
	<?php echo CHtml::encode($data->projectId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userbidId')); ?>:</b>
	<?php echo CHtml::encode($data->userbidId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comfirm')); ?>:</b>
	<?php echo CHtml::encode($data->comfirm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateComfirm')); ?>:</b>
	<?php echo CHtml::encode($data->dateComfirm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	*/ ?>

</div>