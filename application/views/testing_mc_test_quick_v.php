<div class="page-content">
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>MOISTURE CONTENT TEST QUICK METHOD</h1>
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
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="fa fa-globe"></i>Managed Table
					</div>
				</div>
				<div class="portlet-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>
										<div class="md-checkbox-list">
											<div class="md-checkbox">
												<input type="checkbox" id="checkbox1" class="md-check">
												<label for="checkbox1">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													Select All
												</label>
											</div>
										</div>
									</th>
									<th style="vertical-align: middle;">
										Laboratory Number
									</th>
									<th style="vertical-align: middle;">
										 Batch Number
									</th>
									<th style="vertical-align: middle;">
										 Material Group
									</th>
									<th style="vertical-align: middle;">
										 Process Status
									</th>
									<th style="vertical-align: middle;">
										 Variety
									</th>
									<th style="vertical-align: middle;">
										 Date Received Sample
									</th>
									<th style="vertical-align: middle;">
										 Date Planning Testing
									</th>
									<th style="vertical-align: middle;">
										 Action
									</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td align="center">
										<div class="md-checkbox-list" style="width: 0px;">
											<div class="md-checkbox" style="width: 0px;">
												<input type="checkbox" id="checkbox1" class="md-check">
												<label for="checkbox1">
													<span></span>
													<span class="check"></span>
													<span class="box"></span>
													&nbsp;
												</label>
											</div>
										</div>
									</td>
									<td style="vertical-align: middle;">
										00002/PS/G/18
									</td>
									<td style="vertical-align: middle;">
										13812046
									</td>
									<td style="vertical-align: middle;">
										COM700
									</td>
									<td style="vertical-align: middle;">
										Fresh
									</td>
									<td style="vertical-align: middle;">
										NT7328
									</td>
									<td style="vertical-align: middle;">
										2018-07-30
									</td>
									<td style="vertical-align: middle;">
										2018-07-30
									</td>
									<td style="vertical-align: middle;">
										<button type="button" class="btn btn-primary" onclick="klik_input_result();">Input Test Result</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-md-12">
							<form>
								<div class="form-body">
									<div class="form-group">
										<div class="col-md-6">
											<label>Date Planning Testing </label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="col-md-6">
											<button type="button" class="btn btn-success pull-right"><i class="fa fa-send"></i> Save</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>

	<div class="row margin-top-10" id="view_input_result" style="display: none;">
		<div class="col-md-12">
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-equalizer font-red-sunglo"></i>
						<span class="caption-subject font-red-sunglo bold uppercase">Moisture Content Test Quick</span>
					</div>
					<div class="tools">
						<a href="javascript:;" onclick="tutup_input_result();"><i class="fa fa-times"></i></a>
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
											<label>Crop</label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" name="batch_number" class="form-control" value="">
											</div>
										</div>
										<div class="col-md-4">
											<label>Material Group</label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" name="variety" class="form-control" value="">
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
												<input type="text" name="material_group" class="form-control" value="">
											</div>
										</div>
										<div class="col-md-4">
											<label>Status Process</label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" name="sampling_location" class="form-control" value="">
											</div>
										</div>
										<div class="col-md-4">
											<label>Date Testing</label>
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
											<label>Moisture Meter Serial Number</label>
											<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
												<option value="">-- Choose Replicates --</option>
												<option value="2">Aquamatic AM 5200 (-A) / ME-PL-203</option>
												<option value="4">Aquamatic AM 5200 (-A) / ME-PL-192</option>
											</select>
										</div>
										<div class="col-md-4">
											<label>Lead Time Testing</label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" name="humidity" class="form-control" value="">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="table-responsive">
												<table class="table table-bordered">
													<thead>
														<tr class="success">
															<th rowspan="2">Analysis</th>
															<th colspan="2">Quick Methode</th>
														</tr>
														<tr class="info">
															<th>Replicate I</th>
															<th>Replicate II</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>Moisture Content (%)</td>
															<td>
																<input type="text" name="humidity" class="form-control" value="">
															</td>
															<td>
																<input type="text" name="humidity" class="form-control" value="">
															</td>
														</tr>
														<tr>
															<td>Average of Moisture Content</td>
															<td colspan="2">
																<input type="text" name="humidity" class="form-control" value="">
															</td>
														</tr>
														<tr>
															<td>Percentage (%)</td>
															<td colspan="2">
																<input type="text" name="humidity" class="form-control" value="">
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-4">
											<label>Note</label>
											<textarea class="form-control"></textarea>
										</div>
										<div class="col-md-4">
											<label>Tolerance Status Between Replication</label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" name="sampling_location" class="form-control" value="">
											</div>
										</div>
										<div class="col-md-4">
											<label>Status MSD</label>
											<div class="input-group">
												<span class="input-group-addon">
												<i class="fa fa-pencil"></i>
												</span>
												<input type="text" name="sampling_procedure" class="form-control" value="">
											</div>
										</div>
									</div>
								</div>
								<div class="form-actions pull-right">
									<div class="row">
										<div class="col-md-12">
											<button class="btn btn-warning" type="button"><i class="fa fa-send"></i> Proceed to MC Oven</button>
											<button class="btn btn-success" type="button"><i class="fa fa-send"></i> Save</button>
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

<script type="text/javascript">
function klik_input_result() {
	$('#view_input_result').show(500);
	$('.view_data').hide(500);
}

function tutup_input_result() {
	$('#view_input_result').hide(500);
	$('.view_data').show(500);
}
</script>