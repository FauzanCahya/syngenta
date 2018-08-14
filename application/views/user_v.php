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

				<li >
					<a href="<?=base_url();?>abnormal_type_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/microscope.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Abnormal Type</span>
					</a>
				</li>

				<li >
					<a href="<?=base_url();?>testing_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/test.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Testing</span>
					</a>
				</li>

				<li class="active">
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
					<h1>Master Data <small>User</small></h1>
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
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box green">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i>Default Tabs
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="#portlet-config" data-toggle="modal" class="config">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#tab_1_1" data-toggle="tab">
									User Position </a>
								</li>
								<li>
									<a href="#tab_1_2" data-toggle="tab">
									User </a>
								</li>
								
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab_1_1">
									<div class="table-toolbar">
										<div class="row" id="sekalian_tambah" style="display: none;;">
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
																	<div class="row">
																		<div class="col-md-6">
																			<div class="form-group form-md-line-input">
																				<input type="text" class="form-control" id="form_control_1" placeholder="Enter your position name">
																				<label for="form_control_1">Position Name</label>
																				<span class="help-block">Input your name of crop...</span>
																			</div>
																		</div>
																		<div class="col-md-6">
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

																	<div class="row">
																		<div class="col-md-4">
																			<div class="form-group form-md-checkboxes">
																				<label></label>
																				<div class="md-checkbox-list">
																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox1" class="md-check">
																						<label for="checkbox1" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Master Data </label>
																					</div>

																					<div class="md-checkbox" style="margin-left: 20px;">
																						<input type="checkbox" id="checkbox2" class="md-check">
																						<label for="checkbox2" style="font-weight: bold;">
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						General Master </label>
																					</div>
																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox3" class="md-check">
																							<label for="checkbox3">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Add </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox4" class="md-check">
																							<label for="checkbox4">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Edit </label>
																						</div>

																					<div class="md-checkbox" style="margin-left: 20px;">
																						<input type="checkbox" id="checkbox5" class="md-check">
																						<label for="checkbox5" style="font-weight: bold;">
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Batch </label>
																					</div>
																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox6" class="md-check">
																							<label for="checkbox6">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Add </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox7" class="md-check">
																							<label for="checkbox7">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Edit </label>
																						</div>
																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox8" class="md-check">
																							<label for="checkbox8">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Delete </label>
																						</div>
																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox9" class="md-check">
																							<label for="checkbox9">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Delete </label>
																						</div>

																					<div class="md-checkbox" style="margin-left: 20px;">
																						<input type="checkbox" id="checkbox10" class="md-check">
																						<label for="checkbox10" style="font-weight: bold;">
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Testing </label>
																					</div>
																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox11" class="md-check">
																							<label for="checkbox11">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Add </label>
																						</div>
																						<div class="md-checkbox" style="margin-left: 40px;">
																							<input type="checkbox" id="checkbox12" class="md-check">
																							<label for="checkbox12">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Edit </label>
																						</div>


																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group form-md-checkboxes">
																				<label></label>
																				<div class="md-checkbox-list">
																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Planning Sampling </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox14" class="md-check">
																							<label for="checkbox14">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Add </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox15" class="md-check">
																							<label for="checkbox15">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Detail </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox16" class="md-check">
																							<label for="checkbox16">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Edit </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox17" class="md-check">
																							<label for="checkbox17">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Delete </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox18" class="md-check">
																							<label for="checkbox18">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Mass Upload </label>
																						</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group form-md-checkboxes">
																				<label></label>
																				<div class="md-checkbox-list">
																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Taking Sample Ad Submission </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox14" class="md-check">
																							<label for="checkbox14">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Taking Sample </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox15" class="md-check">
																							<label for="checkbox15">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Detail </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox16" class="md-check">
																							<label for="checkbox16">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Submission </label>
																						</div>

																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox17" class="md-check">
																						<label for="checkbox17" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Validation Sample </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox18" class="md-check">
																							<label for="checkbox18">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Validation </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox19" class="md-check">
																							<label for="checkbox19">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Detail </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox20" class="md-check">
																							<label for="checkbox20">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Edit </label>
																						</div>

																						
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row">
																		<div class="col-md-4">
																			<div class="form-group form-md-checkboxes">
																				<label></label>
																				<div class="md-checkbox-list">
																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Planning Testing </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							MC Quick </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox22" class="md-check">
																							<label for="checkbox22">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							MC Oven </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox23" class="md-check">
																							<label for="checkbox23">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							PPT </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox24" class="md-check">
																							<label for="checkbox24">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							TSW & KC </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox25" class="md-check">
																							<label for="checkbox25">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Germination </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Vigor </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							FET </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							GOT </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							SNP </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Seed Size Distribution </label>
																						</div>


																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group form-md-checkboxes">
																				<label></label>
																				<div class="md-checkbox-list">
																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Testing </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							MC Quick </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox22" class="md-check">
																							<label for="checkbox22">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							MC Oven </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox23" class="md-check">
																							<label for="checkbox23">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							PPT </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox24" class="md-check">
																							<label for="checkbox24">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							TSW & KC </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox25" class="md-check">
																							<label for="checkbox25">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Germination </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Vigor </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							FET </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							GOT </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							SNP </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox26" class="md-check">
																							<label for="checkbox26">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Seed Size Distribution </label>
																						</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group form-md-checkboxes">
																				<label></label>
																				<div class="md-checkbox-list">
																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Inspection Lot </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Input Inspection Lot </label>
																						</div>

																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Validation Testing Result </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Validation </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Edit </label>
																						</div>

																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Management Sample </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Input </label>
																						</div>

																					<div class="md-checkbox">
																						<input type="checkbox" id="checkbox13" class="md-check">
																						<label for="checkbox13" >
																						<span></span>
																						<span class="check"></span>
																						<span class="box"></span>
																						Record and Report </label>
																					</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Final Report </label>
																						</div>

																						<div class="md-checkbox" style="margin-left: 20px;">
																							<input type="checkbox" id="checkbox21" class="md-check">
																							<label for="checkbox21">
																							<span></span>
																							<span class="check"></span>
																							<span class="box"></span>
																							Report SAP </label>
																						</div>

																						
																				</div>
																			</div>
																		</div>
																	</div>
																	
																</div>
																<div class="form-actions noborder">
																	<button type="button" class="btn blue">Submit</button>
																	<button type="button" class="btn default" onclick="tutup();">Cancel</button>
																</div>
															</form>
													</div>
												</div>
											</div>
										</div>
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
											 Position Code
										</th>
										<th>
											 Position Name
										</th>
										<th>
											 Status
										</th>
										<th>
											 Actions
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
											<a href="mailto:shuxer@gmail.com">
											shuxer@gmail.com </a>
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
											 looper
										</td>
										<td>
											<a href="mailto:looper90@gmail.com">
											looper90@gmail.com </a>
										</td>
										<td>
											 Active
										</td>
										<td>
											<span class="label label-sm label-warning">
											Suspended </span>
										</td>
									</tr>
								
								</tbody>
							</table>
								</div>
								<div class="tab-pane fade" id="tab_1_2">
									<div class="row margin-top-10" style="display: none;" id="sekalian_tambah_dua">
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
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your user code">
																		<label for="form_control_1">User Code</label>
																		<span class="help-block">Input your of user code...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your name">
																		<label for="form_control_1">Name</label>
																		<span class="help-block">Input your name...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your username">
																		<label for="form_control_1">Username</label>
																		<span class="help-block">Input your username...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input has-info">
																		<select class="form-control" id="form_control_1">
																			<option value=""></option>
																			<option value="1">Superuser</option>
																			<option value="2">Superadmin</option>
																			<option value="2">Laboratory</option>
																			<option value="2">Plant Quality</option>
																		</select>
																		<label for="form_control_1">Position</label>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your departemen">
																		<label for="form_control_1">Departemen</label>
																		<span class="help-block">Input your departemen...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your address">
																		<label for="form_control_1">Address</label>
																		<span class="help-block">Input your address...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
																		<label for="form_control_1">Email</label>
																		<span class="help-block">Input your email...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your phone">
																		<label for="form_control_1">Phone</label>
																		<span class="help-block">Input your phone...</span>
																	</div>
																</div>
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="text" class="form-control" id="form_control_1" placeholder="Enter your email">
																		<label for="form_control_1">Email</label>
																		<span class="help-block">Input your email...</span>
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
																<div class="col-md-3">
																	<div class="form-group form-md-line-input">
																		<input type="file" class="form-control" id="form_control_1" placeholder="Enter your email">
																		<label for="form_control_1">Signature</label>
																		<span class="help-block">Input your email...</span>
																	</div>
																</div>
															</div>
															<div class="form-actions noborder" style="clear: both;">
																<button type="button" class="btn blue">Submit</button>
																<button type="button" class="btn default" onclick="tutup_dua();">Cancel</button>
															</div>
														</form>
												</div>
											</div>
										</div>
									</div>
									<div class="row">
											<div class="col-md-6">
												<div class="btn-group">
													<button id="sample_editable_1_new" class="btn green" onclick="tambah_data_dua();">
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
										<br>

									<table class="table table-striped table-bordered table-hover" id="sample_2">
										<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
												</th>
												<th>
													 User Code
												</th>
												<th>
													 User Name
												</th>
												<th>
													 Position
												</th>
												<th>
													 Password
												</th>
												<th>
													 Status
												</th>
												<th>
													 Actions
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
													<a href="mailto:shuxer@gmail.com">
													shuxer@gmail.com </a>
												</td>
												<td>
													 Active
												</td>
												<td>
													 Super Admin
												</td>
												<td>
													 shuxer
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
													<a href="mailto:looper90@gmail.com">
													looper90@gmail.com </a>
												</td>
												<td>
													 Super Admin
												</td>
												<td>
													 shuxer
												</td>
												<td>
													 Active
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
							<div class="clearfix margin-bottom-20">
							</div>
						</div>
					</div>
					
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
		function tambah_data_dua(){
			$('#sekalian_tambah_dua').show(500);
		}
		function tutup_dua(){
			$('#sekalian_tambah_dua').hide(500);
		}
	</script>