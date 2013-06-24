<?php 
	/* @var $this Controller */ 
	Yii::app()->bootstrap->register();
	//Yii::app()->bootstrap->registerAssetJs("bootstrap.js", CClientScript::POS_HEAD);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/global.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<style>
	    body {
		    font: 12px/18px "Lucida Grande";
	    }
    </style>
</head>

<body>

<div class="container" id="page">
	<div id="header">
		<!-- <div id="logo"></div> -->
		<div class="row-fluid">
    		<div class="span12" >
				<div style="padding: 10px">
					<table border="0" width="100%">
						<tr>
							<td width="15%" valign="middle" align="center"><img src="images/logo.jpeg" width="64px" /></td>
							<td valign="middle">
								<span style="font-size: 24pt;font-weight: bold; color: #08c;text-shadow: 2px 2px 2px rgba(150, 150, 150, 0.5);">Codethue.vn</span><br />
								<span class="small"><i style="font-weight: bold; text-shadow: 1px 1px 2px rgba(150, 150, 150, 0.5);">Slogan</i></span>
							</td>
						</tr>
					</table>
				</div>
    		</div>
    	</div>
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Projects', 'url'=>array('/projects/index')),
				array('label'=>'Login', 'url'=>array('/user/login'),
                                array('label'=>'Rights', 'url'=>array('/rights'), 
 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
			),
		)); ?>
		
	</div><!-- mainmenu -->
	
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
</body>
</html>
