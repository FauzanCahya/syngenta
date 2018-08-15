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
					<a href="<?=base_url();?>sample_remain_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/research.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Sample Remain</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>duplicate_sample_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/research.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Duplicate Sample</span>
					</a>
				</li>

				<li>
					<a href="<?=base_url();?>retain_c">
					<img src="<?php echo base_url(); ?>assets/admin/layout4/img/research.png" style="width: 18px; height: 18px;margin-left: 4px;">
					<span class="title" style="padding-left: 10px;">Retain</span>
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
					<h1>Management Sample <small>Duplicate</small></h1>
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
									Duplicate Sample </a>
								</li>
								<li>
									<a href="#tab_1_2" data-toggle="tab">
									Record </a>
								</li>
								
							</ul>
							<div class="tab-content">
								<div class="tab-pane fade active in" id="tab_1_1">
									<div class="table-toolbar">
										<div class="row" id="sekalian_tambah">
											<div class="col-md-12">
												<div class="portlet light">
													<div class="portlet-title">
														<div class="caption font-red-sunglo">
															<i class="icon-settings font-red-sunglo"></i>
															<span class="caption-subject bold uppercase"> Search Data</span>
														</div>
													</div>
													<div class="portlet-body form">
														<form role="form">
																<div class="form-body">
																	<div class="row">
																		
																		<div class="col-md-6">
																			<div class="form-group form-md-line-input has-info">
																				<select class="form-control" id="form_control_1">
																					<option value=""></option>
																					<option value="1">Material Group</option>
																					<option value="2">Process Status</option>
																					<option value="2">Variety</option>
																				</select>
																				<label for="form_control_1">Filter By</label>
																			</div>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group form-md-line-input">
																				<input type="text" class="form-control" id="form_control_1" placeholder="Enter your keyword">
																				<span class="help-block">Input your name of crop...</span>
																			</div>
																		</div>
																	</div>

																	
																</div>
																<div class="form-actions noborder">
																	<button type="button" class="btn blue">Submit</button>
																	<button type="button" class="btn default" onclick="">Cancel</button>
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
											 Laboratory Number
										</th>
										<th>
											 Batch Number
										</th>
										<th>
											 Variety
										</th>
										<th>
											 Material Group
										</th>
										<th>
											 Process Status
										</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd gradeX">
										<td>
											<input type="checkbox" class="checkboxes" value="1"/>
										</td>
										<td>
											 	00002/PS/G/18
										</td>
										<td>
											13812046
										</td>
										<td>
											 NT7328
										</td>
										<td>
											 COM700
										</td>
										<td>
											<span class="label label-sm label-success">
											Fresh </span>
										</td>
									</tr>
									<tr class="odd gradeX">
										<td>
											<input type="checkbox" class="checkboxes" value="1"/>
										</td>
										<td>
											 	00002/PS/G/18
										</td>
										<td>
											13812046
										</td>
										<td>
											 NT7328
										</td>
										<td>
											 COM700
										</td>
										<td>
											<span class="label label-sm label-success">
											Fresh </span>
										</td>
									</tr>
								
								</tbody>
							</table>
								</div>
								<div class="tab-pane fade" id="tab_1_2">
									
									<div class="row">
											<div class="col-md-6">
												<div class="btn-group">
													<button id="sample_editable_1_new" class="btn green" onclick="">
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

									<table class="table table-striped table-bordered table-hover" id="sample_1">
										<thead>
											<tr>
												<th class="table-checkbox">
													<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
												</th>
												<th>
													 Laboratory Number
												</th>
												<th>
													 Batch Number
												</th>
												<th>
													 Variety
												</th>
												<th>
													 Material Group
												</th>
												<th>
													 Process Status
												</th>
											</tr>
										</thead>
										<tbody>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 	00002/PS/G/18
												</td>
												<td>
													13812046
												</td>
												<td>
													 NT7328
												</td>
												<td>
													 COM700
												</td>
												<td>
													<span class="label label-sm label-success">
													Fresh </span>
												</td>
											</tr>
											<tr class="odd gradeX">
												<td>
													<input type="checkbox" class="checkboxes" value="1"/>
												</td>
												<td>
													 	00002/PS/G/18
												</td>
												<td>
													13812046
												</td>
												<td>
													 NT7328
												</td>
												<td>
													 COM700
												</td>
												<td>
													<span class="label label-sm label-success">
													Fresh </span>
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