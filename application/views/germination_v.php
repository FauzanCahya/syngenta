<div class="page-content">
	<div class="page-head">
		<!-- BEGIN PAGE TITLE -->
		<div class="page-title">
			<h1>PLANNING TESTING GERMINATION TEST</h1>
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
							<div class="form-group form-md-line-input">
								<input type="text" class="form-control" id="form_control_1" placeholder="Enter your crop">
								<label for="form_control_1">Crop</label>
								<span class="help-block">Input your name of crop...</span>
							</div>
							<div class="form-group form-md-line-input">
								<input type="text" class="form-control" id="form_control_1" placeholder="Enter your crop">
								<label for="form_control_1">SAP Code Crop</label>
								<span class="help-block">Input your name of crop...</span>
							</div>
							<div class="form-group form-md-line-input has-info">
								<select class="form-control" id="form_control_1">
									<option value=""></option>
									<option value="1">Active</option>
									<option value="2">Not Active</option>
								</select>
								<label for="form_control_1">Status</label>
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
										00004/PS/G/18
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
										&nbsp;
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
</div>