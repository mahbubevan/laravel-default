@extends('admin.layouts.app')

@section('content')
    <div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Edit Speaker</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
							<div class="x_panel">
								<div class="x_title">
									<h2>Update <small></small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										{{-- <li><a class="close-link"><i class="fa fa-close"></i></a> --}}
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data" method="POST" action="{{route('admin.speaker.update',$speaker->id)}}">
                                        @csrf
                                        @method('PUT')
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Photo<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
                                                <img src="{{asset('/assets/uploads/speaker/'.$speaker->img)}}" height="150px" width="150px" class="img-fluid img-thumbnail" alt="">
												<input type="file" name="img" >
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name<span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="first-name" value="{{$speaker->name}}" name="name" required="required" class="form-control ">
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Bio <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" value="{{$speaker->bio}}" name="bio" required="required" class="form-control">
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Designation</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" value="{{$speaker->designation}}" type="text" name="designation">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button type="submit" class="btn btn-outline-success">Update</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
                    </div>
                </div>
    </div>
@endsection
