<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectId')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->projectId),array('view','id'=>$data->projectId)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('projectName')); ?>:</b>
	<?php echo CHtml::encode($data->projectName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userId')); ?>:</b>
	<?php echo CHtml::encode($data->userId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Description')); ?>:</b>
	<?php echo CHtml::encode($data->Description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('startday')); ?>:</b>
	<?php echo CHtml::encode($data->startday); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endday')); ?>:</b>
	<?php echo CHtml::encode($data->endday); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->create_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_time')); ?>:</b>
	<?php echo CHtml::encode($data->update_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('update_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->update_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bid')); ?>:</b>
	<?php echo CHtml::encode($data->bid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ProjectBudget')); ?>:</b>
	<?php echo CHtml::encode($data->ProjectBudget); ?>
	<br />

	*/ ?>

</div>