@extends('frontend.layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title">Blog Details</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    Blog Details
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============ Blog Section Starts Here================== -->
<section class="blog-section padding-top padding-bottom">
    <div class="container">
        <div class="row align-items-start">
            <div class="col-lg-8">
                <article>
                    <div class="post-item style-two list-style">
                        <div class="post-content">
                            <h3 class="title">{{$blog->title}}</h3>
                            <ul class="meta-post">
                               
                                <li>
                                    By <a href="#0"> Admin</a>
                                </li>
                                <li>
                                    In <a href="#0"> Event</a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-thumb">
                            <img src="{{asset($blog->img)}}" alt="blog">
                            <ul class="blog-date">
                                <h2>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$blog->created_at)->format('d')}}</h2>
                                <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$blog->created_at)->format('F')}}</span>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p>{!!$blog->details !!}</p>
                        </div>
                    </div>    
                </article>
            </div>          
        </div>
    </div>
</section>
@endsection