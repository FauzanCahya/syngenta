<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li >
					<a href="<?=base_url();?>testing_master_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/mechanical-gears.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Setting Testing</span>
					</a>
				</li>

				<li >
					<a href="<?=base_url();?>testing_msd_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/mechanical-gears.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Testing MSD</span>
					</a>
				</li>

				<li class="active">
					<a href="<?=base_url();?>setting_equipment_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/mechanical-gears.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Setting Equipment</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>lead_time_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/time-left.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Lead Time</span>
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
					<h1>Master Data <small>Testing Msd</small></h1>
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

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" id="form_control_1">
													<option value="">--Choose Testing Request--</option>
													<option value="1">Grow Out Test</option>
													<option value="1">SNP Test</option>
													<option value="1">Germination Test</option>
												</select>
												<label for="form_control_1">Testing Request</label>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input">
												<input type="text" class="form-control" id="form_control_1" placeholder="Enter your equipment">
												<label for="form_control_1">Equipment</label>
												<span class="help-block">Input your equipment...</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input">
												<input type="text" class="form-control" id="form_control_1" placeholder="Enter your Serial Number">
												<label for="form_control_1">ID Equipment</label>
												<span class="help-block">Input your Serial Number...</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input">
												<input type="text" class="form-control" id="form_control_1" placeholder="Enter your SAP code">
												<label for="form_control_1">SAP Code</label>
												<span class="help-block">Input your SAP code...</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input">
												<input type="date" class="form-control" id="form_control_1" placeholder="Enter your Calibration">
												<label for="form_control_1">Date Calibration</label>
												<span class="help-block">Input your date...</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input">
												<input type="date" class="form-control" id="form_control_1" placeholder="Enter your date">
												<label for="form_control_1">Schedule Monitoring</label>
												<span class="help-block">Input your date...</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input">
												<input type="date" class="form-control" id="form_control_1" placeholder="Enter your Calibration">
												<label for="form_control_1">Date Ex. Calibration</label>
												<span class="help-block">Input your date...</span>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" id="form_control_1">
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
																	<option>Crop</option>
																	<option>SAP Code Crop</option>
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
								<th>
									 Testing Request
								</th>
								<th>
									 Equipment
								</th>
								<th>
									 ID Equipment
								</th>
								<th>
									 SAP Code
								</th>
								<th>
									 Date Calibration
								</th>
								<th>
									 Schedule Monitoring
								</th>
								<th>
									 Date Ex. Calibration
								</th>
								<th>
									 Status
								</th>
								<th>
									Actions
								</th>

							
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								
								<td>
									 Germination Test
								</td>
								<td>
									 Warm Room
								</td>
								<td>
									 ME-PL-137
								</td>
								<td>
									 -
								</td>
								<td>
									 15 Oktober 2017
								</td>
								<td>
									 15 Maret 2018
								</td>
								<td>
									 15 Oktober 2018
								</td>
								<td>
									 Active
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
									 Prechill Test/Vigor Test
								</td>
								<td>
									 Warm Room
								</td>
								<td>
									 ME-PL-137
								</td>
								<td>
									 343434
								</td>
								<td>
									 15 Oktober 2017
								</td>
								<td>
									 15 Maret 2018
								</td>
								<td>
									 04 Juli 2018
								</td>
								<td>
									 Active
								</td>
								<td>
									<span class="label label-sm label-success">
									Approved </span>
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