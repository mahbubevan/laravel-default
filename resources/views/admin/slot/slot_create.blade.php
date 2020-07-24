@extends('admin.layouts.app')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Slots</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Slot <small>Create</small></h2>
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
                    <h2>Example: Vertical Style</h2>
                    <!-- Tabs -->
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-11">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                      </ul>

                      <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.slot.store')}}">
                          @csrf
                      <div id="step-11">
                        <h2 class="StepTitle">Step 1 Content</h2>
                          <span class="section">Start Time</span>
                        <div class="form-group row">
                            <input type="time" class="form-control col-md-6" name="start_time">
                        </div>
                      </div>

                      <div id="step-22">
                            <h2 class="StepTitle">Step 1 Content</h2>
                            <span class="section">End Time</span>

                            <div class="form-group row">
                                <input type="time" class="form-control col-md-6" name="end_time">
                            </div>
                            <div class="form-group row pull-right">
                                <button class="btn btn-md btn-outline-success" type="submit">Add</button>
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
