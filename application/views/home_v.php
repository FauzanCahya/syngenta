<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.4
Version: 4.0.1
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>ADMIN SYNGENTA</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<link href="<?php echo base_url(); ?>assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- <link href="<?php echo base_url(); ?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css"> -->
<!-- END PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN PAGE STYLES -->

<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="<?php echo base_url(); ?>assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
<link href="<?php echo base_url(); ?>assets/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-sidebar-closed-hide-logo page-sidebar-closed-hide-logo">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<a href="index.html">
			<img src="<?php echo base_url(); ?>assets/admin/pages/img/logo.png" style="width: 70%;" alt="logo" class="logo-default"/>
			</a>
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN PAGE ACTIONS -->
		<!-- DOC: Remove "hide" class to enable the page header actions -->
		
		<!-- END PAGE ACTIONS -->
		<!-- BEGIN PAGE TOP -->
		<div class="page-top">
			<!-- BEGIN HEADER SEARCH BOX -->
			<!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
			
			<!-- END HEADER SEARCH BOX -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="separator hide">
					</li>
					<!-- BEGIN NOTIFICATION DROPDOWN -->
					<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" style="text-align: center;">
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/settings.png" style="width: 37px; height: 37px;">
						<br>
						<span>
						MASTER </span>
						</a>
						<ul class="dropdown-menu">
							
							<li>
								<ul class="dropdown-menu-list scroller" style="height: 180px;" data-handle-color="#637283">
									<li>
										<a href="<?=base_url();?>master_data_c">
										<span class="time"></span>
										<span class="details">
										<span class="label label-sm label-icon ">
										<img src="<?php echo base_url(); ?>assets/admin/layout4/img/blood-sample_putih.png" style="width: 25px; height: 25px;">
										</span>
										General Master </span>
										</a>
									</li>
									<li>
										<a href="<?=base_url();?>batch_c">
										<span class="time"></span>
										<span class="details">
										<span class="label label-sm label-icon">
										<img src="<?php echo base_url(); ?>assets/admin/layout4/img/test-tube.png" style="width: 25px; height: 25px;">
										</span>
										Batch </span>
										</a>
									</li>
									<li>
										<a href="<?=base_url();?>testing_master_c">
										<span class="time"></span>
										<span class="details">
										<span class="label label-sm label-icon">
										<img src="<?php echo base_url(); ?>assets/admin/layout4/img/exam.png" style="width: 25px; height: 25px;">
										</span>
										Testing </span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="<?=base_url();?>planning_sample_c" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/planning.png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">PLANNING</span>
						<br>
						<span style="text-align: center;">SAMPLING
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>
					
					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="<?=base_url();?>taking_sample_c" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/chemical (3).png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">TAKING</span>
						<br>
						<span style="text-align: center;">SAMPLE
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/medical-history (1).png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">VALIDATION</span>
						<br>
						<span style="text-align: center;">SAMPLE
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/planning.png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">PLANNING</span>
						<br>
						<span style="text-align: center;">TESTING
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/testing.png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">TESTING
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/inspection.png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">INSPECTION</span>
						<br>
						<span style="text-align: center;">LOT
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/medical-history (1).png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">VALIDATION</span>
						<br>
						<span style="text-align: center;">TESTING
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/medical-history (1).png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">MANAGEMENT</span>
						<br>
						<span style="text-align: center;">SAMPLE
						</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/inspection.png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">REPORT</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
						<a style="text-align: center;" href="javascript:;" >
						<img src="<?php echo base_url(); ?>assets/admin/layout4/img/logout.png" style="width: 37px; height: 37px;">
						<br>
						<span style="text-align: center;">LOGOUT</span>
						</a>
						
					</li>
					
					<!-- END INBOX DROPDOWN -->
					<li class="separator hide">
					</li>

					
				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END PAGE TOP -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	
			<?php if ($page != '') {
				$this->load->view($page);
			}else{
			?>

			
			
			<?php }?>

</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		2014 &copy; Metronic by keenthemes. <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<!-- <script src="<?php echo base_url(); ?>assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script> -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url(); ?>assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<!-- <script src="<?php echo base_url(); ?>assets/admin/layout2/scripts/quick-sidebar.js" type="text/javascript"></script> -->
<!-- <script src="<?php echo base_url(); ?>assets/admin/layout4/scripts/demo.js" type="text/javascript"></script> -->
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/admin/pages/scripts/table-managed.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   // Demo.init(); // init demo features
   // QuickSidebar.init(); // init quick sidebar
    // Index.init(); // init index page
    TableManaged.init();
 Tasks.initDashboardWidget(); // init tash dashboard widget  
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>