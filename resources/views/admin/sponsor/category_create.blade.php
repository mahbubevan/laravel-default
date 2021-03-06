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
                    <h2>Category <small>Create</small></h2>
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
									<form method="POST" action="{{route('admin.sponsor.category.store')}}" class="form-horizontal form-label-left">
                                        @csrf
										<div class="form-group row">
											<label class="control-label col-md-3 col-sm-3 ">Title</label>
											<div class="col-md-9 col-sm-9 ">
                                                <input type="text" class="form-control" name="title">
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="form-group">
											<div class="col-md-9 col-sm-9  offset-md-3">
												<button type="submit" class="btn btn-success">Submit</button>
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
