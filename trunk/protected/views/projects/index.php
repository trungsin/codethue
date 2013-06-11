<?php
/* @var $this ProjectsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projects',
);
$this->menu=array(
	array('label'=>'Create Projects', 'url'=>array('create')),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>
<h1>Projects</h1>

 <?php //$this->widget('zii.widgets.CListView', array(
	// 'dataProvider'=>$dataProvider,
	// 'itemView'=>'_view',
    //)); 
    //$this->widget('zii.widgets.grid.CGridView', array(
    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    //'dataProvider'=>$model->search(),
	//'filter'=>$model,
    'columns'=>array(
       'projectId',
       array(
			'name'=>'projectName',
			'type'=>'raw',
			'value'=>'CHtml::link($data->projectName, array("projects/view","id"=>"$data->projectId"))',
		),
		'startday',
        'endday',
        'bid',
		'ProjectBudget',
    ),
    // 'columns'=>array
    // (
        // array(            // display 'create_time' using an expression
            // 'name'=>'Project Name',
            // 'value'=>'date("M j, Y", $data->create_time)',
        // ),
        // array(            // display 'author.username' using an expression
            // 'name'=>'authorName',
            // 'value'=>'$data->author->username',
        // ),
        // array(            // display a column with "view", "update" and "delete" buttons
            // 'class'=>'CButtonColumn',
        // ),
    // ),
));
?>
