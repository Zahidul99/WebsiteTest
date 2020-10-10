@extends('admin_layout')

@section('admin_content')
       
       <ul class="breadcrumb">

		        <li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Tables</a></li>
			</ul>
			<p class="alert-success">
              <?php
                          $messege=Session::get('messege');
                             if ($messege) {
                             	echo $messege;
                             	Session::put('messege',null);
                          }
                ?>
            </p>
			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Logo Id</th>
								  <th>Logo Image</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($logo as $v_logo)  
						  <tbody>
							<tr>
								<td class="center">{{$v_logo->logo_id}}</td>
								
								<td class="center"><img src="{{URL::to($v_logo->logo_image)}}" style="height: 80px; width: 80px"></td>

								<td class="center">
									@if($v_logo->status==1)
									<span class="label label-success">Active</span>
									@else
									<span class="label label-danger">Unactive</span>

									@endif
								</td>
								<td class="center">
									@if($v_logo->status==1)			
                                	<a class="btn btn-danger" href="{{URL::to('/unactive-logo/'.$v_logo->logo_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									   <a class="btn btn-success" href="{{URL::to('/active-logo/'.$v_logo->logo_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-logo/'.$v_logo->logo_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-logo/'.$v_logo->logo_id)}}" id="delete">


										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
							
								</td>
							</tr>
						
						</tbody>
			            	@endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
@endsection