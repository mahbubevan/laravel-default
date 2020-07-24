@extends('admin.layouts.app')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>ADD NEW TOPIC</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create New <small></small></h2>
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
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- Smart Wizard -->
                   <div id="message"></div>

                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Step 1 Title</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Step 2 Description</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <form class="form-horizontal form-label-left" action="{{route('admin.topic.store')}}" method="POST">
                          @csrf
                      <div id="step-1">
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" name="title"  class="form-control">
                            </div>
                        </div>
                      </div>
                      <div id="step-2">
                        <h2 class="StepTitle">Step 2 Description</h2>
                             <div class="form-group row">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="bio">Description<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                <input type="text" id="bio" name="description"  class="form-control  ">
                                </div>
                            </div>
                            <div class="form-group row mt-5 pull-right">
                                 <button type="submit" class="btn btn-md btn-outline-success">Add New Topic</button>
                            </div>
                        </div>
                      </div>
                      </form>
                    </div>
                    <!-- End SmartWizard Content -->
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
