<?php

namespace App\Http\Controllers\Admin;

use App\Day;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = Day::all();
        return view('admin.day.days')->with([
            'days' => $days,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.day.day_create');
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
            'date' => 'required|date|unique:days|after:today',
            'day_of_week' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $day = new Day();
        $day->date = $request->date;
        $day->day_of_week = $request->day_of_week;

        $day->save();

        return redirect()->back()->with('success', 'Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $day = Day::findOrFail($id);
        $day->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function trashed()
    {
        $trashed_day = Day::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.day.day_trashed')->with(['days' => $trashed_day]);
    }

    public function retrieve($id)
    {
        $day = Day::withTrashed()->find($id);
        $day->restore();

        return redirect()->route('admin.day.index')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $speaker = Day::withTrashed()->find($id);
        $speaker->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }
}
