<?php
$this->breadcrumbs=array(
	'My Projects'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MyProjects','url'=>array('index')),
	array('label'=>'Manage MyProjects','url'=>array('admin')),
);
?>

<h1>Create MyProjects</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>