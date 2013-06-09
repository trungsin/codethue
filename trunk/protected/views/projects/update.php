<?php
/* @var $this ProjectsController */
/* @var $model Projects */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->projectId=>array('view','id'=>$model->projectId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Create Projects', 'url'=>array('create')),
	array('label'=>'View Projects', 'url'=>array('view', 'id'=>$model->projectId)),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>Update Projects <?php echo $model->projectId; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>