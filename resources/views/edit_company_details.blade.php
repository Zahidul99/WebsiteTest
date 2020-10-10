@extends('admin_layout')

@section('admin_content')

               <ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Edit Service</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<p class="alert-success">
							<?php
                             $messege=Session::get('messege');
                             if ($messege) {
                             	echo $messege;
                             	Session::put('messege',null);
                             }
							?>
							
						</p>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{url('/update-service',$all_service_info->service_id)}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
						  <fieldset>

							<div class="control-group">
                            <div class="control-group">
							  <label class="control-label" for="date01">Clients</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="client_no" value="{{$all_service_info->client_no}}">
							  </div>
							</div>
                             
                            <div class="control-group">
							  <label class="control-label" for="date01">Projects</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="project_no" value="{{$all_service_info->project_no}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Hours of Support</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="support_time" value="{{$all_service_info->support_time}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Hard Workers</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="hard_worker" value="{{$all_service_info->hard_worker}}">
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Service</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection