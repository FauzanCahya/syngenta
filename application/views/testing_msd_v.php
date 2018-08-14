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

				<li class="active">
					<a href="<?=base_url();?>testing_msd_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/mechanical-gears.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Testing MSD</span>
					</a>
				</li>

				<li>
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
													<option value="">--Choose Crop--</option>
													<option value="1">Zea Mays</option>
													<option value="1">Oryza Sativa</option>
													<option value="1">Capsicum Anum</option>
												</select>
												<label for="form_control_1">Crop</label>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" id="form_control_1">
													<option value="">--Choose Material Group--</option>
													<option value="1">Commercial</option>
													<option value="1">Parent Seed</option>
												</select>
												<label for="form_control_1">Material Group</label>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">></button>
													</span>
													<label for="form_control_1">% MC</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% PPT</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Other Seed</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Weed Seed</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Inert Matter</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Rotern Seed</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Black Mold</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Pre Germination</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Germination</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Vigor</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">></button>
													</span>
													<label for="form_control_1">% Selfing (GOT)</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">></button>
													</span>
													<label for="form_control_1">% Off Type (GOT)</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Genetic Purity (GOT)</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">></button>
													</span>
													<label for="form_control_1">% Off Type (SNP)</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">>=</button>
													</span>
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button"><</button>
													</span>
													<label for="form_control_1">% Genetic Purity (SNP)</label>
												</div>
											</div>
										</div>

										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">%</button>
													</span>
													<label for="form_control_1">% Seed Size</label>
												</div>
											</div>
										</div>
										
										<div class="col-md-3">
											<div class="form-group form-md-line-input has-warning">
												<div class="input-group">
													<input type="text" class="form-control">
													<span class="input-group-btn btn-left">
													<button class="btn" type="button">%</button>
													</span>
													<label for="form_control_1">% FET</label>
												</div>
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
									 Code
								</th>
								<th>
									 Material Group
								</th>
								<th>
									 % MC
								</th>
								<th>
									 % PPT
								</th>
								<th>
									 % Other Seed
								</th>
								<th>
									 % Weed Seed
								</th>
								<th>
									 % Inert Matter
								</th>
								<th>
									 % Rotern Seed
								</th>
								<th>
									 % Black Mold
								</th>
								<th>
									 % Pre Germination
								</th>
								<th>
									 % Germination
								</th>
								<th>
									 % Vigor
								</th>
								<th>
									 % Selfing (GOT)
								</th>
								<th>
									 % Off Type (GOT)
								</th>
								<th>
									 % Genetic Purity (GOT)
								</th>
								<th>
									 % Off Type (SNP)
								</th>
								<th>
									 % Genetic Purity (SNP)
								</th>
								<th>
									 % Seed Size
								</th>
								<th>
									% FET	
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
									 Corn
								</td>
								<td>
									 Parent Seed
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
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
									 Corn
								</td>
								<td>
									 Comercial
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
								</td>
								<td>
									 3.00
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