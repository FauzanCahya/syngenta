<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start">
					<a href="<?=base_url();?>master_data_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/corn.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Crop</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>seed_class_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/seed.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Seed Class</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>variety_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/biological.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Variety</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>material_group_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/plant.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Material Group</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>storage_location_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/map-location.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Storage Location</span>
					</a>
				</li>

				<li >
					<a href="<?=base_url();?>process_status_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/time-left.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Process Status</span>
					</a>
				</li>

				<li >
					<a href="<?=base_url();?>sample_owner_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/blood-sample.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Sample Owner</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>master_tolerance_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/cell-division.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Master Tolerance</span>
					</a>
				</li>

				<li class="active">
					<a href="<?=base_url();?>abnormal_type_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/microscope.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Abnormal Type</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>testing_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/test.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Testing</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>user_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/user.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">User</span>
					</a>
				</li>
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-head">
				<!-- BEGIN PAGE TITLE -->
				<div class="page-title">
					<h1>Master Data <small>Abnormal Type</small></h1>
				</div>
				
			</div>
			<!-- END PAGE HEAD -->
			<!-- BEGIN PAGE BREADCRUMB -->
			<ul class="page-breadcrumb breadcrumb hide">
				<li>
					<a href="javascript:;">Home</a><i class="fa fa-circle"></i>
				</li>
				<li class="active">
					 Dashboard
				</li>
			</ul>
			<!-- END PAGE BREADCRUMB -->
			<!-- BEGIN PAGE CONTENT INNER -->
			<div class="row margin-top-10" style="display: none;" id="sekalian_tambah">
				<div class="col-md-12">
					<div class="portlet light">
						<div class="portlet-title">
							<div class="caption font-red-sunglo">
								<i class="icon-settings font-red-sunglo"></i>
								<span class="caption-subject bold uppercase"> Input Data</span>
							</div>
						</div>
						<div class="portlet-body form">
							<form role="form">
									<div class="form-body">

										<div class="col-md-4">
											<div class="form-group form-md-line-input">
												<textarea class="form-control"></textarea>
												<label for="form_control_1">Abnormal Type</label>
												<span class="help-block">Input your abnormal type...</span>
											</div>
										</div>

										<div class="col-md-4">
											<div class="form-group form-md-line-input">
												<input type="text" class="form-control" id="form_control_1" placeholder="Enter your code">
												<label for="form_control_1">Code</label>
												<span class="help-block">Input your code...</span>
											</div>
										</div>

										
										<div class="col-md-4">
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" class="select2me form-control">
													<option value=""></option>
													<option value="1">Active</option>
													<option value="2">Not Active</option>
												</select>
												<label for="form_control_1">Status</label>
											</div>
										</div>
									</div>
									<div class="form-actions noborder" style="clear: both;">
										<button type="button" class="btn blue">Submit</button>
										<button type="button" class="btn default" onclick="tutup();">Cancel</button>
									</div>
								</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row margin-top-10">
					
				<div class="col-md-12">
					<div class="portlet light bordered">
									<div class="portlet-title">
										<div class="caption">
											<i class="icon-equalizer font-red-sunglo"></i>
											<span class="caption-subject font-red-sunglo bold uppercase">Filter Data</span>
											<span class="caption-helper">some info...</span>
										</div>
									</div>
									<div class="portlet-body form">
										<!-- BEGIN FORM-->
										<form action="#" class="form-horizontal">
											<div class="form-body">
												
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<label class="control-label col-md-1">Filter By</label>
															<div class="col-md-2">
																<select class="form-control">
																	<option>Code</option>
																	<option>Status</option>
																</select>
																<span class="help-block">
																Category Filter </span>
															</div>
															<div class="col-md-2">
																<input type="text" class="form-control" name="" placeholder="Place your keyword">
																<span class="help-block">
																Keyword Search </span>
															</div>
															<div class="col-md-2">
																<button class="btn btn-info">Search</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											
										</form>
										<!-- END FORM-->
									</div>
								</div>
				</div>
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box grey-cascade">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-globe"></i>Managed Table
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
								<a href="javascript:;" class="reload">
								</a>
								<a href="javascript:;" class="remove">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-toolbar">
								<div class="row">
									<div class="col-md-6">
										<div class="btn-group">
											<button id="sample_editable_1_new" class="btn green" onclick="tambah_data();">
											Add New <i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="btn-group pull-right">
											<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
											</button>
											<ul class="dropdown-menu pull-right">
												<li>
													<a href="javascript:;">
													Print </a>
												</li>
												<li>
													<a href="javascript:;">
													Save as PDF </a>
												</li>
												<li>
													<a href="javascript:;">
													Export to Excel </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
							<tr>
								<th class="table-checkbox">
									<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
								</th>
								<th style="width: 50%;">
									 Abnormal Type
								</th>
								<th>
									 Code
								</th>
								<th>
									 Status
								</th>
								<th>
									 Action
								</th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 shuxer
								</td>
								<td>
									 120
								</td>
								<td>
									 120
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 looper
								</td>
								<td>
									 120
								</td>
								<td>
									 120
								</td>
								<td>
									<span class="label label-sm label-warning">
									Suspended </span>
								</td>
							</tr>
							
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>	

			</div>
		</div>
	</div>
	<script type="text/javascript">
		function tambah_data(){
			$('#sekalian_tambah').show(500);
		}
		function tutup(){
			$('#sekalian_tambah').hide(500);
		}
	</script>