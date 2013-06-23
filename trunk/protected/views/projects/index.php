<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
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

<?php 
	$controller = $this;
    $this->widget('bootstrap.widgets.TbGridView', array(
    'type'=>'striped bordered condensed',
    'dataProvider'=>$model->search(),
    'columns'=>array(
       'projectId',
       array(
			'name'=>'projectName',
			'type'=>'raw',
			//'value'=>'CHtml::link($data->projectName, array("projects/view","id"=>"$data->projectId"))',
			'value' => function($data) use($controller)
			{
			    $controller->widget('bootstrap.widgets.TbButton', array(
			        'label'=>$data->projectName,
			        //'buttonType'=>'link',
			        'type'=>'link',
			        //'size' => 'mini',
			        'htmlOptions'=>array(
			        	'data-title'=>$data->projectName,
			        	'data-placement'=>'right',
			            //'data-content'=> $controller->renderPartial('_popover',
			            //          array('data' => $data->projectName), true),
			            'data-content'=> $data->Description,
			            'rel'=>'popover',
			            //'data-trigger' => 'hover focus',
			            'href' => array('projects/view','id'=>$data->projectId),
			        ),
			    ));
			}
		),
		'startday',
        'endday',
        'bid',
		'ProjectBudget',
    ),
));
?>

