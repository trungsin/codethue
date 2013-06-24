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
<div class="row-fluid">
	<div class="span12 well" style="padding: 10px 10px 0 10px;">
		<div class="pull-right span2">
        	<a class="custom-icon bookmark bookmark-btn" data-toggle="tooltip" title="Bookmark Project" rel="tooltip" alt="Bookmark"></a>
	    </div>
	    <div class="well white silver span3 right align-c">
	        <div style="display:inline-block">
	        	<a href="#" data-toggle="tooltip" title="Project is open for bidding" data-placement="left" rel="tooltip" style="text-decoration:none;">
	                <div class="text-green margin-b5 small" id="bid_time_left">
	                <?php
	                $day = round($model->endday/24);
	                $hours = $model->endday%24;
	                echo $day." days, ".$hours." hours left";
	                ?>
	                </div>
	                <div class="text-green larger bold" id="project_status" data-desc="Project is open for bidding.">OPEN</div>
	        	</a>
	        </div>
	    </div>
	    <div class="well white silver span7">
	        <div style="display:inline-block" class="align-c padding-r10 padding-l5 border-r">
	            <div class="margin-b5">Bids</div>
	            <div id="num-bids" class="text-blue larger bold">
	            <?php 
				if ($bids != 0)
				{
					echo CHtml::link($bids, array("bids/viewProjects","projectId"=>$model->projectId));
				}
				else
					echo $bids;
	            ?>
	            </div>
	        </div>
	        <div style="display:inline-block" class="align-c padding-l10 padding-r10 border-r">
	            <div class="margin-b5">Avg Bid (USD)</div>
	            <div class="text-blue larger bold">
	                
	                    <?php
						echo $avg;
	                    ?>
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
	</div>
</div>
<div class="row">
    <div class="span3 margin-t20">
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
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("a[rel=tooltip]").tooltip();
	});
</script>

