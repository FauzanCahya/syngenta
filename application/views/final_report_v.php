<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="active">
					<a href="<?=base_url();?>final_report_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/newspaper.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Report Testing</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>report_testing_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/newspaper.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Final Report</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>variety_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/newspaper.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Report SAP</span>
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
					<h1>Report <small>Testing</small></h1>
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
			
			<div class="row margin-top-10">
					
				<div class="row margin-top-10" style="" id="sekalian_tambah">
					<div class="col-md-12">
						<div class="portlet light">
							<div class="portlet-title">
								<div class="caption font-red-sunglo">
									<i class="icon-settings font-red-sunglo"></i>
									<span class="caption-subject bold uppercase"> Report Testing</span>
								</div>
							</div>
							<div class="portlet-body form">
								<form role="form">
										<div class="form-body">
											<div class="col-md-4">
												<div class="form-group form-md-line-input has-info">
													<select class="form-control" class="select2me form-control">
														<option value=""></option>
														<option value="1">Januari</option>
														<option value="1">Februari</option>
														<option value="1">Maret</option>
														<option value="1">April</option>
														<option value="1">Mei</option>
														<option value="1">Juni</option>
														<option value="1">Juli</option>
														<option value="1">Agustus</option>
														<option value="1">September</option>
														<option value="1">Oktober</option>
														<option value="1">November</option>
														<option value="1">Desember</option>
													</select>
													<label for="form_control_1">Month</label>
												</div>
												<div class="form-group form-md-line-input has-info">
													<select class="form-control" class="select2me form-control">
														<option value=""></option>
														<option value="1">Status Proses</option>
														<option value="1">Sample Owner</option>
														<option value="1">Material Group</option>
														<option value="1">Name Hybrid</option>
													</select>
													<label for="form_control_1">Filter By</label>
												</div>
											</div>

											<div class="col-md-4">
												<div class="form-group form-md-line-input has-info">
													<select class="form-control" class="select2me form-control">
														<option value=""></option>
														<option value="1">2018</option>
														<option value="1">2017</option>
														<option value="1">2016</option>
														<option value="1">2015</option>
														<option value="1">2014</option>
														<option value="1">2013</option>
														<option value="1">2012</option>
													</select>
													<label for="form_control_1">Year</label>
												</div>
												<div class="form-group form-md-line-input has-info">
													<select class="form-control" class="select2me form-control">
														<option value=""></option>
														<option value="1">Relabel</option>
														<option value="2">Return</option>
														<option value="2">Reccuring</option>
													</select>
													<label for="form_control_1">Status</label>
												</div>
											</div>

											<div class="col-md-4">
												
												<div class="form-group form-md-line-input">
													<input type="text" class="form-control" id="form_control_1" placeholder="Enter your seed class">
													<label for="form_control_1">Variety</label>
													<span class="help-block">Input your name of Variety...</span>
												</div>
											</div>
										</div>
										<div class="form-actions noborder" style="clear: both;">
											<button type="button" class="btn blue">Submit</button>
											<button type="button" class="btn default" onclick="">Cancel</button>
										</div>
									</form>
							</div>
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
											Export <i class="fa fa-upload"></i>
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
									 No Lab
								</th>
								<th>
									 Batch Number
								</th>
								<th>
									 Harvest Date
								</th>
								<th>
									 Variety
								</th>
								<th>
									 Material Group
								</th>
								<th>
									Status Process
								</th>
								<th>
									Crop
								</th>
								<th>
									Seed Class
								</th>
							</tr>
							</thead>
							<tbody>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 00007/PS/H/18
								</td>
								<td>
									13812046
								</td>
								<td>
									 2018-01-05
								</td>
								<td class="center">
									 NT7328
								</td>
								<td>
									 COM700
								</td>
								<td>
									 Fresh
								</td>
								<td>
									 Zea mays
								</td>
								<td>
									Commercial
								</td>
							</tr>
							<tr class="odd gradeX">
								<td>
									<input type="checkbox" class="checkboxes" value="1"/>
								</td>
								<td>
									 00008/PS/H/18
								</td>
								<td>
									1381242111
								</td>
								<td>
									 2018-01-04
								</td>
								<td class="center">
									 NT7231
								</td>
								<td>
									 COM700
								</td>
								<td>
									 Fresh
								</td>
								<td>
									 Zea mays
								</td>
								<td>
									Commercial
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