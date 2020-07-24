<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Day;
use App\GeneralSetting;
use App\Section;
use App\Speaker;
use App\Sponsor;
use App\SponsorCategory;
use App\TicketCategory;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        $setting = GeneralSetting::first(['start_date', 'latitude', 'longitude']);
        $categories = TicketCategory::all();
        $speakers = Speaker::all();
        $days = Day::with(['slots' => function ($q) {
            $q->orderBy('start_time', 'asc');
        }])->get();

        $sponsors = SponsorCategory::with('sponsors')->get();
        $blogs = Blog::all();
        return view('frontend.index')->with([
            'setting' => $setting,
            'categories' => $categories,
            'speakers' => $speakers,
            'days' => $days,
            'blogs' => $blogs,
            'sponsors' => $sponsors,
        ]);
    }
}
