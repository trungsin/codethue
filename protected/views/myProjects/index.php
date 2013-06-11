<?php
$this->breadcrumbs=array(
	'My Projects',
);

$this->menu=array(
	array('label'=>'Create MyProjects','url'=>array('create')),
	array('label'=>'Manage MyProjects','url'=>array('admin')),
);
?>

<h1>My Projects</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
