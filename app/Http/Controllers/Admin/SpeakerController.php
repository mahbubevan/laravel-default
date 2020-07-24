<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SpeakerController extends Controller
{
    public function index()
    {
        $speakers = Speaker::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.speaker.speakers')->with(['speakers' => $speakers]);
    }

    public function create()
    {
        return view('admin.speaker.speaker_create');
    }

    public function show(Speaker $speaker)
    {
        return view('admin.speaker.speaker')->with(['speaker' => $speaker]);
    }

    public function store(Request $request)
    {
        $speaker = new Speaker();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:4|max:32',
            'bio' => 'required|string|min:4|max:32',
            'designation' => 'required|string|min:4|max:32',
            'img' => 'image:jpeg,png|max:1000'
        ]);

        if ($validator->fails()) {
            // return response()->json([
            //     'error' => $validator->errors()
            // ]);

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $speaker->name = $request->name;
        $speaker->bio = $request->bio;
        $speaker->designation = $request->designation;

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/uploads/speaker';

            $data['img'] = $filename;
            $speaker->img = $data['img'];
            $speaker->save();
            $file->move($savePath, $filename);
        }

        $speaker->save();

        // return response()->json([
        //     'data' => 'Successfully Created',
        // ]);

        return redirect()->back()->with('success', 'Added Successfully');
    }

    public function edit(Speaker $speaker)
    {
        return view('admin.speaker.speaker_edit')->with(['speaker' => $speaker]);
    }

    public function update(Request $request, Speaker $speaker)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:4|max:32',
            'bio' => 'required|string|min:4|max:200',
            'designation' => 'required|string|min:4|max:32',
            'img' => 'image:jpeg,png|max:1000'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $speaker->name = $request->name;
        $speaker->bio = $request->bio;
        $speaker->designation = $request->designation;

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/uploads/speaker';

            $data['img'] = $filename;
            $speaker->img = $data['img'];
            $speaker->save();
            $file->move($savePath, $filename);
        }

        $speaker->save();
        return redirect()->route('admin.speaker.list')->with('success', 'Successfully Updated');
    }

    public function destroy(Speaker $speaker)
    {
        $speaker->delete();

        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function trashed()
    {
        $trashed_speakers = Speaker::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.speaker.speaker_trashed')->with(['speakers' => $trashed_speakers]);
    }

    public function retrieve($id)
    {
        $speaker = Speaker::withTrashed()->find($id);
        $speaker->restore();

        return redirect()->route('admin.speaker.list')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $speaker = Speaker::withTrashed()->find($id);
        $speaker->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }
}
