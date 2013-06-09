<?php
/* @var $this ProjectsController */
/* @var $model Projects */

$this->breadcrumbs=array(
	'Projects'=>array('index'),
	$model->projectId,
);

$this->menu=array(
	array('label'=>'List Projects', 'url'=>array('index')),
	array('label'=>'Create Projects', 'url'=>array('create')),
	array('label'=>'Update Projects', 'url'=>array('update', 'id'=>$model->projectId)),
	array('label'=>'Delete Projects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->projectId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Projects', 'url'=>array('admin')),
);
?>

<h1>View Projects #<?php echo $model->projectId; ?></h1>
<div class="well silver span12 padding-0 margin-b0 margin-t5">
        <div class="pull-right">
            <a class="custom-icon bookmark bookmark-btn" data-project-id="4605886" data-action="on" title="Bookmark Project">book this project</a>
        </div>
        <div class="well white silver span3 right align-c margin-t10 margin-r10 margin-b10 padding-5">
            <div style="display:inline-block">
                
                    <div class="text-green margin-b5 small" id="bid_time_left">
                    <?php
                    $day = round($model->endday/24);
                    $hours = $model->endday%24;
                    echo $day." days, ".$hours." hours left";
                    ?>
                    </div>
                    <div class="text-green larger bold" id="project_status" data-desc="Project is open for bidding.">OPEN</div>
                
                
            </div>
        </div>
        <div class="well white silver span padding-5 align-c margin-t10 margin-l10 margin-b10">
          
            <div style="display:inline-block" class="align-c padding-r10 padding-l5 border-r">
                <div class="margin-b5">Bids</div>
                <div id="num-bids" class="text-blue larger bold">
                <?php 
                echo $model->bid;
                ?>
                </div>
            </div>
            <div style="display:inline-block" class="align-c padding-l10 padding-r10 border-r">
                <div class="margin-b5">Avg Bid (USD)</div>
                <div class="text-blue larger bold">
                    
                        
                        
                            $<span id="avg-bid">89</span>
                        
                    
                    
                </div>
            </div>
          
            <div style="display:inline-block" class="align-c padding-l10 padding-r5">
                <div class="margin-b5">Project Budget (USD)</div>
                <div class="text-blue larger bold">
                    <?php
                    echo $model->ProjectBudget;
                    ?>
                </div>
            </div>
        </div>

        <div class="right span3 margin-r10" style="position: relative;">
            <ul class="ribbons right">
                <li class="hidden" style="display:none"></li>
                <li class="private" style="display:none"></li>
                <li class="fulltime" style="display:none"></li>
                <li class="featured" style="display:none"></li>
                <li class="urgent" style="display:none"></li>
            </ul>
            </div>
    </div>
    <div class="span8 margin-t20">
            

            <p class="span8 margin-0 margin-b10" style="word-break: break-word;"><span class="bold margin-b5">Project Description: </span>
            <br>
            <?php
            echo $model->Description;
            ?>
            </p>
            <span class="span8 margin-0 margin-b10">
                <span class="bold margin-b5">Skills required: </span><br>
                
                    <a href="../../jobs/eBay/" class="skills-required" data-job-id="251">eBay</a>, 
                
                    <a href="../../jobs/Internet-Marketing/" class="skills-required" data-job-id="25">Internet Marketing</a>, 
                
                    <a href="../../jobs/Marketing/" class="skills-required" data-job-id="82">Marketing</a>, 
                
                    <a href="../../jobs/Sales/" class="skills-required" data-job-id="64">Sales</a>
                
            </span>
            
            <!--Tags-->
        </div>
		<?php
			echo CHtml::link("Post a Project like this", array("projects/clone","id"=>$model->projectId));
             ?>   
                
                    
                
            
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'projectId',
		'projectName',
		'status',
		'userId',
		'Description',
		'startday',
		'endday',
		'skillsRequired',
		'create_time',
		'create_user_id',
		'update_time',
		'update_user_id',
		'bid',
		'ProjectBudget',
	),
)); ?>
