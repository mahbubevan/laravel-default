@extends('frontend.layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title"> buy ticket</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    buy ticket
                </li>
            </ul>
        </div>
    </div>
</section>

<section class="become-sponsor-section buy-ticket padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-lg-0 mb-5">
                <div class="become-sponsor-article">
                    <h3 class="title">{{$category->title??''}} <span>${{$category->price??''}}</span></h3>
                    <p class="main-para">{{$category->details??''}}</p>
                    <h4 class="sub-title">benifites of {{$category->title}} package</h4>
                    <p></p>
                    <ul>
                        @foreach ($category->features as $feature)
                            <li>{{$feature->item??''}}</li>
                        @endforeach
                    </ul>
                    <h4 class="sub-title">{{$category->title??''}} pack Features</h4>
                    <p class="last-para">{{$category->details2}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="application-form-area">
                    <h5 class="title">buy ticket</h5>
                    <form class="application-form" action="{{route('ticket.book')}}" method="POST">
                        @csrf
                        <input type="hidden" name="category" value="{{$category->id}}">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <input type="number" name="quantity" placeholder="Quantity" min="1">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit Now">
                        </div>
                        <div class="form-group check-input d-flex flex-wrap align-items-center">
                            <input name="agree" type="checkbox" id="check-ticket">
                            <label for="check-ticket">I Accept The</label> <a href="#0">Terms & Policy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection