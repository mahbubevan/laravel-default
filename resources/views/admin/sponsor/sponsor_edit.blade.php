@extends('admin.layouts.app')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sponsor</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sponsor <small>Create</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>



                    <!-- Smart Wizard -->


								<div class="x_content">
									<br />
									<form method="POST" enctype="multipart/form-data" action="{{route('admin.sponsor.update',$sponsor->id)}}" class="form-horizontal form-label-left">
                                        @csrf
                                        @method('PUT')
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Select Category</label>
											<div class="col-md-9 col-sm-9 ">
												<select name="category" class="form-control">
                                                    <option value="{{$sponsor->sponsor_category->id}}">{{$sponsor->sponsor_category->title}}</option>
													@foreach ($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                                    @endforeach
												</select>
											</div>
										</div>
                                        <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Company Name</label>
											<div class="col-md-4 col-sm-4">
												<input type="text" name="name" value="{{$sponsor->name}}" class="form-control">
											</div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label col-md-3 col-sm-3 ">Company Logo</label>
											<div class="col-md-4 col-sm-4">
												<img src="{{asset('assets/img/uploads/sponsor/'.$sponsor->logo)}}" alt="" class="img-fluid img-thumbnail" width="150px" height="150px">
											</div>
                                        </div>
                                        <div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Upload New</label>
											<div class="col-md-4 col-sm-4">
												<input type="file" name="logo">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
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

@push('external-js')
        <script>
    //         $(document).ready(function(){
    //         $('#upload_form').on('submit', function(event){
    //             // console.log(new FormData(this)['file'])
    //             event.preventDefault();
    //             $.ajax({
    //             url:"{{ route('admin.speaker.store') }}",
    //             method:"POST",
    //             data:new FormData(this),
    //             dataType:'JSON',
    //             contentType: false,
    //             cache: false,
    //             processData: false,
    //             success:function(data){
    //                 // console.log(data)
    //                 $('#message').css('display', 'block');
    //                 $('#message').html(data.data);
    //                 $('#message').addClass('text-success dispaly-4');
    //                 $('#uploaded_image').html(data.uploaded_image);
    //             },
    //             error:function(error){
    //                 // console.log(error)
    //                 $('#message').css('display', 'block');
    //                 $('#message').html(error.name);
    //                 $('#message').addClass('text-danger');
    //             }
    //         })
    //     });
    // });
</script>
@endpush
