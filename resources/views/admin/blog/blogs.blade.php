@extends('admin.layouts.app')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            </div>
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 shadow-lg p-3 mb-5 bg-white rounded">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Blogs<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.blog.create')}}">Create New</a>
                            <a class="dropdown-item" href="{{route('admin.blog.trashed')}}">View Trashed</a>
                          </div>
                      </li>
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
                            <th class="column-title">Title </th>
                            <th class="column-title">Details </th>
                            <th class="column-title">Photo </th>
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
                                <td> {!! substr($blog->details,0,400)!!} </td>
                                <td>
                                    <img src="{{asset('assets/uploads/blog/'.$blog->img)}}" width="300px" height="300px" class="img-fluid" alt="blog-img">
                                </td>
                                <td>
                                    <span>
                                        <a href="{{route('admin.blog.show',$blog->id)}}" class="btn btn-sm btn-info">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="{{route('admin.blog.edit',$blog->id)}}" class="btn btn-sm btn-success">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </span>
                                    <span>
                                        <a href="{{route('admin.blog.destroy',$blog->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
                                            <i class="far fa-trash-alt"></i>
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
