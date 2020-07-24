@extends('admin.layouts.app')

@section('content')
    <div class="right_col" role="main">
        <div class="col-md-12 shadow-lg p-3 mb-5 bg-white rounded">
            <div class="title mb-3">
                    <h2 class=""> {{$blog->title}} </h2>
                </div>
                <div class="img mt-3">
                    <img src="{{asset('assets/uploads/blog/'.$blog->img)}}" class="img-fluid" width="500px" height="500px" alt="">
                </div>
                <div class="details mt-5 mb-5">
                    {!! $blog->details !!}
                </div>

            <div class="col-md-12 mt-5">
                <a href="{{route('admin.blog.index')}}" class="btn btn-md btn-info">View All</a>
            </div>
        </div>
    </div>
@endsection
