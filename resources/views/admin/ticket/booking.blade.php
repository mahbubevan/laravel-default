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
                    <h2>Total<small>Bookings -- {{$count}} </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.ticket.create')}}">Create New</a>
                            <a class="dropdown-item" onclick="return confirm('Are you sure to perform ?')" href="{{route('admin.ticket.destroy')}}">Delete All</a>
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
                            <th class="column-title">Name</th>
                            <th class="column-title">Phone</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Quantity</th>
                            <th class="column-title">Vouchar ID</th>
                            <th class="column-title">Seat Numbers</th>
                            <th class="column-title">Category</th>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td> {{$booking->id}} </td>
                                    <td> {{$booking->name}} </td>
                                    <td> {{$booking->phone}} </td>
                                    <td> {{$booking->email}} </td>
                                    <td> {{$booking->quantity}} </td>
                                    <td> {{$booking->vouchar_id}} </td>
                                    <td> {{$booking->seat_numbers}} </td>
                                    <td> {{$booking->category->title}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div>
                          {{-- {{$tickets->links()}} --}}
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
