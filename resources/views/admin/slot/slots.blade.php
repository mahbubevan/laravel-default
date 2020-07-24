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
                    <h2>Slots<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{route('admin.slot.create')}}">Create New</a>
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
                            <th class="column-title">Speaker </th>
                            <th class="column-title">Topic </th>
                            <th class="column-title">Photo </th>
                            <th class="column-title">Day </th>
                            <th class="column-title">Day Of Week</th>
                            <th class="column-title">Start Time </th>
                            <th class="column-title">End Time </th>
                            <th class="column-title">Status </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            @foreach ($slots as $slot)
                          <tr>
                              <td>{{$slot->id}}</td>
                              <td> {{$slot->topic->title??'N/A'}} </td>
                              <td> {{$slot->speaker->name??'N/A'}} </td>
                             <td>
                                 <img class="img-thumbnail ing-fluid" width="50px" height="50px" src="{{asset('/assets/uploads/speaker/'.@$slot->speaker->img)}}" alt="">
                            </td>
                            <td> {{$slot->day->day_of_week??'N/A'}} </td>
                            <td> {{$slot->day->date??'N/A'}} </td>
                            <td> {{$slot->start_time}} </td>
                            <td> {{$slot->end_time}} </td>
                            @if ($slot->status==\App\Slot::NOT_AVAILABLE)
                                <td>
                                    <span class="text-success">Booked</span>
                                </td>
                                @else
                                <td>
                                    <span class="text-warning">Free Slot</span>
                                </td>
                            @endif
                            <td>
                                <span>
                                    <a data-toggle="modal"
                                        data-target="#exampleModalCenter"
                                        data-start_time="{{$slot->start_time}}"
                                        data-end_time="{{$slot->end_time}}"
                                        data-id="{{$slot->id}}"
                                        class="slot_assign btn btn-sm btn-success"
                                        title="Assign To Speaker And Topics">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </span>
                                <span>
                                    <a href="{{route('admin.slot.delete',$slot->id)}}" onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger" title="Trash this slot">
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


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Assign This Slot</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="{{route('admin.slot.modal.update')}}" method="post">
          @csrf
          <input type="hidden" name="slot" id="slot">
      <div class="modal-body">
        <div class="form-group row">
            <label for="" class="form-control col-md-4">Select Speaker</label>
            <select name="speaker" class="form-control col-md-8">
                @foreach ($speakers as $speaker)
                    <option value="{{$speaker->id}}"> {{$speaker->name}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="" class="form-control col-md-4">Select Topic</label>
            <select name="topic" class="form-control col-md-8">
                @foreach ($topics as $topic)
                    <option value="{{$topic->id}}"> {{$topic->title}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="" class="form-control col-md-4">Select Day</label>
            <select name="day" class="form-control col-md-8">
                @foreach ($days as $day)
                    <option value="{{$day->id}}"> {{$day->day_of_week}} -- {{$day->date}} </option>
                @endforeach
            </select>
        </div>
        <div class="form-group row">
            <label for="" class="form-control col-md-4">Start Time</label>
            <input readonly class="form-control col-md-8" type="text" id="start_time"/>
        </div>
        <div class="form-group row">
            <label for="" class="form-control col-md-4">End Time</label>
            <input readonly class="form-control col-md-8" type="text" id="end_time"/>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-outline-primary">Assign</button>
      </div>
      </form>
    </div>
  </div>
</div>



@endsection

@push('external-js')
    <script>
        $(document).ready(function(){
            $(".slot_assign").click(function(){
                // console.log($(this).attr("data-id"))
                var slot = $(this).attr("data-id")
                var start_time = $(this).attr("data-start_time")
                var end_time = $(this).attr("data-end_time")
                // console.log(slot+" "+start_time" "+end_time" ")
                $("#slot").val(slot)
                $("#start_time").val(start_time)
                $("#end_time").val(end_time)
            });
        });
    </script>
@endpush
