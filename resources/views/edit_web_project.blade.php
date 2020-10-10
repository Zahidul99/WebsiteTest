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
					<a href="#">Edit Web Project</a>
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
						<form class="form-horizontal" action="{{url('/update-web-project',$wproject_info->wproject_id)}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
						  <fieldset>

							<div class="control-group">
                            <div class="control-group">
							  <label class="control-label" for="date01">Project Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="wproject_name" value="{{$wproject_info->wproject_name}}">
							  </div>
							</div>
                             
                            <div class="control-group">
							  <label class="control-label" for="date01">Project Category</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="wproject_category" value="{{$wproject_info->wproject_category}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="fileInput">Project Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="wproject_image" id="fileInput" type="file">
                                <img src="{{URL::to($wproject_info->wproject_image)}}" style="height: 40px; width:40px;">
                                <input type="hidden" name="old_photo" value="{{$wproject_info->wproject_image}}">
							  </div>
							</div> 
                            <div class="control-group">
							  <label class="control-label" for="fileInput">Project Details Image1</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="wproject_image1" id="fileInput" type="file">
                                <img src="{{URL::to($wproject_info->wproject_image1)}}" style="height: 40px; width:40px;">
                                <input type="hidden" name="old_photo1" value="{{$wproject_info->wproject_image1}}">
							  </div>
							</div> 
                            <div class="control-group">
							  <label class="control-label" for="fileInput">Project Details Image2</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="wproject_image2" id="fileInput" type="file">
                                <img src="{{URL::to($wproject_info->wproject_image2)}}" style="height: 40px; width:40px;">
                                <input type="hidden" name="old_photo2" value="{{$wproject_info->wproject_image2}}">
							  </div>
							</div> 
                            <div class="control-group">
							  <label class="control-label" for="fileInput">Project Details Image3</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="wproject_image3" id="fileInput" type="file">
                                <img src="{{URL::to($wproject_info->wproject_image3)}}" style="height: 40px; width:40px;">
                                <input type="hidden" name="old_photo3" value="{{$wproject_info->wproject_image3}}">
							  </div>
							</div> 

                            <div class="control-group">
							  <label class="control-label" for="date01">Category</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="wcategory" value="{{$wproject_info->wcategory}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Client</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="wclient" value="{{$wproject_info->wclient}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Project Date</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="wproject_date" value="{{$wproject_info->wproject_date}}">
							  </div>
							</div>
                            <div class="control-group">
							  <label class="control-label" for="date01">Project URL</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="wproject_url" value="{{$wproject_info->wproject_url}}">
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