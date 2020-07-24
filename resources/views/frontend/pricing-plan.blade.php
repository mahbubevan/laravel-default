@extends('frontend.layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title">pricing plan</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    pricing plan
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Page Header Section Ends Here================== -->

<!-- ============Ticket Section Starts Here================== -->
<section class="ticket-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header">
            <h2 class="title">get your ticket</h2>
            <p>a porttitor metus cupidatat nunc, luctus erat at. Amet class phasellus in eget sociosqu mi amet morbi
                taciti eu urna, mi nunc volutpat quis</p>
        </div>
        <div class="row mb-30-none justify-content-center">
            @foreach ($categories as $category)
            <div class="col-xl-4 col-md-6">
                <div class="ticket-item wow fadeInUp" data-wow-duration="1s">
                    <h3 class="title">{{$category->title}}</h3>
                    <div class="ticket-thumb">
                        <img src="{{asset($category->img)}}" alt="ticket">
                    </div>
                    <div class="ticket-content">
                        @foreach ($category->features as $feature)
                            <p>{{$feature->item}}</p>
                        @endforeach
                        <h3 class="sub-title">${{$category->price}}</h3>
                        <a href="{{route('ticket.buy',$category->id)}}" class="custom-button active">Buy Ticket</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection