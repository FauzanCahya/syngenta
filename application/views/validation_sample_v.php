<style type="text/css">
#view_validation_plan_sampling,
#view_submittion_sample,
#view_submittion_sample_ubah{
	display: none;
}
</style>

<div class="page-content-wrapper" >
	<div class="page-content" style="margin-left: -9px !important ; ">
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Validation Sample</h1>
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
		<div class="row margin-top-10 view_data">				
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
													<option>Batch Number</option>
													<option>Crop SAP</option>
													<option>Seed Class</option>
													<option>Variety</option>
													<option>Material Group</option>
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
					</div>
					<div class="portlet-body">
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
									<th>
										 No
									</th>
									<th>
										 Batch Number
									</th>
									<th>
										 Crop SAP
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
										 Status
									</th>
									<th style="text-align: center;">
										 Action
									</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>
										 1
									</td>
									<td>
										 13812046
									</td>
									<td>
										 CORN
									</td>
									<td>
										 NT7328
									</td>
									<td>
										 COM700
									</td>
									<td>
										Fresh
									</td>
									<td>
										Submittion
									</td>
									<td align="center">
										<button class="btn btn-primary" type="button" name="btn_taking" onclick="klik_validation();">Validation</button>
										<button class="btn btn-success" type="button" name="search_taking" onclick="klik_search();"><i class="fa fa-search"></i></button>
										<button class="btn btn-warning" type="button" name="search_taking" onclick="klik_ubah();"><i class="fa fa-pencil"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

		<div class="row margin-top-10" id="view_validation_plan_sampling">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-equalizer font-red-sunglo"></i>
							<span class="caption-subject font-red-sunglo bold uppercase">VALIDATION PLANING SAMPLING</span>
						</div>
						<div class="tools">
							<a href="javascript:;" onclick="tutup_validation_plan_sampling();"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="portlet-body form">
						<div class="row">
							<div class="col-md-12">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="form-group">
											<div class="col-md-4">
												<label>Laboratory Number</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sample Owner</label>
												<select class="form-control">
													<option value="">--Choose Sample Owner--</option>
													<option value="SO001">Processing</option>
													<option value="SO002">Warehouse</option>
													<option value="SO003">Plant Quality</option>
													<option value="SO004">Field Production</option>
													<option value="SO005">Laboratory</option>
													<option value="SO006">Parent Seed</option>
													<option value="SO007">Production and Processing</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Package</label>
												<select name="package" id="package" class="form-control">
													<option value="Plastick" selected="">Plastick</option>
													<option value="Cloth">Cloth</option>
													<option value="Bottle">Bottle</option>
													<option value="Jar">Jar</option>
													<option value="Tin">Tin</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Package Type</label>
												<select name="package_type" id="package_type" class="form-control">
													<option value="">Choose</option>
													<option value="Sealed" selected="">Sealed</option>
													<option value="Unsealed">Unsealed</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Crop</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_location" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Field Rating</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_procedure" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Harvest Date</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="environment_condition" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Batch Number</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Code</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Material Description</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Quantity Stock</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sample Amount</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Sample Weight</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Group</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Process Status</label>
												<select required="" name="code_status_process" id="code_status_process" class="form-control">
													<option value="">Choose Process Status</option>
													<option value="SP001" selected="">Fresh</option>
													<option value="SP002">Relabel</option>
													<option value="SP003">Return</option>
													<option value="SP004">Recurring</option>
													<option value="SP005">Sample Marketing</option>
													<option value="SP006">Retain</option>
													<option value="SP007">Trial</option>
													<option value="SP008">Rework</option>
													<option value="SP009">Retest</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Testing Request</label>
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox1" class="md-check">
														<label for="checkbox1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Moisture Content Test Hot Air Methode 
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox2" class="md-check">
														<label for="checkbox2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Moisture Content Test Quick Methode
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox3" class="md-check">
														<label for="checkbox3">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Physical Purity Test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox4" class="md-check">
														<label for="checkbox4">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Grow Out test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox5" class="md-check">
														<label for="checkbox5">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Germination Test
														</label>
													</div>
												</div>
											</div>
											<div class="col-md-4">&nbsp;</div>
											<div class="col-md-4">
												<label class="col-md-2">QR Code</label>
												<div class="col-md-12">
													<center>
														<img src="<?php echo base_url(); ?>ico/2d-barcode-575669a49194cf6f6cf1f226833efd6cd4201465e22d128e88fbd81267f6d463.png">
														<span class="help-block"><b>00007/PS/H/18</b></span>
													</center>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Pilih Replicates</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2" selected="">2 replicates</option>
													<option value="4">4 replicates</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Germination Method</label>
												<select name="germination_method" id="germination_method" class="form-control">
													<option value="">-- Choose Method --</option>
													<option value="BP" selected="">BP</option>
													<option value="PP">PP</option>
													<option value="TP">TP</option>
													<option value="ST">ST</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox1" class="md-check" checked>
														<label for="checkbox1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Prechill Test/Vigor Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Pilih Replicates</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2" selected="">2 replicates</option>
													<option value="4">4 replicates</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox11" class="md-check">
														<label for="checkbox11">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Field Emergence Test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox21" class="md-check">
														<label for="checkbox21">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Thousand seed Weight & Kernel Count
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox31" class="md-check">
														<label for="checkbox31">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Seed size Distribution
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox41" class="md-check">
														<label for="checkbox41">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															SNP Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Date Taken Sample</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Date Submission</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Date Receive Sample</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Copy</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Note</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="col-md-4">
												<label>Seed Sampler</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Received by</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row margin-top-10" id="view_submittion_sample">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-equalizer font-red-sunglo"></i>
							<span class="caption-subject font-red-sunglo bold uppercase">SUBMITTION SAMPLE</span>
						</div>
						<div class="tools">
							<a href="javascript:;" onclick="tutup_submittion_sample();"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="portlet-body form">
						<div class="row">
							<div class="col-md-12">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="form-group">
											<div class="col-md-4">
												<label>Sample Owner</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Batch Number</label>
												<select class="form-control">
													<option value="">--Choose Sample Owner--</option>
													<option value="SO001">Processing</option>
													<option value="SO002">Warehouse</option>
													<option value="SO003">Plant Quality</option>
													<option value="SO004">Field Production</option>
													<option value="SO005">Laboratory</option>
													<option value="SO006">Parent Seed</option>
													<option value="SO007">Production and Processing</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Crop</label>
												<select name="package" id="package" class="form-control">
													<option value="Plastick" selected="">Plastick</option>
													<option value="Cloth">Cloth</option>
													<option value="Bottle">Bottle</option>
													<option value="Jar">Jar</option>
													<option value="Tin">Tin</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Variety</label>
												<select name="package_type" id="package_type" class="form-control">
													<option value="">Choose</option>
													<option value="Sealed" selected="">Sealed</option>
													<option value="Unsealed">Unsealed</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Material Group</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_location" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Field Rating</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_procedure" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Harvest Date</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="environment_condition" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Code</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Description</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Quantity Stock</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sample Amount</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sample Weight</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Process Status</label>
												<select required="" name="code_status_process" id="code_status_process" class="form-control">
													<option value="">Choose Process Status</option>
													<option value="SP001" selected="">Fresh</option>
													<option value="SP002">Relabel</option>
													<option value="SP003">Return</option>
													<option value="SP004">Recurring</option>
													<option value="SP005">Sample Marketing</option>
													<option value="SP006">Retain</option>
													<option value="SP007">Trial</option>
													<option value="SP008">Rework</option>
													<option value="SP009">Retest</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox1" class="md-check">
														<label for="checkbox1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Moisture Content Test Hot Air Methode 
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox2" class="md-check">
														<label for="checkbox2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Moisture Content Test Quick Methode
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox3" class="md-check">
														<label for="checkbox3">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Physical Purity Test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox4" class="md-check">
														<label for="checkbox4">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Grow Out test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox5" class="md-check">
														<label for="checkbox5">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Germination Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Pilih Replicates</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2" selected="">2 replicates</option>
													<option value="4">4 replicates</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Germination Method</label>
												<select name="germination_method" id="germination_method" class="form-control">
													<option value="">-- Choose Method --</option>
													<option value="BP" selected="">BP</option>
													<option value="PP">PP</option>
													<option value="TP">TP</option>
													<option value="ST">ST</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox1" class="md-check" checked>
														<label for="checkbox1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Prechill Test/Vigor Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Pilih Replicates</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2" selected="">2 replicates</option>
													<option value="4">4 replicates</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox11" class="md-check">
														<label for="checkbox11">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Field Emergence Test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox21" class="md-check">
														<label for="checkbox21">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Thousand seed Weight & Kernel Count
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox31" class="md-check">
														<label for="checkbox31">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Seed size Distribution
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox41" class="md-check">
														<label for="checkbox41">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															SNP Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Date Submission</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Note</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Seed Sampler</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row margin-top-10" id="view_submittion_sample_ubah">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-equalizer font-red-sunglo"></i>
							<span class="caption-subject font-red-sunglo bold uppercase">SUBMITTION SAMPLE</span>
						</div>
						<div class="tools">
							<a href="javascript:;" onclick="tutup_submittion_sample_ubah();"><i class="fa fa-times"></i></a>
						</div>
					</div>
					<div class="portlet-body form">
						<div class="row">
							<div class="col-md-12">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="form-group">
											<div class="col-md-4">
												<label>Sample Owner</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Batch Number</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Crop</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Variety</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Group</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_location" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Field Rating</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_procedure" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Harvest Date</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="environment_condition" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Code</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Description</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Quantity Stock</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sample Amount</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sample Weight</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Process Status</label>
												<select required="" name="code_status_process" id="code_status_process" class="form-control">
													<option value="">Choose Process Status</option>
													<option value="SP001" selected="">Fresh</option>
													<option value="SP002">Relabel</option>
													<option value="SP003">Return</option>
													<option value="SP004">Recurring</option>
													<option value="SP005">Sample Marketing</option>
													<option value="SP006">Retain</option>
													<option value="SP007">Trial</option>
													<option value="SP008">Rework</option>
													<option value="SP009">Retest</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox1" class="md-check">
														<label for="checkbox1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Moisture Content Test Hot Air Methode 
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox2" class="md-check">
														<label for="checkbox2">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Moisture Content Test Quick Methode
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox3" class="md-check">
														<label for="checkbox3">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Physical Purity Test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox4" class="md-check">
														<label for="checkbox4">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Grow Out test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox5" class="md-check">
														<label for="checkbox5">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Germination Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Pilih Replicates</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2" selected="">2 replicates</option>
													<option value="4">4 replicates</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Germination Method</label>
												<select name="germination_method" id="germination_method" class="form-control">
													<option value="">-- Choose Method --</option>
													<option value="BP" selected="">BP</option>
													<option value="PP">PP</option>
													<option value="TP">TP</option>
													<option value="ST">ST</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox1" class="md-check" checked>
														<label for="checkbox1">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Prechill Test/Vigor Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Pilih Replicates</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2" selected="">2 replicates</option>
													<option value="4">4 replicates</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<div class="md-checkbox-list">
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox11" class="md-check">
														<label for="checkbox11">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Field Emergence Test
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox21" class="md-check">
														<label for="checkbox21">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Thousand seed Weight & Kernel Count
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox31" class="md-check">
														<label for="checkbox31">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															Seed size Distribution
														</label>
													</div>
													<div class="md-checkbox">
														<input type="checkbox" id="checkbox41" class="md-check">
														<label for="checkbox41">
															<span></span>
															<span class="check"></span>
															<span class="box"></span>
															SNP Test
														</label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Date Submission</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Note</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Seed Sampler</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function klik_validation(){
	$('#view_validation_plan_sampling').show(500);
	$('.view_data').hide(500);
}

function tutup_validation_plan_sampling(){
	$('#view_validation_plan_sampling').hide(500);
	$('.view_data').show(500);
}

function klik_search(){
	$('#view_submittion_sample').show(500);
	$('.view_data').hide(500);
}

function tutup_submittion_sample(){
	$('#view_submittion_sample').hide(500);
	$('.view_data').show(500);
}

function klik_ubah(){
	$('#view_submittion_sample_ubah').show(500);
	$('.view_data').hide(500);
}

function tutup_submittion_sample_ubah(){
	$('#view_submittion_sample_ubah').hide(500);
	$('.view_data').show(500);
}
</script>