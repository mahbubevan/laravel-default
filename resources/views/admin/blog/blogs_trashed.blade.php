@extends('admin.layouts.app')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Trashed<small>Speakers</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.speaker.create')}}">Create New</a>
                            <a class="dropdown-item" href="{{route('admin.speaker.trashed')}}">View Trashed</a>
                          </div>
                      </li>
                      {{-- <li><a class="close-link"><i class="fa fa-close"></i></a> --}}
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    {{-- <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p> --}}

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th scope="col">Title</th>
                            <th scope="col" width="50%">Details</th>
                            <th scope="col">Image</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td> {{$blog->id}} </td>
                                <td> {{$blog->title}} </td>
                                <td> {!! substr($blog->details,0,500)!!} </td>
                                <td>
                                    <img src="{{asset('assets/uploads/blog/'.$blog->img)}}" width="300px" height="300px" class="img-fluid" alt="blog-img">
                                </td>
                                <td>
                                    <span>
                                        <a href="{{route('admin.blog.retrieve',$blog->id)}}" class="btn btn-sm btn-warning" title="Resotre Item" >
                                            <i class="fas fa-trash-restore"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="{{route('admin.blog.permanent.delete',$blog->id)}}" class="btn btn-sm btn-danger" title="Permanent Delete" onclick="return confirm('Are you sure to perform this deletion???')" >
                                            <i class="fas fa-minus-circle"></i>
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
