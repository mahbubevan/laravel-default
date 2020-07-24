@extends('frontend.layouts.app')

@section('content')
<section class="page-header">
    <div class="container">
        <div class="page-header-content">
            <h2 class="title"> become sponsor</h2>
            <ul class="breadcrumb">
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>
                    become sponsor
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="become-sponsor-section padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-lg-0 mb-5">
                <div class="become-sponsor-article">
                    <h3 class="title">{{$settings->title1}}</h3>
                    <p class="main-para">{{$settings->details}}</p>
                    <h4 class="sub-title">{{$settings->title2}}</h4>
                    <p>{{$settings->details2}}</p>
                    {{-- <ol>
                        <li> leifend fringilla quiselit </li>
                        <li> aliquam dolor tortor phasellu </li>
                        <li>dignissim semper consequat </li>
                        <li>curabitur in mi sed eget, </li>
                        <li>Tempora tellus aliquam</li>
                        <li>exercitationem rhoncus </li>
                    </ol> --}}
                    <h4 class="sub-title">{{$settings->title3}}</h4>
                    <p class="last-para">{{$settings->details3}}</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="application-form-area">
                    <h5 class="title">Application Form</h5>
                    <form class="application-form" method="POST" action="{{route('sponsor.request')}}">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Full Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Company Name" name="company">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Website" name="website">
                        </div>
                        <div class="form-group">
                            <select id="select-cata" name="category">
                                @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection