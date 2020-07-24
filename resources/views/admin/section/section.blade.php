@extends('admin.layouts.app')

@section('content')
<div class="right_col" role="main">
    <div class="p-5 m-5">
            <h4>Select Sections To Modify</h4>
            <select name="section" class="sec form-control">
                <option value="banner">Banner Section</option>
                <option value="about">About Section</option>
                <option value="about_overview">About Overview Section</option>
                <option value="speaker">Speaker Section</option>
                <option value="schedule">Schedule Section</option>
                <option value="ticket">Ticket Section</option>
                <option value="sponsor">Sponsor Section</option>
                <option value="blog">Blog Section</option>
            </select>
        </div>

            <div class="container-fluid">
        <section id="banner">
            <h5>Banner Section</h5>
        <div class="row">
            <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
                <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="banner" value="banner">

                    <div class="form-group">
                      <label>Set Image</label>
                      <div class="mb-2">
                          <img src="{{asset($banner->img??'')}}" width="200px" height="200px" alt="banner image" class="img-fluid">
                      </div>
                        <input type="hidden" name="img_update" value="{{$banner->img??''}}">
                        <input type="file" name="img">
                      <small class="form-text text-muted">Set Image</small>
                    </div>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" value="{{$banner->title??''}}" name="title" class="form-control" placeholder="Enter Title">
                      <small class="form-text text-muted">Set Website Banner Title</small>
                    </div>
                    <div class="form-group">
                      <label>Sub Title</label>
                      <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub Title" value="{{$banner->subtitle??''}}">
                      <small class="form-text text-muted">Set Website Banner Sub Title</small>
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea type="text" name="paragraph" rows="6" class="form-control" placeholder="Details">{{$banner->paragraph??''}}</textarea>
                        <small class="form-text text-muted">Set Website Banner Details</small>
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </section>

       <section id="about">
        <h5>About Section</h5>
        <div class="row">
            <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
                <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="about" value="about">
                    <div class="form-group">
                        <label>Set Image</label>
                        <div class="mb-2">
                            <img src="{{asset($about->img??'')}}" alt="about image" width="200px" height="200px" class="img-fluid">
                        </div>
                        <input type="hidden" name="img_update" value="{{$about->img??''}}">
                        <input type="file" name="img">
                        <small class="form-text text-muted">Set About Image</small>
                      </div>

                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" value="{{$about->title??''}}" class="form-control" placeholder="Enter Title">
                      <small class="form-text text-muted">Set About Title</small>
                    </div>
                    <div class="form-group">
                      <label>Sub Title</label>
                      <input type="text" value="{{$about->subtitle??''}}" name="subtitle" class="form-control" placeholder="Enter Sub Title"/>
                      <small class="form-text text-muted">Set Website Banner Sub Title</small>
                    </div>
                    <div class="form-group">
                        <label>Details</label>
                        <textarea type="text" name="paragraph1" rows="6" class="form-control" placeholder="Details 1">{{$about->paragraph1??''}}</textarea>
                        <small class="form-text text-muted">Set Website About Details 1</small>
                      </div>
                      <div class="form-group">
                        <label>Details 2</label>
                        <textarea type="text" name="paragraph2" rows="6" class="form-control" placeholder="Details 1">{{$about->paragraph2??''}}</textarea>
                        <small class="form-text text-muted">Set Website About Details 2</small>
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
       </section>

        <section id="about_overview">
            <h5>About Overview Section</h5>
        <div class="row">
            <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
                <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="about_overview" value="about_overview">
                    <div class="form-group">
                        <label>Set Image</label>
                        <div class="mb-2">
                            <img src="{{asset($about_overview->img??'')}}" width="200px" height="200px" alt="about image" class="img-fluid">
                        </div>
                            <input type="hidden" name="img_update" value="{{$about_overview->img??''}}">
                        <input type="file" name="img">
                        <small class="form-text text-muted">Set Image</small>
                      </div>

                    <h6><b><u>Our Vission</u></b></h6>
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" class="form-control" value="{{$about_overview->title??''}}" placeholder="Enter Title">
                      <small class="form-text text-muted">Set About Title</small>
                    </div>
                    <div class="form-group">
                        <label>Details 1</label>
                        <textarea type="text" name="paragraph1" rows="6" class="form-control" placeholder="Details 1">{{$about_overview->paragraph1??''}}"</textarea>
                        <small class="form-text text-muted">Set Our Vission Details 1</small>
                    </div>
                    <div class="form-group">
                        <label>List Item 1</label>
                        <input type="text" value="{{$about_overview->l1??''}}" name="l1" class="form-control" placeholder="Enter List">
                        <small class="form-text text-muted">Set List Item 1</small>
                    </div>
                    <div class="form-group">
                        <label>List Item 2</label>
                        <input type="text" value="{{$about_overview->l2??''}}" name="l2" class="form-control" placeholder="Enter List">
                        <small class="form-text text-muted">Set List Item 2</small>
                    </div>

                    <h6> <b> <u>Our Mission</u> </b> </h6>
                      <div class="form-group">
                        <label>Heading</label>
                        <input type="text" value="{{$about_overview->heading??''}}" name="heading" class="form-control" placeholder="Heading"/>
                        <small class="form-text text-muted">Set Heading</small>
                      </div>
                      <div class="form-group">
                        <label>Mission Details 1</label>
                        <textarea type="text" name="paragraph2" rows="6" class="form-control" placeholder="Details 1">{{$about_overview->paragraph2??''}}"</textarea>
                        <small class="form-text text-muted">Set Details</small>
                      </div>
                      <div class="form-group">
                        <label>Mission Details 2</label>
                        <textarea type="text" name="paragraph3" rows="6" class="form-control" placeholder="Details 2">{{$about_overview->paragraph3??''}}"</textarea>
                        <small class="form-text text-muted">Set Details 2</small>
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </section>

        <section id="ticket">
            <h5>Ticket Sections</h5>
        <div class="row">
            <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
                <form action="{{route('admin.section.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="ticket" value="ticket">
                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" value="{{$ticket->title??''}}" class="form-control" placeholder="Enter Title">
                      <small class="form-text text-muted">Set Ticket Section Title</small>
                    </div>
                    <div class="form-group">
                      <label>Sub Title</label>
                      <input type="text" name="subtitle" value="{{$ticket->subtitle??''}}" class="form-control" placeholder="Enter Sub Title">
                      <small class="form-text text-muted">Set Ticket Section Sub Title</small>
                    </div>
                    <div class="form-group">
                        <label>Banner Title</label>
                        <input type="text" value="{{$ticket->banner_title??''}}" name="banner_title" class="form-control" placeholder="Banner title" />
                        <small class="form-text text-muted">Set Ticket Section Banner Title</small>
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </section>

        <section id="sponsor">
            <h5>Sponsor Sections</h5>
        <div class="row">
            <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
                <form action="{{route('admin.section.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="sponsor" value="sponsor">

                    <div class="form-group">
                      <label>Title</label>
                      <input type="text" name="title" value="{{$sponsor->title??''}}" class="form-control" placeholder="Enter Title">
                      <small class="form-text text-muted">Set Sponsor Section Title</small>
                    </div>
                    <div class="form-group">
                      <label>Sub Title</label>
                      <input type="text" name="subtitle" value="{{$sponsor->subtitle??''}}" class="form-control" placeholder="Enter Title">
                      <small class="form-text text-muted">Set Sponsor Section Title</small>
                    </div>
                    <hr/>
                    <h5>Become Sponsor Page</h5>
                    <div class="form-group">
                      <label>Title 1</label>
                      <input type="text" name="title1" value="{{$sponsor->title1??''}}" class="form-control" placeholder="Enter Title">
                      <small class="form-text text-muted">Set Sponsor Section Title</small>
                    </div>
                    <div class="form-group">
                        <label>Title 1 Details</label>
                        <textarea type="text" name="details" rows="6" class="form-control" placeholder="Details 1">{{$sponsor->details??''}}</textarea>
                        <small class="form-text text-muted">Set Heading</small>
                    </div>

                    <div class="form-group">
                        <label>Title 2</label>
                        <input type="text" name="title2" value="{{$sponsor->title2??''}}" class="form-control" placeholder="Enter Title">
                        <small class="form-text text-muted">Set Sponsor Section Title</small>
                      </div>
                      <div class="form-group">
                          <label>Title 2 Details</label>
                          <textarea type="text" name="details2" rows="6" class="form-control" placeholder="Details 1">{{$sponsor->details2??''}}</textarea>
                          <small class="form-text text-muted">Set Heading</small>
                      </div>

                      <div class="form-group">
                        <label>Title 3</label>
                        <input type="text" name="title3" value="{{$sponsor->title3??''}}" class="form-control" placeholder="Enter Title">
                        <small class="form-text text-muted">Set Sponsor Section Title</small>
                      </div>
                      <div class="form-group">
                          <label>Title 3 Details</label>
                          <textarea type="text" name="details3" rows="6" class="form-control" placeholder="Details 1">{{$sponsor->details3??''}}</textarea>
                          <small class="form-text text-muted">Set Heading</small>
                      </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
        </section>

      <section id="speaker">
          <h5>Speaker Section</h5>
      <div class="row">
          <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
              <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="speaker" value="speaker">
                  <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{$speaker->title??''}}" name="title" class="form-control" placeholder="Enter Title">
                    <small class="form-text text-muted">Set Website Banner Title</small>
                  </div>
                  <div class="form-group">
                    <label>Sub Title</label>
                    <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub Title" value="{{$speaker->subtitle??''}}">
                    <small class="form-text text-muted">Set Website Banner Sub Title</small>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
          </div>
      </div>
      </section>
      <section id="schedule">
        <h5>Schedule Section</h5>
    <div class="row">
        <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
            <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="schedule" value="schedule">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" value="{{$schedule->title??''}}" name="title" class="form-control" placeholder="Enter Title">
                  <small class="form-text text-muted">Set Website Banner Title</small>
                </div>
                <div class="form-group">
                  <label>Sub Title</label>
                  <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub Title" value="{{$schedule->subtitle??''}}">
                  <small class="form-text text-muted">Set Website Banner Sub Title</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
    </section>

    <section id="blog">
      <h5>Blog Section</h5>
  <div class="row">
      <div class="col-md-12 shadow-lg p-5 mb-5 bg-white rounded">
          <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="blog" value="blog">
              <div class="form-group">
                <label>Title</label>
                <input type="text" value="{{$blog->title??''}}" name="title" class="form-control" placeholder="Enter Title">
                <small class="form-text text-muted">Set Website Banner Title</small>
              </div>
              <div class="form-group">
                <label>Sub Title</label>
                <input type="text" name="subtitle" class="form-control" placeholder="Enter Sub Title" value="{{$blog->subtitle??''}}">
                <small class="form-text text-muted">Set Website Banner Sub Title</small>
              </div>

              <div class="form-group">
                <label>Set Limit</label>
                <input type="number" name="limit" class="form-control col-md-4" value="{{$blog->limit??''}}">
                <small class="form-text text-muted">Limits for showing blog item in front page</small>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
      </div>
  </div>
  </section>



    </div>
</div>
@endsection

@push('external-js')
    <script>
        $(document).ready(function(){
                    $("#banner").show()
                    $("#about").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#speaker").hide()
                    $("#schedule").hide()
                    $("#blog").hide()

            $(".sec").change(function(){

                if ($(this).val()=='banner') {
                    $("#banner").show()
                    $("#about").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").hide()
                } else if($(this).val()=='about') {
                    $("#about").show()
                    $("#banner").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").hide()
                }else if($(this).val()=='about_overview') {
                    $("#about").hide()
                    $("#banner").hide()
                    $("#about_overview").show()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").hide()
                }else if($(this).val()=='sponsor') {
                    $("#about").hide()
                    $("#banner").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").show()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").hide()
                }else if($(this).val()=='ticket') {
                    $("#about").hide()
                    $("#banner").hide()
                    $("#about_overview").hide()
                    $("#ticket").show()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").hide()
                }else if($(this).val()=='blog') {
                    $("#about").hide()
                    $("#banner").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").show()
                    $("#schedule").hide()
                    $("#speaker").hide()
                }else if($(this).val()=='speaker') {
                    $("#about").hide()
                    $("#banner").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").show()
                }else if($(this).val()=='schedule') {
                    $("#about").hide()
                    $("#banner").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").show()
                    $("#speaker").hide()
                }else{
                    $("#banner").show()
                    $("#about").hide()
                    $("#about_overview").hide()
                    $("#ticket").hide()
                    $("#sponsor").hide()
                    $("#blog").hide()
                    $("#schedule").hide()
                    $("#speaker").hide()
                }

            })
        });
    </script>
@endpush
