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
					<a href="#">Edit Website Logo</a>
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
						<form class="form-horizontal" action="{{url('/update-logo',$logo_info->logo_id)}}" method="post" enctype="multipart/form-data">
							{{csrf_field()}}
						  <fieldset>

							<div class="control-group">
							
							<div class="control-group">
							  <label class="control-label" for="fileInput">Header Logo</label>
							  <div class="controls">
								<input class="input-file uniform_on" name="logo_image" id="fileInput" type="file">
                                <img src="{{URL::to($logo_info->logo_image)}}" style="height: 40px; width:40px;">
                                <input type="hidden" name="old_photo" value="{{$logo_info->logo_image}}">
							  </div>
							</div> 
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Logo</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->
@endsection