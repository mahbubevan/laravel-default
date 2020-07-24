<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TopicController extends Controller
{
    public function index()
    {
        $topics = Topic::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.topic.topics')->with(['topics' => $topics]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.topic.topic_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:4|max:32',
            'description' => 'required|string|min:4|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $topic = new Topic();
        $topic->title = $request->title;
        $topic->description = $request->description;

        $topic->save();

        return redirect()->route('admin.topics.index')->with('success', 'Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        // dd($topic);
        return view('admin.topic.topic_edit')->with(['topic' => $topic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:4|max:32',
            'description' => 'required|string|min:4|max:500',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $topic->title = $request->title;
        $topic->description = $request->description;
        $topic->save();

        return redirect()->route('admin.topics.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function trashed()
    {
        $trashed_topics = Topic::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.topic.topic_trashed')->with(['topics' => $trashed_topics]);
    }

    public function retrieve($id)
    {
        $topic = Topic::withTrashed()->find($id);
        $topic->restore();

        return redirect()->route('admin.topics.index')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $topic = Topic::withTrashed()->find($id);
        $topic->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }
}
