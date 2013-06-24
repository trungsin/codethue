<?php
/* @var $this BidsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bids',
);

$this->menu=array(
	array('label'=>'Create Bids', 'url'=>array('create')),
	array('label'=>'Manage Bids', 'url'=>array('admin')),
);
?>

<h1>Bids</h1>

<?php 
/*
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$dataProvider,
    //'dataProvider'=>$model->search(),
	//'filter'=>$model,
    'columns'=>array(
*/

$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
?>
