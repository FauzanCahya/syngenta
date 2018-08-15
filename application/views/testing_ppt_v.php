<div class="page-content">
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>PHYSICAL PURITY TEST</h1>
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
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
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
										NT7328
									</td>
									<td style="vertical-align: middle;">
										2018-07-30
									</td>
									<td style="vertical-align: middle;">
										2018-07-30
									</td>
									<td style="vertical-align: middle;">
										<button type="button" class="btn btn-primary" onclick="klik_input();">Input Test Result</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- END EXAMPLE TABLE PORTLET-->
		</div>
	</div>

	<div class="row margin-top-10" id="view_input" style="display: none;">
		<div class="col-md-12">
			<div class="portlet light bordered">
				<form action="#" class="form-horizontal">
					<div class="form-body">
						<div class="form-group">
							<div class="col-md-4">
								Physical Purity Test
							</div>
						</div>
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
								<label>Variety</label>
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
								<label>Material Group</label>
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
								<label>Working Sample</label>
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-pencil"></i>
									</span>
									<input type="text" name="humidity" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-4">
								<label>Lost Weight Factor</label>
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-pencil"></i>
									</span>
									<input type="text" name="humidity" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-4">
								<label>Equipment</label>
								<select class="form-control">
									<option>-- Choose --</option>
									<option>Digital Balance / WE-PL-027</option>
								</select>
							</div>
						</div>
						<div class="form-group">
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
												<th rowspan="2">Unit of Measurement</th>
												<th colspan="4" style="text-align: center;">Seed Component</th>
											</tr>
											<tr class="info">
												<th>Weed Seeds*</th>
												<th>Other Crop Seed*</th>
												<th>Inert Matter*</th>
												<th>Pure Seed</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Gram</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
											</tr>
											<tr>
												<td>%</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<thead>
											<tr class="success">
												<th rowspan="2">Unit of Measurement</th>
												<th colspan="5" style="text-align: center;">Seed Component</th>
											</tr>
											<tr class="info">
												<th>Hair Line Crack**</th>
												<th>Mechanical Damage**</th>
												<th>Black Mold*</th>
												<th>Rotten Seed*</th>
												<th>Pre Germ Seed*</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Gram</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
											</tr>
											<tr>
												<td>%</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
													<input type="text" name="humidity" class="form-control" value="">
												</td>
												<td>
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
								<label>Total Seed Component</label>
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-pencil"></i>
									</span>
									<input type="text" name="date_taken" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-4">
								<label>Type of Inert Matter</label>
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-pencil"></i>
									</span>
									<input type="text" name="batch_number" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-4">
								<label>Type of Other Seed</label>
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
								<label>Note</label>
								<div class="input-group">
									<span class="input-group-addon">
									<i class="fa fa-pencil"></i>
									</span>
									<input type="text" name="material_group" class="form-control" value="">
								</div>
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
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-danger pull-right" type="button" onclick="klik_batal();"> Batal</button>
								<button class="btn btn-success pull-right" type="button" style="margin-right: 5px;"> Save</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
function klik_input() {
	$('#view_input').show(500);
	$('.view_data').hide(500);
}

function klik_batal() {
	$('#view_input').hide(500);
	$('.view_data').show(500);
}
</script>