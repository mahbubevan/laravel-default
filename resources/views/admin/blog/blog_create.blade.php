@extends('admin.layouts.app')

@section('content')
<div class="right_col" role="main">
        <div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded">
            <h2 class="text-center">Write A New Blog</h2>

            <div class="row">
                <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row m-5">
                        <input type="text" class="form-control" name="title" placeholder="Title Here">
                    </div>
                    <div class="form-group row m-5">
                        <input type="file"  name="img">
                    </div>
                    <div class="form-group row m-5">
                        <textarea
                        class="nicEdit form-control"
                        name="post" id=""
                        cols="300" rows="10"></textarea>
                    </div>
                    <div class="form-group row pull-right mr-5">
                        <button type="submit" class="btn btn-outline-success btn-md">Create New</button>
                    </div>
                </form>
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
@endpush
