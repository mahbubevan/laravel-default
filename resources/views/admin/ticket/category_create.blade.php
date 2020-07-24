@extends('admin.layouts.app')

@section('content')
    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ticket Category</h3>
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
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

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
                        <li>
                          <a href="#step-33">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                      </ul>

                      <form class="form-horizontal form-label-left" method="POST" action="{{route('admin.ticket.category.store')}}" enctype="multipart/form-data">
                          @csrf
                      <div id="step-11">
                        <h2 class="StepTitle">Step 1 Content</h2>
                          <span class="section">Title Img & Details </span>
                          <div class="form-group row w-50">
                            <label for="" class="col-md-4">Title</label>
                            <input type="text" class="col-md-8" name="title">
                        </div>
                        <div class="form-group row">
                            <label for="" class="col-md-6">Image (PNG) </label>
                            <input type="file" class="col-md-6" name="img">
                        </div>
                         <div class="form-group row m-5">
                             <label for="" class="col-md-12 font-weight-bold">Details About This Category</label>
                                <textarea
                                class="nicEdit form-control col-md-12"
                                name="details" id=""
                                cols="300" rows="10"></textarea>
                            </div>
                      </div>
                      <div id="step-22">
                            <h2 class="StepTitle">Step 2 Content</h2>
                            <span class="section">Set Price & Limit</span>
                            <div class="form-group row w-75">
                                <label for="" class="col-md-3">Set Price</label>
                                <input type="text" class="col-md-4" name="price">
                            </div>
                            <div class="form-group row w-75">
                                <label for="" class="col-md-3">Set Limit</label>
                                <input type="text" class="col-md-4" name="limit">
                            </div>
                      </div>
                      <div id="step-33">
                            <h2 class="StepTitle">Step 3 Content</h2>
                            <span class="section">
                                Set Features
                                <span class="ml-3">
                                    <a href="#" id="feature-button" class="btn btn-sm btn-outline-success">Add New Features</a>
                                </span>
                            </span>
                            <div class="form-group row w-75">
                                <label for="" class="col-md-3">Item</label>
                                <input type="text" class="col-md-4" name="features[]">
                            </div>
                            <div id="custom"></div>

                            <div class="form-group row pull-right mt-5 mr-5">
                                <button class="btn btn-md btn-outline-success" type="submit">Create New</button>
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
<script src="{{asset('assets/js/nicEdit.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    bkLib.onDomLoaded(function() {
        $( ".nicEdit" ).each(function( index ) {
            $(this).attr("id","nicEditor"+index);
            new nicEditor({fullPanel : true}).panelInstance('nicEditor'+index,{hasPanel : true});
        });
    });
  </script>

  <script type="text/javascript">
    $(function(){
        var i =1;
        $("#feature-button").click(function(){
             i++;
            $("#custom").append(`<div id="item${i}" class="form-group row w-75 ">
                            <label for="" class="col-md-3">Item ${i}</label>
                            <input type="text" class="col-md-4" name="features[]">
                            <span class="ml-3">
                                <button type="button" name="remove" id="${i}" class="btn btn-sm btn-danger btn_remove">X</button>
                            </span>
                        </div>`)
        })

        $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $(`#item${button_id}`).remove()
      });

    });
  </script>
@endpush
