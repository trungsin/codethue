<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" /> -->
    
    <!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/flat-ui.css" />
	    
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

	<?php Yii::app()->bootstrap->register(); ?>
</head>

<body>
<?php 
/*
$this->widget('bootstrap.widgets.TbNavbar',array(
	//'type' => 'inverse', 
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'Projects', 'url'=>array('/projects'), 'active'=>Yii::app()->controller->id=='projects'),
                array('label'=>'Contact', 'url'=>array('/site/contact')),
                array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
                //array('label'=>'User Management', 'url'=>array('/user/admin'), 'visible'=>!Yii::app()->user->isGuest, 'active'=>Yii::app()->controller->id=='user'),
                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); 
*/
?>
<?php
	/*
$this->widget('bootstrap.widgets.TbNavbar', array(
		'type'=>null, // null or 'inverse'
		'brand'=>'Code Thuê',
		'fixed' => 'no',
		'brandUrl'=>array('/site/index'),
		'collapse'=>true, // requires bootstrap-responsive.css
		'items'=>array(
			array(
				'class'=>'bootstrap.widgets.TbMenu',
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'Projects', 'url'=>array('/projects'), 'active'=>Yii::app()->controller->id=='projects'),
					array('label'=>'Categories', 'url'=>'#', 'items'=>array(
						array('label'=>'Action', 'url'=>'#'),
						array('label'=>'Another action', 'url'=>'#'),
						array('label'=>'Something else here', 'url'=>'#'),
						'---',
						array('label'=>'NAV HEADER'),
						array('label'=>'Separated link', 'url'=>'#'),
						array('label'=>'One more separated link', 'url'=>'#'),
					)),
				),
			),
			'<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
		),
	));
*/
?>
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
								<span style="font-size: 24pt;font-weight: bold; color: #eee;text-shadow: 2px 2px 2px rgba(128, 150, 150, 1);">Codethue.vn</span><br />
								<span class="small"><i style="font-weight: bold; text-shadow: 1px 1px 2px rgba(150, 150, 150, 0.5);">Slogan</i></span>
							</td>
						</tr>
					</table>
				</div>
    		</div>
    	</div>
	</div><!-- header -->
	<?php
		$this->widget('bootstrap.widgets.TbNavbar', array(
			'type'=>null, // null or 'inverse'
			'fixed' => 'no',
			'brandUrl'=>array('/site/index'),
			'collapse'=>true, // requires bootstrap-responsive.css
			'items'=>array(
				array(
					'class'=>'bootstrap.widgets.TbMenu',
					'items'=>array(
						array('label'=>'Home', 'url'=>array('/site/index')),
						array('label'=>'Projects', 'url'=>array('/projects'), 'active'=>Yii::app()->controller->id=='projects'),
						array('label'=>'Categories', 'url'=>'#', 'items'=>array(
							array('label'=>'Action', 'url'=>'#'),
							array('label'=>'Another action', 'url'=>'#'),
							array('label'=>'Something else here', 'url'=>'#'),
							'---',
							array('label'=>'NAV HEADER'),
							array('label'=>'Separated link', 'url'=>'#'),
							array('label'=>'One more separated link', 'url'=>'#'),
						)),
					),
				),
				'<form class="navbar-search pull-right" action=""><input type="text" class="search-query span2" placeholder="Search"></form>',
			),
		));
	?>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
	
	<?php echo $content; ?>

	<div class="clear"></div>
	<footer>
      <div class="container">
        <div class="row-fluid">
	        <div style="padding: 0 0 0 10px">
	          <div class="span7">
	            <h3 class="footer-title">Subscribe</h3>
	            <p>Do you like this freebie? Want to get more stuff like this?<br>
	              Subscribe to designmodo news and updates to stay tuned on great designs.<br>
	              Go to: <a href="http://designmodo.com/flat-free" target="_blank">designmodo.com/flat-free</a>
	            </p>
	            <table class="table">
	              	<tbody><tr>
	              		<td>a</td>
	              	</tr>
	              </tbody>
	            </table>
	            
	          </div> <!-- /span8 -->
	
	          <div class="span5">
	            <div class="footer-banner">
	              <h3 class="footer-title">Get Flat UI Pro</h3>
	              <ul>
	                <li>Tons of Basic and Custom UI Elements</li>
	                <li>A Lot of Useful Samples</li>
	                <li>More Vector Icons and Glyphs</li>
	                <li>Pro Color Swatches</li>
	                <li>Bootstrap Based HTML/CSS/JS Layout</li>
	              </ul>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </footer><!-- footer -->

</div><!-- page -->

</body>
</html>
