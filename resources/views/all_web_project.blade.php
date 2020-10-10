@extends('admin_layout')

@section('admin_content')
       
       <ul class="breadcrumb">

		        <li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Projects</a></li>
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
								  <th>Project Id</th>
								  <th>Project Name</th>
                                  <th>Project Category</th>
                                  <th>Project Image</th>
                                  <th>Project Details Image1</th>
                                  <th>Project Details Image2</th>
                                  <th>Project Details Image3</th>
                                  <th>Category</th>
                                  <th>Client</th>
                                  <th>Project Date</th>
                                  <th>Project URL</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead> 
						  @foreach($allwproject as $v_wproject)  
						  <tbody>
							<tr>
								<td class="center">{{$v_wproject->wproject_id}}</td>
                                <td class="center">{{$v_wproject->wproject_name}}</td>
                                <td class="center">{{$v_wproject->wproject_category}}</td>
								
								<td class="center"><img src="{{URL::to($v_wproject->wproject_image)}}" style="height: 80px; width: 80px"></td>
                                <td class="center"><img src="{{URL::to($v_wproject->wproject_image1)}}" style="height: 80px; width: 80px"></td>
                                <td class="center"><img src="{{URL::to($v_wproject->wproject_image2)}}" style="height: 80px; width: 80px"></td>
                                <td class="center"><img src="{{URL::to($v_wproject->wproject_image3)}}" style="height: 80px; width: 80px"></td>

                                <td class="center">{{$v_wproject->wcategory}}</td>
                                <td class="center">{{$v_wproject->wclient}}</td>
                                <td class="center">{{$v_wproject->wproject_date}}</td>
                                <td class="center">{{$v_wproject->wproject_url}}</td>

								<td class="center">
									@if($v_wproject->status==1)
									<span class="label label-success">Active</span>
									@else
									<span class="label label-danger">Unactive</span>

									@endif
								</td>
								<td class="center">
									@if($v_wproject->status==1)			
                                	<a class="btn btn-danger" href="{{URL::to('/unactive-web-project/'.$v_wproject->wproject_id)}}">
										<i class="halflings-icon white thumbs-down"></i>  
									</a>
									@else
									   <a class="btn btn-success" href="{{URL::to('/active-web-project/'.$v_wproject->wproject_id)}}">
										<i class="halflings-icon white thumbs-up"></i>  
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit-web-project/'.$v_wproject->wproject_id)}}">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delete-web-project/'.$v_wproject->wproject_id)}}" id="delete">


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