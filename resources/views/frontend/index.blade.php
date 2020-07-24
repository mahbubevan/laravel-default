@extends('frontend.layouts.app')

@section('content')
     <!-- ============Banner Section Starts Here================== -->
 <section class="banner-section bg_img" data-background="{{asset($banner->img??'')}}">
    <div class="banner-shape-two"></div>
    <div class="banner-shape-one"></div>
    <div class="container">
        <div class="banner-content text-center">
            <div class="banner-header">
                <h1 class="title">{{$banner->title??''}} <span class="d-block w-100">{{$banner->subtitle??''}}</span></h1>
                <p>{{$banner->paragraph??''}}</p>
            </div>
            <ul class="banner-countdown">
                <li class="theme-style">
                    <h2 class="banner-countdown-title"><span class="days">00</span></h2>
                    <p class="days_text">days</p>
                </li>
                <li class="yellow-style">
                    <h2 class="banner-countdown-title"><span class="hours">00</span></h2>
                    <p class="hours_text">hours</p>
                </li>
                <li class="grey-style">
                    <h2 class="banner-countdown-title"><span class="minutes">00</span></h2>
                    <p class="minu_text">minutes</p>
                </li>
                <li class="skyblue-style">
                    <h2 class="banner-countdown-title"><span class="seconds">00</span></h2>
                    <p class="seco_text">seconds</p>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- ============Banner Section Ends Here================== -->

<!-- ============About Section Starts Here================== -->
<section class="about-section padding-top">
    <div class="about-overview-item padding-bottom">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-10">
                    <div class="about-overview-left wow fadeIn" data-wow-duration="1s">
                        <h2 class="title">{{$about->title??''}}</h2>
                        <h5 class="sub-title">{{$about->subtitle??''}}</h5>
                            <p>{{$about->paragraph1??''}}</p>
                            <p>{{$about->paragraph2??''}}</p>
                            <a href="{{route('ticket.view')}}" class="custom-button">get ticket</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-10">
                    <div class="about-overview-right wow fadeIn" data-wow-duration="1s">
                        <div class="shape">
                            <img src="{{asset($about->img??'')}}" alt="about">
                        </div>
                        <ul id="parallax01">
                            <li class="layer" data-depth="0.90">
                                <img src="{{asset('assets/frontend/images/parallax/parallax01.png')}}" alt="parallax">
                            </li>
                            <li class="layer" data-depth="0.20">
                                <img src="{{asset('assets/frontend/images/parallax/parallax02.png')}}" alt="parallax">
                            </li>
                            <li class="layer" data-depth="0.50">
                                <img src="{{asset('assets/frontend/images/parallax/parallax03.png')}}" alt="parallax">
                            </li>
                            <li class="layer" data-depth="0.40">
                                <img src="{{asset('assets/frontend/images/parallax/parallax04.png')}}" alt="parallax">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-overview-item padding-bottom">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center flex-row-reverse">
                <div class="col-xl-6 col-lg-10">
                    <div class="about-overview-left wow fadeIn" data-wow-duration="1s">
                        <h2 class="title">{{$about_overview->title??''}}</h2>
                        <div class="about-tab-wrapper tab">
                            <ul class="tab-menu common-menu">
                                <li>our vission</li>
                                <li>our mission</li>
                                <li>Testimonial</li>
                            </ul>
                            <div class="tab-area">
                                <div class="tab-item">
                                    <p>{{$about_overview->paragraph1??''}}</p>
                                     <ol>
                                        <li>{{$about_overview->l1??''}}</li>
                                        <li>{{$about_overview->l2??''}}</li>
                                    </ol>

                                </div>
                                <div class="tab-item">
                                    <h4 class="sub-title">
                                        {{$about_overview->heading??''}}
                                    </h4>
                                    <p>
                                        {{$about_overview->paragraph2??''}}
                                    </p>
                                    <p>{{$about_overview->paragraph3??''}}</p>
                                </div>

                                <div class="tab-item">
{{--
                                    <div class="blockquote-slider owl-carousel owl-theme">
                                        @foreach ($testimonials as $testimonial)
                                        <div class="item">

                                            <blockquote>
                                               {{$testimonial->quote??''}}
                                            </blockquote>
                                            <div class="blockquote-speaker d-flex">
                                                <div class="blockquote-speaker-thumb">
                                                    <img src="{{asset($testimonial->img??'')}}" alt="about">
                                                </div>
                                                <div class="blockquote-speaker-content">
                                                    <h6>{{$testimonial->name??''}}</h6>
                                                    <span>{{$testimonial->designation??''}}</span>
                                                </div>
                                            </div>

                                        </div>
                                        @endforeach
                                    </div> --}}

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-10">
                    <div class="about-overview-right wow fadeIn" data-wow-duration="1s">
                        <div class="shape"><img src="{{asset($about_overview->img??'')}}" alt="about"></div>
                        <ul id="parallax02">
                            <li class="layer" data-depth="0.90">
                                <img src="{{asset('assets/frontend/images/parallax/parallax01.png')}}" alt="parallax">
                            </li>
                            <li class="layer" data-depth="0.20">
                                <img src="{{asset('assets/frontend/images/parallax/parallax02.png')}}" alt="parallax">
                            </li>
                            <li class="layer" data-depth="0.50">
                                <img src="{{asset('assets/frontend/images/parallax/parallax03.png')}}" alt="parallax">
                            </li>
                            <li class="layer" data-depth="0.40">
                                <img src="{{asset('assets/frontend/images/parallax/parallax04.png')}}" alt="parallax">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="about-left-animation"><img src="{{asset('assets/frontend/images/parallax/parallax05.png')}}" alt="parallax"></div>
</section>
<!-- ============About Section Ends Here================== -->

<!-- ============Overview Section Starts Here================== -->
<section class="overview-section">
    <div class="container-fluid p-0">
        <div class="row flex-wrap-reverse">
            <div class="col-xl-6 p-0">
                <div class="overview-left padding-bottom padding-top">
                    <div class="left-content">
                        {{-- <div class="row m-0">
                            @foreach ($overviews as $overview)
                            <div class="col-md-6">
                                <div class="overview-item wow fadeInUp" data-wow-duration="1s">
                                    <div class="overview-header">
                                        <i class="{{$overview->icon}}"></i>
                                        <h4 class="title">{{$overview->title}}</h4>
                                    </div>
                                    <div class="overview-item-content">
                                        <p>{{$overview->p}}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-xl-6 p-0">
                {{-- <div class="overview-right h-100 bg_img" data-background="{{asset($overviews->first()->img??'')}}">
                    <img src="{{asset($overviews->first()->img??'')}}" alt="overview">
                </div> --}}
            </div>
        </div>
    </div>
</section>
<!-- ============Overview Section Ends Here================== -->

<!-- ============Speaker Section Starts Here================== -->
<section class="speaker-section padding-bottom padding-top">
    <div class="container-fluid">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            {{-- <h2 class="title">{{$speaker_section->title}}</h2>
            <p>{{$speaker_section->subtitle}}</p> --}}
        </div>
        <div class="speaker-area d-flex flex-wrap justify-content-center">
            @foreach ($speakers as $speaker)
            <div class="speaker-item wow fadeInUp" data-wow-duration="1s">
                <div class="speaker-inner">
                    <div class="speaker-content">
                        <h3 class="sub-title">
                            <a href="#0">{{$speaker->name}}</a>
                        </h3>
                        <span>{{$speaker->designation}}</span>
                    </div>
                    <div class="speaker-thumb">
                        <img src="{{asset('assets/uploads/speaker/'.$speaker->img)}}" alt="speaker">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ============Speaker Section Ends Here================== -->

<!-- ============Schedule Section Starts Here================== -->
<section class="schedule-section padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">{{$schedule_section->title??''}}</h2>
            <p>{{$schedule_section->subtitle??''}}</p>
        </div>
        <div class="schedule-area tab">
            <ul class="tab-menu">
                @foreach ($days as $day)
                    <li><span>{{$day->day_of_week}}</span>{{$day->date}}</li>
                @endforeach
            </ul>
            <div class="tab-area mb-30-none">
                    @foreach ($days as $day)
                    <div class="tab-item">
                        @foreach ($day->slots as $slot)
                            @if ($day->id == $slot->day_id)
                            <div class="schedule-item">
                                <div class="schedule-thumb">
                                    <a href="#0"><img src="{{asset($slot->speaker->img??'')}}" alt="schedule"></a>
                                </div>
                                <div class="schedule-content">
                                    <h4 class="title"><a href="#0">{{$slot->topic->title??''}}</a></h4>
                                    <p><a href="#0">{{$slot->speaker->name??''}}</a>at {{$slot->start_time}} - {{$slot->end_time}}</p>
                                    <p class="para">{{$slot->topic->description??''}}</p>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
</section>
<!-- ============Schedule Section Ends Here================== -->

<!-- ============Call in Ticket Section Starts Here================== -->
<section class="call-in-ticket padding-top padding-bottom bg_img" data-background="./assets/images/ticket/ticket-bg.jpg">
    <ul id="parallax03">
        <li class="layer" data-depth="0.40">
            <img src="{{asset('assets/frontend/images/parallax/parallax06.png')}}" alt="parallax">
        </li>
        <li class="layer" data-depth="0.40">
            <img src="{{asset('assets/frontend/images/parallax/parallax07.png')}}" alt="parallax">
        </li>
    </ul>
    <div class="container">
        <div class="call-in-area text-center">
            <div class="header-area">
                <h2 class="title">{{$ticket_section->banner_title??''}}</h2>
            </div>
            <a href="{{route('ticket.view')}}" class="custom-button">Buy Ticket</a>
        </div>
    </div>
</section>
<!-- ============Call in Ticket Section Ends Here================== -->

<!-- ============Ticket Section Starts Here================== -->
<section class="ticket-section padding-bottom padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">{{$ticket_section->title??''}}</h2>
            <p>{{$ticket_section->subtitle??''}}</p>
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
                        @foreach (json_decode($category->features, true) as $feature)
                                            <li>{{$feature}}</li>
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
<!-- ============Ticket Section Ends Here================== -->

<!-- ============Join Event Section Starts Here================== -->
<section class="overview-event-section">
    <div class="container-fluid p-xl-0">
        <div class="row m-0">
            <div class="col-xl-6 p-0">
                {{-- <div class="maps h-100"></div> --}}
                <iframe class="shadow-lg p-5 mb-5 bg-white rounded" src="https://maps.google.com/maps?q={{ str_replace(' ', '+', $setting->latitude??'') }}&output=embed"
                    style="width: 100%;" height="800" frameborder="0" style="border:0;" allowfullscreen aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
            <div class="col-xl-6 p-0">
                <div class="event-overview-content padding-top">
                    <div class="section-header ml-0 text-left wow fadeInUp" data-wow-duration="1s">
                        <h2 class="title">join our event</h2>
                        <p>Magna eget et velit sed, cras neque amet aeante quis mauris mollis elit, fringilla et
                            suscipitet.</p>
                    </div>
                    <div class="event-overview-tab tab">
                        <ul class="tab-menu common-menu">
                            <li>Event Venue</li>
                            <li>How To Get There</li>
                        </ul>
                        <div class="tab-area">
                            <div class="tab-item">
                                <div class="d-flex flex-wrap justify-content-between mb-30-none">
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="flaticon-location-pin"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li>USA, Callifornia 20, Firs</li>
                                                <li>Avenue, Callifornia</li>
                                            <ul>
                                        </div>
                                    </div>
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="flaticon-customer-service"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li><a href="tel:(123) 456-7890">(123) 456-7890</a></li>
                                                <li><a href="tel:(123) 456-7891">(123) 456-7891</a></li>
                                            <ul>
                                        </div>
                                    </div>
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="far fa-paper-plane"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li><a href="mailto:contact@example.com">contact@example.com</a>
                                                </li>
                                                <li><a href="mailto:info@example.com">info@example.com</a></li>
                                            <ul>
                                        </div>
                                    </div>
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="flaticon-clock"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li>monday to Friday </li>
                                                <li>time by schedule</li>
                                            <ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="d-flex flex-wrap justify-content-between mb-30-none style-two">
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="flaticon-bus"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li><a href="#0">00 : 41 min</a></li>
                                                <li><a href="#0">16.52 km</a></li>
                                            <ul>
                                        </div>
                                    </div>
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="flaticon-running-man"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li>02 : 17 hours</li>
                                                <li>20.05 km</li>
                                            <ul>
                                        </div>
                                    </div>
                                    <div class="event-tab-item text-center">
                                        <div class="event-tab-thumb">
                                            <i class="flaticon-aeroplane"></i>
                                        </div>
                                        <div class="event-tab-content">
                                            <ul>
                                                <li>00 : 03 hours</li>
                                                <li>20 km</li>
                                            <ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="para">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmpor
                                    incididunt ut labore et dolore magna aliqua. Quis uspendissurices gravida.
                                    Risus commodo viveraecenas accumsan lacus vel facilisis.
                                    over head to do event progeram. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ============Join Event Section Ends Here================== -->

<!-- ============Blog Section Starts Here================== -->
<section class="blog-section padding-top">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">{{$blog_section->title??''}}</h2>
            <p>{{$blog_section->subtitle??''}}</p>
        </div>
        <div class="row mb-30-none justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-md-6 col-lg-4">
                <div class="post-item wow fadeInUp" data-wow-duration="1s">
                    <div class="post-thumb">
                    <a href="{{route('blog.show',$blog->id)}}"><img src="{{asset($blog->img)}}" alt="blog"></a>
                        <ul class="blog-date">
                            <h2>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$blog->created_at)->format('d')}}</h2>
                            <span>{{\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$blog->created_at)->format('F')}}</span>
                        </ul>
                    </div>
                    <div class="post-content">
                        <h4 class="title"><a href="{{route('blog.show',$blog->id)}}">{{$blog->title}}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- ============Blog Section Ends Here================== -->

<!-- ============Sponsor Section Starts Here================== -->
<section class="sponsor-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header wow fadeInUp" data-wow-duration="1s">
            <h2 class="title">{{$sponsor_section->title??''}}</h2>
            <p>{{$sponsor_section->subtitle??''}}</p>
        </div>
        <div class="sponsor-wrapper">
            @foreach ($sponsors as $sponsor)
                <h4 class="sub-title">{{$sponsor->title??''}}</h4>
                <div class="sponsor-area">
                    @foreach ($sponsor->sponsors as $sponsor)
                    <div class="sponsor-thumb">
                        <a href="#0"><img src="{{asset($sponsor->logo??'')}}" alt="sponsor"></a>
                    </div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{route('become.sponsor')}}" class="custom-button">Become a Sponsor</a>
        </div>
    </div>
</section>
<!-- ============Sponsor Section Ends Here================== -->

@endsection

@push('external-js')
    <script>

$('.banner-countdown').countdown({
              date:'{{date('m/d/Y h:i:s', strtotime($setting->start_date??''))}}',
              offset: +2,
              day: 'Day',
              days: 'Days'
            }
        );
    </script>
@endpush
