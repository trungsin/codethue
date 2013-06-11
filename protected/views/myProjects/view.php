<?php
$this->breadcrumbs=array(
	'My Projects'=>array('index'),
	$model->projectId,
);

$this->menu=array(
	array('label'=>'List MyProjects','url'=>array('index')),
	array('label'=>'Create MyProjects','url'=>array('create')),
	array('label'=>'Update MyProjects','url'=>array('update','id'=>$model->projectId)),
	array('label'=>'Delete MyProjects','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->projectId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MyProjects','url'=>array('admin')),
);
?>

<h1>View MyProjects #<?php echo $model->projectId; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'projectId',
		'projectName',
		'status',
		'userId',
		'Description',
		'startday',
		'endday',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		'bid',
		'ProjectBudget',
	),
)); ?>
