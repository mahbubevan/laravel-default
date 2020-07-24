<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SectionController extends Controller
{
    public function index()
    {
        $banner = Section::where('name', 'banner')->first();
        $about = Section::where('name', 'about')->first();
        $about_overview = Section::where('name', 'about_overview')->first();
        $ticket = Section::where('name', 'ticket')->first();
        $sponsor = Section::where('name', 'sponsor')->first();
        $speaker = Section::where('name', 'speaker')->first();
        $schedule = Section::where('name', 'schedule')->first();
        $blog = Section::where('name', 'blog')->first();

        return view('backend.section.section')->with([
            'banner' => json_decode($banner->content),
            'about' => json_decode($about->content),
            'about_overview' => json_decode($about_overview->content),
            'ticket' => json_decode($ticket->content),
            'sponsor' => json_decode($sponsor->content),
            'speaker' => json_decode($speaker->content),
            'schedule' => json_decode($schedule->content),
            'blog' => json_decode($blog->content)
        ]);
    }

    public function store(Request $request)
    {
        switch ($request) {
            case $request->banner == 'banner':
                return $this->bannerStore($request);
                break;

            case $request->about == 'about':
                return $this->aboutStore($request);
                break;

            case $request->about_overview == 'about_overview':
                return $this->aboutOverviewStore($request);
                break;

            case $request->ticket == 'ticket':
                return $this->ticketSectionStore($request);
                break;

            case $request->sponsor == 'sponsor':
                return $this->sponsorSectionStore($request);
                break;

            case $request->speaker == 'speaker':
                return $this->speakerSectionStore($request);
                break;

            case $request->schedule == 'schedule':
                return $this->scheduleSectionStore($request);
                break;

            case $request->blog == 'blog':
                return $this->blogSectionStore($request);
                break;

            default:
                return back()->with('error', 'Not Applicatble');
                break;
        }
    }

    protected function bannerStore($data)
    {
        $validator = Validator::make($data->all(), [
            'banner' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'paragraph' => 'required|string',
            'img' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $section = Section::where('name', 'banner')->first();
        $section->name = $data->banner;
        $section->content = json_encode([
            'title' => $data->title,
            'subtitle' => $data->subtitle,
            'paragraph' => $data->paragraph,
            'img' => $data->img_update,
        ]);


        if ($data->has('img')) {

            $file = $data->file('img');
            $dateTime = date('Ymd_His');
            $filename = '/assets/img/' . $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/img/';

            $req['img'] = $filename;

            $section->content = json_encode([
                'title' => $data->title,
                'subtitle' => $data->subtitle,
                'paragraph' => $data->paragraph,
                'img' => $req['img']
            ]);
            $section->save();
            $file->move($savePath, $filename);
        }


        $section->save();

        return back()->with('success', 'Updated Successfully');
    }





    protected function aboutStore($request)
    {
        $validator = Validator::make($request->all(), [
            'about' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'paragraph1' => 'required|string',
            'paragraph2' => 'required|string',
            'img' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.section.index')->withErrors($validator)->withInput();
        }

        $section = Section::where('name', 'about')->first();

        $section->name = $request->about;

        $section->content = json_encode([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2,
            'img' => $request->img_update,
        ]);

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = '/assets/img/' . $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/img/';

            $data['img'] = $filename;

            $section->content = json_encode([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'paragraph1' => $request->paragraph1,
                'paragraph2' => $request->paragraph2,
                'img' => $data['img']
            ]);
            $section->save();
            $file->move($savePath, $filename);
        }


        $section->save();

        return back()->with('success', 'Updated Successfully');
    }

    protected function aboutOverviewStore($request)
    {
        $validator = Validator::make($request->all(), [
            'about_overview' => 'required|string',
            'title' => 'required|string',
            'paragraph1' => 'required|string',
            'l1' => 'required|string',
            'l2' => 'required|string',
            'heading' => 'required|string',
            'paragraph2' => 'required|string',
            'paragraph3' => 'required|string',
            'img' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.section.index')->withErrors($validator)->withInput();
        }

        $section = Section::where('name', 'about_overview')->first();

        $section->name = $request->about_overview;

        $section->content = json_encode([
            'title' => $request->title,
            'heading' => $request->heading,
            'paragraph1' => $request->paragraph1,
            'paragraph2' => $request->paragraph2,
            'paragraph3' => $request->paragraph3,
            'l1' => $request->l1,
            'l2' => $request->l2,
            'img' => $request->img_update,
        ]);

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = '/assets/img/' . $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/img/';

            $data['img'] = $filename;

            $section->content = json_encode([
                'title' => $request->title,
                'heading' => $request->heading,
                'paragraph1' => $request->paragraph1,
                'paragraph2' => $request->paragraph2,
                'paragraph3' => $request->paragraph3,
                'l1' => $request->l1,
                'l2' => $request->l2,
                'img' => $data['img']
            ]);
            $section->save();
            $file->move($savePath, $filename);
        }


        $section->save();

        return back()->with('success', 'Updated Successfully');
    }

    protected function ticketSectionStore($data)
    {
        $validator = Validator::make($data->all(), [
            'ticket' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'banner_title' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.section.index')->withErrors($validator)->withInput();
        }

        $section = Section::where('name', 'ticket')->first();

        $section->name = $data->ticket;
        $section->content = json_encode([
            'title' => $data->title,
            'subtitle' => $data->subtitle,
            'banner_title' => $data->banner_title,
        ]);


        $section->save();

        return back()->with('success', 'Updated Successfully');
    }

    protected function sponsorSectionStore($data)
    {
        $validator = Validator::make($data->all(), [
            'sponsor' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'title1' => 'required|string',
            'details' => 'required|string',
            'title2' => 'required|string',
            'details2' => 'required|string',
            'title3' => 'required|string',
            'details3' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('admin.section.index')->withErrors($validator)->withInput();
        }

        $section = Section::where('name', 'sponsor')->first();

        $section->name = $data->sponsor;
        $section->content = json_encode([
            'title' => $data->title,
            'subtitle' => $data->subtitle,
            'title1' => $data->title1,
            'details' => $data->details,
            'title2' => $data->title2,
            'details2' => $data->details2,
            'title3' => $data->title3,
            'details3' => $data->details3,
        ]);


        $section->save();

        return back()->with('success', 'Updated Successfully');
    }

    protected function speakerSectionStore($request)
    {
        $validator = Validator::make($request->all(), [
            'speaker' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $section = Section::where('name', 'speaker')->first();

        $section->name = $request->speaker;
        $section->content = json_encode([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        $section->save();

        return back()->with('success', 'Updated Successfully');
    }

    protected function scheduleSectionStore($request)
    {
        $validator = Validator::make($request->all(), [
            'schedule' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $section = Section::where('name', 'schedule')->first();

        $section->name = $request->schedule;
        $section->content = json_encode([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
        ]);

        $section->save();

        return back()->with('success', 'Updated Successfully');
    }

    protected function blogSectionStore($request)
    {
        $validator = Validator::make($request->all(), [
            'blog' => 'required|string',
            'title' => 'required|string',
            'subtitle' => 'required|string',
            'limit' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $section = Section::where('name', 'blog')->first();

        $section->name = $request->blog;
        $section->content = json_encode([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'limit' => $request->limit,
        ]);

        $section->save();

        return back()->with('success', 'Updated Successfully');
    }
}
