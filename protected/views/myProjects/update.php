<?php
$this->breadcrumbs=array(
	'My Projects'=>array('index'),
	$model->projectId=>array('view','id'=>$model->projectId),
	'Update',
);

$this->menu=array(
	array('label'=>'List MyProjects','url'=>array('index')),
	array('label'=>'Create MyProjects','url'=>array('create')),
	array('label'=>'View MyProjects','url'=>array('view','id'=>$model->projectId)),
	array('label'=>'Manage MyProjects','url'=>array('admin')),
);
?>

<h1>Update MyProjects <?php echo $model->projectId; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>