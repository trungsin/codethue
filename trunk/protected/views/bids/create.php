<?php
/* @var $this BidsController */
/* @var $model Bids */

$this->breadcrumbs=array(
	'Bids'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Bids', 'url'=>array('index')),
	array('label'=>'Manage Bids', 'url'=>array('admin')),
);
?>

<h1>Create Bid For project <?php echo $project->projectName;?> of user <?php echo $user->username;?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,
											   'project'=>$project,
											   'user'>$user,
											   )); ?>