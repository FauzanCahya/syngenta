<style type="text/css">
#view_taking_sampling,
#view_det_taking_sampling{
	display: none;
}
</style>

<div class="page-content-wrapper" >
	<div class="page-content" style="margin-left: -9px !important ; ">
		<div class="page-head">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Taking Sampling</h1>
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
											<option value=""></option>
											<option value="1">12312312</option>
											<option value="1">12567566</option>
										</select>
										<label for="form_control_1">Batch Number</label>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material code">
										<label for="form_control_1">Material Code</label>
										<span class="help-block">Input your material code...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material description">
										<label for="form_control_1">Material Description</label>
										<span class="help-block">Input your material description...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your crop" readonly="">
										<label for="form_control_1">Crop</label>
										<span class="help-block">Input your crop...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material description" value="Parent Seed" readonly>
										<label for="form_control_1">Seed Class</label>
										<span class="help-block">Input your material description...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material description" value="Parent Seed" readonly>
										<label for="form_control_1">Variety / Hybird</label>
										<span class="help-block">Input your material description...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material group" readonly>
										<label for="form_control_1">Material Group</label>
										<span class="help-block">Input your material group...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material group" readonly>
										<label for="form_control_1">Field Rating</label>
										<span class="help-block">Input your material group...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your material group" readonly>
										<label for="form_control_1">Storage Location</label>
										<span class="help-block">Input your material group...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input has-warning">
										<div class="input-group">
											<input type="text" class="form-control">
											<span class="input-group-addon">KG</span>
											<label for="form_control_1">Quantity Stock</label>
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
										<label for="form_control_1">Storage Location</label>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group form-md-line-input has-info">
										<select class="form-control" id="form_control_1">
											<option value=""></option>
											<option value="1">Active</option>
											<option value="2">Not Active</option>
										</select>
										<label for="form_control_1">Status Process</label>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your capasity container">
										<label for="form_control_1">Capasity Container</label>
										<span class="help-block">Input your capasity container...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your capasity container" readonly>
										<label for="form_control_1">Number of Container</label>
										<span class="help-block">Input your capasity container...</span>
									</div>
								</div>
								
								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="text" class="form-control" id="form_control_1" placeholder="Enter your capasity container" readonly>
										<label for="form_control_1">Harvest Date</label>
										<span class="help-block">Input your capasity container...</span>
									</div>
								</div>

								<div class="col-md-12">
									<div class="form-group form-md-checkboxes">
										<label></label>
										<div class="md-checkbox-list">
											<div class="md-checkbox">
												<input type="checkbox" id="checkbox13" class="md-check">
												<label for="checkbox13" >
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Moisture Content Test Hot Air Methode </label>
											</div>

											<div class="md-checkbox" >
												<input type="checkbox" id="checkbox14" class="md-check">
												<label for="checkbox14">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Moisture Content Test Quick Methode </label>
											</div>

											<div class="md-checkbox" >
												<input type="checkbox" id="checkbox15" class="md-check">
												<label for="checkbox15">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Physical Purity Test </label>
											</div>

											<div class="md-checkbox" >
												<input type="checkbox" id="checkbox16" class="md-check">
												<label for="checkbox16">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Prechill Test/Vigor Test </label>
											</div>

											<div class="md-checkbox" >
												<input type="checkbox" id="checkbox17" class="md-check">
												<label for="checkbox17">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												Seed size Distribution </label>
											</div>

											<div class="md-checkbox" >
												<input type="checkbox" id="checkbox18" class="md-check">
												<label for="checkbox18">
												<span></span>
												<span class="check"></span>
												<span class="box"></span>
												SNP Test </label>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<input type="date" class="form-control" id="form_control_1" placeholder="Enter your date" >
										<label for="form_control_1">Date of Planning Sampling</label>
										<span class="help-block">Input your capasity container...</span>
									</div>
								</div>

								<div class="col-md-3">
									<div class="form-group form-md-line-input">
										<textarea class="form-control" rows="6"></textarea>
										<label for="form_control_1">Date of Planning Sampling</label>
										<span class="help-block">Input your capasity container...</span>
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
		<div class="row margin-top-10" style="display: none;" id="import_data_t">
			<div class="col-md-12">
				<div class="portlet light">
					<div class="portlet-title">
						<div class="caption font-red-sunglo">
							<i class="icon-settings font-red-sunglo"></i>
							<span class="caption-subject bold uppercase"> Upload Data</span>
						</div>
					</div>
					<div class="portlet-body form">
						<form role="form">
								<div class="form-body">
									<div class="col-md-3">
										<div class="form-group form-md-line-input">
											<input type="file" class="form-control" id="form_control_1" placeholder="Enter your batch number">
											<label for="form_control_1">Input Master Batch</label>
											<span class="help-block">Input your batch number...</span>
										</div>
									</div>
									
								</div>
								<div class="form-actions noborder" style="clear: both;">
									<button type="button" class="btn blue">Submit</button>
									<button type="button" class="btn default" onclick="tutup_data();">Cancel</button>
								</div>
							</form>
					</div>
				</div>
			</div>
		</div>

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
						<div class="table-toolbar">
							<div class="row">
								<div class="col-md-11">
									<div class="btn-group">
										<button id="sample_editable_1_new" class="btn green" onclick="tambah_data();">
										Add New <i class="fa fa-plus"></i>
										</button>
										<button id="sample_editable_1_new" class="btn green" onclick="import_data();" style="margin-left: 10px;">
										Import Data <i class="fa fa-cloud"></i>
										</button>
									</div>
								</div>
								
								<div class="col-md-1">
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
										 Batch Number
									</th>
									<th>
										 Crop SAP
									</th>
									<th>
										 Seed Class
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
									<th style="text-align: center;">
										 Status
									</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>
										<input type="checkbox" class="checkboxes" value="1"/>
									</td>
									<td>
										 13812046
									</td>
									<td>
										 CORN
									</td>
									<td>
										 Commercial
									</td>
									<td>
										 NT7328
									</td>
									<td>
										 COM700
									</td>
									<td>
										AI_EMBOSS
									</td>
									<td align="center">
										<button class="btn btn-success" type="button" name="btn_taking" onclick="klik_taking_sampling();">Taking Sample</button>
										<button class="btn btn-success" type="button" name="search_taking" onclick="cari_taking_sampling();"><i class="fa fa-search"></i></button>
									</td>
								</tr>
								<tr class="odd gradeX">
									<td>
										<input type="checkbox" class="checkboxes" value="1"/>
									</td>
									<td>
										 13858907
									</td>
									<td>
										 CORN
									</td>
									<td>
										 Parent Seed
									</td>
									<td>
										 NP5296
									</td>
									<td>
										 BAS500
									</td>
									<td>
										AI_EMBOSS
									</td>
									<td align="center">
										<button class="btn btn-success" type="button" name="btn_taking" onclick="klik_taking_sampling();">Taking Sample</button>
										<button class="btn btn-success" type="button" name="search_taking" onclick="cari_taking_sampling();"><i class="fa fa-search"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>

		<div class="row margin-top-10" id="view_taking_sampling">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-equalizer font-red-sunglo"></i>
						</div>
						<div class="tools">
							<a href="javascript:;" onclick="tutup_taking_sampling();"><i class="fa fa-times"></i></a>
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
												<label>Date Taken Sample</label>
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
												<label>Sampling Location</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_location" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Sampling Procedure</label>
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
												<label>Environment Condition</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="environment_condition" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Humidity</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>&nbsp;</label>
												<div class="md-radio-inline">
													<div class="md-radio">
														<input type="radio" id="radio14" name="radio2" class="md-radiobtn">
														<label for="radio14">
														<span></span>
														<span class="check"></span>
														<span class="box"></span>
														Bright </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="radio15" name="radio2" class="md-radiobtn">
														<label for="radio15">
														<span></span>
														<span class="check"></span>
														<span class="box"></span>
														Cloudy </label>
													</div>
													<div class="md-radio">
														<input type="radio" id="radio16" name="radio2" class="md-radiobtn">
														<label for="radio16">
														<span></span>
														<span class="check"></span>
														<span class="box"></span>
														Rain </label>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<div class="table-responsive">
													<table class="table table-bordered">
														<thead>
															<tr class="success">
																<th style="text-align: center;">No</th>
																<th>Question</th>
																<th>Answer</th>
															</tr>
														</thead>
														<tbody style="vertical-align: middle;">
															<tr>
																<td style="text-align: center;">1</td>
																<td>Whether the seed group corresponds with the information on the record sheet of the seed sampling plan:</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td></td>
																<td style="vertical-align: middle;">a) Seed Lot Volume</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio141" name="answer1a" class="md-radiobtn">
																			<label for="radio141">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio142" name="answer1a" class="md-radiobtn">
																			<label for="radio142">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="text-align: center;"></td>
																<td style="vertical-align: middle;">b) Plants Type</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio143" name="answer1b" class="md-radiobtn">
																			<label for="radio143">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio144" name="answer1b" class="md-radiobtn">
																			<label for="radio144">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="text-align: center;"></td>
																<td style="vertical-align: middle;">c) Amount of places?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio145" name="answer1c" class="md-radiobtn">
																			<label for="radio145">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio146" name="answer1c" class="md-radiobtn">
																			<label for="radio146">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">2</td>
																<td style="vertical-align: middle;">Does the volume of seed lot not exceed the maximum volume of seed lot?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio147" name="answer2" class="md-radiobtn">
																			<label for="radio147">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio148" name="answer2" class="md-radiobtn">
																			<label for="radio148">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">3</td>
																<td style="vertical-align: middle;">Is the seed lot separated from other seeds?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio149" name="answer3" class="md-radiobtn">
																			<label for="radio149">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1410" name="answer3" class="md-radiobtn">
																			<label for="radio1410">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">4</td>
																<td style="vertical-align: middle;">Is the same container type for all seed lots?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1411" name="answer4" class="md-radiobtn">
																			<label for="radio1411">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1412" name="answer4" class="md-radiobtn">
																			<label for="radio1412">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">5</td>
																<td style="vertical-align: middle;">Are there no physical indication of heterogeneity?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1413" name="answer5" class="md-radiobtn">
																			<label for="radio1413">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1414" name="answer5" class="md-radiobtn">
																			<label for="radio1414">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">6</td>
																<td style="vertical-align: middle;">Do all the lot seeds get the same opportunity to take for example?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1415" name="answer6" class="md-radiobtn">
																			<label for="radio1415">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1416" name="answer6" class="md-radiobtn">
																			<label for="radio1416">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">7</td>
																<td style="vertical-align: middle;">Is the seed lot labeled?</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td style="text-align: center;"></td>
																<td style="vertical-align: middle;">a) Is the information on the label the same as that given on the recording of the seed sampling plan?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1417" name="answer7a" class="md-radiobtn">
																			<label for="radio1417">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1418" name="answer7a" class="md-radiobtn">
																			<label for="radio1418">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="text-align: center;"></td>
																<td style="vertical-align: middle;">b) Does it have a unique identification?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1419" name="answer7b" class="md-radiobtn">
																			<label for="radio1419">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1420" name="answer7b" class="md-radiobtn">
																			<label for="radio1420">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="text-align: center;"></td>
																<td style="vertical-align: middle;">c) Is the seed lot labeled?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1421" name="answer7c" class="md-radiobtn">
																			<label for="radio1421">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1422" name="answer7c" class="md-radiobtn">
																			<label for="radio1422">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">8</td>
																<td style="vertical-align: middle;">Is the seed lot ready to be sealed?</td>
																<td>&nbsp;</td>
															</tr>
															<tr>
																<td style="text-align: center;"></td>
																<td style="vertical-align: middle;">a) Is the seal feasible and appropriate?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1423" name="answer8a" class="md-radiobtn">
																			<label for="radio1423">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1424" name="answer8a" class="md-radiobtn">
																			<label for="radio1424">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">9</td>
																<td style="vertical-align: middle;">Are there any seals and tools available to cover the hole in the container after sampling?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1425" name="answer9" class="md-radiobtn">
																			<label for="radio1425">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1426" name="answer9" class="md-radiobtn">
																			<label for="radio1426">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td style="vertical-align: middle; text-align: center;">10</td>
																<td style="vertical-align: middle;">What are commonly available sampling tools?</td>
																<td>
																	<div class="md-radio-inline">
																		<div class="md-radio">
																			<input type="radio" id="radio1427" name="answer10" class="md-radiobtn">
																			<label for="radio1427">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			Yes </label>
																		</div>
																		<div class="md-radio">
																			<input type="radio" id="radio1428" name="answer10" class="md-radiobtn">
																			<label for="radio1428">
																			<span></span>
																			<span class="check"></span>
																			<span class="box"></span>
																			No </label>
																		</div>
																	</div>
																</td>
															</tr>
															<tr>
																<td colspan="3">If one of question except point 1C, because because it comes from autosampler the answer of point 7 and 8) is No, so sampling cannot be executed and must be confirmed to sample owner</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-4">
												<label>Sampling By</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Note</label>
												<textarea class="form-control" name="note"></textarea>
											</div>
											<div class="col-md-4">
												<label>Conclussion</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="conclussion" class="form-control" value="">
												</div>
											</div>
										</div>
									</div>
									<div class="form-actions pull-right">
										<div class="row">
											<div class="col-md-12">
												<button class="btn btn-success" type="button"><i class="fa fa-send"></i> Update</button>
												<button class="btn btn-primary" type="button"><i class="fa fa-send"></i> Save</button>
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

		<div class="row margin-top-10" id="view_det_taking_sampling">
			<div class="col-md-12">
				<div class="portlet light bordered">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-equalizer font-red-sunglo"></i>
							<span class="caption-subject font-red-sunglo bold uppercase">DETAIL PLANING SAMPLING</span>
						</div>
						<div class="tools">
							<a href="javascript:;" onclick="tutup_det_taking_sampling();"><i class="fa fa-times"></i></a>
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
												<label>Batch Number</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="date_taken" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Code</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="batch_number" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Material Description</label>
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
												<label>Crop</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="material_group" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Seed Class</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_location" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Variety / Hybrid</label>
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
												<label>Material Group</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="environment_condition" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Field Rating</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="humidity" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Storage location</label>
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
												<label>Status Process</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Capasity Container</label>
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
												<label>Number of Container</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Harvest Date</label>
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
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Germination Method</label>
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
												<label>Date of Planning Sampling</label>
												<div class="input-group">
													<span class="input-group-addon">
													<i class="fa fa-pencil"></i>
													</span>
													<input type="text" name="sampling_by" class="form-control" value="">
												</div>
											</div>
											<div class="col-md-4">
												<label>Remarks</label>
												<textarea class="form-control"></textarea>
											</div>
											<div class="col-md-4">
												<label>Create by</label>
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
function tambah_data(){
	$('#sekalian_tambah').show(500);
}
function tutup(){
	$('#sekalian_tambah').hide(500);
}
function import_data(){
	$('#import_data_t').show(500);
}
function tutup_data(){
	$('#import_data_t').hide(500);
}

function klik_taking_sampling(){
	$('#view_taking_sampling').show(500);
	$('.view_data').hide(500);
}

function tutup_taking_sampling(){
	$('#view_taking_sampling').hide(500);
	$('.view_data').show(500);
}

function cari_taking_sampling(){
	$('#view_det_taking_sampling').show(500);
	$('.view_data').hide(500);
}

function tutup_det_taking_sampling(){
	$('#view_det_taking_sampling').hide(500);
	$('.view_data').show(500);
}
</script>