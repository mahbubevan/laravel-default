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
                    <h2>Available<small>Categories</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.ticket.category.create')}}">Create New</a>
                            <a class="dropdown-item" href="#">View Trashed</a>
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
                            <th class="column-title">TITLE</th>
                            <th class="column-title">ICON </th>
                            <th class="column-title">PRICE </th>
                            <th class="column-title">LIMIT</th>
                            <th class="column-title">DETAILS</th>
                            <th class="column-title">Features</th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td> {{$category->id}} </td>
                                    <td> {{$category->title}} </td>
                                    <td>
                                        <img src="{{asset('/assets/uploads/ticket/'.$category->img)}}"
                                            class="img-fluid img-thumbnail"
                                            width="100px"
                                            height="100px" alt="">
                                    </td>
                                    <td> {{$category->price}} </td>
                                    <td> {{$category->limit}} </td>
                                    <td> {!!$category->details!!} </td>
                                    <td>
                                        @foreach (json_decode($category->features, true) as $feature)
                                            <li>{{$feature}}</li>
                                        @endforeach
                                    </td>
                                    <td>
                                <span>
                                    <a href="{{route('admin.ticket.category.edit',$category->id)}}" class="btn btn-sm btn-success">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="{{route('admin.ticket.category.destroy',$category->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">
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
