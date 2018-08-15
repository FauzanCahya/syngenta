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
																	<option>Variety</option>
																	<option>Material Group</option>
																	<option>Status</option>
																	<option>Crop</option>
																	<option>Seed Class</option>
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
																<input type="date" class="form-control" name="" placeholder="Place your keyword">
																<span class="help-block">
																Date Begin </span>
																
															</div>

															<div class="col-md-2">
																<input type="date" class="form-control" name="" placeholder="Place your keyword">
																<span class="help-block">
																Date End </span>
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