<?php
/* @var $this BidsController */
/* @var $model Bids */

$this->breadcrumbs=array(
	'Bids'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Bids', 'url'=>array('index')),
	array('label'=>'Create Bids', 'url'=>array('create')),
	array('label'=>'Update Bids', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Bids', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Bids', 'url'=>array('admin')),
);
?>

<h1>View Bids #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'projectId',
		'userbidId',
		'cost',
		'comfirm',
		'dateComfirm',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
	),
)); ?>
