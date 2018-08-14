<div class="page-content">
	<div class="portlet light">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-cogs font-green-sharp"></i>
				<span class="caption-subject font-green-sharp bold uppercase">MC Oven</span>
			</div>
		</div>
		<div class="portlet-body">
			<div class="tabbable-custom ">
				<ul class="nav nav-tabs ">
					<li class="active">
						<a data-toggle="tab" href="#tab_5_1" aria-expanded="true">
						Before Drying </a>
					</li>
					<li class="">
						<a data-toggle="tab" href="#tab_5_2" aria-expanded="false">
						After Drying <span class="badge badge-danger">1</span> </a>
					</li>
				</ul>
				<div class="tab-content">
					<div id="tab_5_1" class="tab-pane active">
						<div class="row margin-top-10 view_data">
							<div class="col-md-12">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="col-md-4">
														MOISTURE CONTENT TEST OVEN METHOD
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-4">
														<input type="text" class="form-control" name="" placeholder="Search">
													</div>
													<div class="col-md-2">
														<button class="btn btn-info">Search</button>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<div class="table-responsive">
															<table class="table table-bordered table-hover">
																<thead>
																	<tr class="success">
																		<th style="vertical-align: middle;">
																			<div class="md-checkbox-list" style="margin-bottom: 0px;">
																				<div class="md-checkbox" style="margin-bottom: 0px;">
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
																			 Container 1
																		</th>
																		<th style="vertical-align: middle;">
																			 Container 2
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
																			&nbsp;
																		</td>
																		<td style="vertical-align: middle;">
																			&nbsp;
																		</td>
																		<td style="vertical-align: middle;">
																			<button type="button" class="btn btn-primary" onclick="klik_input();">Input Container Capasity</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-4">
														<label>Start Drying</label>
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-pencil"></i>
															</span>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-4">
														<label>Time Start Drying</label>
														<div class="input-group">
															<span class="input-group-addon">
															<i class="fa fa-pencil"></i>
															</span>
															<input type="text" class="form-control">
														</div>
													</div>
													<div class="col-md-2">
														<label>&nbsp;</label>
														<div class="input-group">
															<button type="button" class="btn btn-primary"><i class="fa fa-send"></i> Save</button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>

						<div class="row margin-top-10" id="view_input" style="display: none;">
							<div class="col-md-12">
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="form-group">
											<div class="col-md-4">
												Moisture Content Test Oven Methode
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
												<label>Moisture Meter Serial Number</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2">Aquamatic AM 5200 (-A) / ME-PL-203</option>
													<option value="4">Aquamatic AM 5200 (-A) / ME-PL-192</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Weight Serial Number</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
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
																<th rowspan="2">No</th>
																<th rowspan="2">Analysis</th>
																<th colspan="2">
																	<label class="col-md-3" style="width: 18%;">Oven Method Tempt</label>
																	<div class="col-md-4">
																		<select class="form-control">
																			<option value="">-- Choose Replicates --</option>
																			<option value="Low">Low</option>
																			<option value="High">High</option>
																		</select>
																	</div>
																	<label class="col-md-2">-/- C hours</label>
																</th>
															</tr>
															<tr class="info">
																<th>Replicate I</th>
																<th>Replicate II</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>Container Number</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>2</td>
																<td>Empty Container Weight</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>3</td>
																<td>Container + Sample Before Drying</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>4</td>
																<td>Container + Sample After Drying</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>5</td>
																<td>Moisture Content %</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>Average of Moisture Content</td>
																<td colspan="3">
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>Percentage (%)</td>
																<td colspan="3">
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
												<button class="btn btn-warning" type="button"> Ubah</button>
												<button class="btn btn-danger" type="button" onclick="klik_batal();"> Batal</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div id="tab_5_2" class="tab-pane">
						<div class="row margin-top-10 view_data_after">
							<div class="col-md-12">
								<!-- BEGIN FORM-->
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<div class="col-md-4">
														MOISTURE CONTENT TEST OVEN METHOD
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-4">
														<input type="text" class="form-control" name="" placeholder="Search">
													</div>
													<div class="col-md-2">
														<button class="btn btn-info">Search</button>
													</div>
												</div>
												<div class="form-group">
													<div class="col-md-12">
														<div class="table-responsive">
															<table class="table table-bordered table-hover">
																<thead>
																	<tr class="success">
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
																			 Container 1
																		</th>
																		<th style="vertical-align: middle;">
																			 Container 2
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
																			1
																		</td>
																		<td style="vertical-align: middle;">
																			2
																		</td>
																		<td style="vertical-align: middle;">
																			<button type="button" class="btn btn-primary" onclick="klik_input_after();">Input Test Result</button>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
								<!-- END FORM-->
							</div>
						</div>

						<div class="row margin-top-10" id="view_input_after" style="display: none;">
							<div class="col-md-12">
								<form action="#" class="form-horizontal">
									<div class="form-body">
										<div class="form-group">
											<div class="col-md-4">
												Moisture Content Test Oven Methode
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
												<label>Moisture Meter Serial Number</label>
												<select name="prechill_test_replicates" id="prechill_test_replicates" class="form-control">
													<option value="">-- Choose Replicates --</option>
													<option value="2">oven 2 / ME-PL-227</option>
													<option value="4">oven 1 / ME-PL-151</option>
												</select>
											</div>
											<div class="col-md-4">
												<label>Weight Serial Number</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
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
																<th rowspan="2">No</th>
																<th rowspan="2">Analysis</th>
																<th colspan="2">
																	<label class="col-md-3" style="width: 18%;">Oven Method Tempt</label>
																	<div class="col-md-4">
																		<select class="form-control">
																			<option value="">-- Choose Replicates --</option>
																			<option value="Low">Low</option>
																			<option value="High">High</option>
																		</select>
																	</div>
																	<label class="col-md-2">130 C, 4 hours</label>
																</th>
															</tr>
															<tr class="info">
																<th>Replicate I</th>
																<th>Replicate II</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>Container Number</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>2</td>
																<td>Empty Container Weight</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>3</td>
																<td>Container + Sample Before Drying</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>4</td>
																<td>Container + Sample After Drying</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>5</td>
																<td>Moisture Content %</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
																<td>
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>Average of Moisture Content</td>
																<td colspan="3">
																	<input type="text" name="humidity" class="form-control" value="">
																</td>
															</tr>
															<tr>
																<td>Percentage (%)</td>
																<td colspan="3">
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
												<button class="btn btn-warning" type="button"> Ubah</button>
												<button class="btn btn-danger" type="button" onclick="klik_batal_after();"> Batal</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
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

function klik_input_after() {
	$('#view_input_after').show(500);
	$('.view_data_after').hide(500);
}

function klik_batal_after() {
	$('#view_input_after').hide(500);
	$('.view_data_after').show(500);
}
</script>