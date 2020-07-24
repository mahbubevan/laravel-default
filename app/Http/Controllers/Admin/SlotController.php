<?php

namespace App\Http\Controllers\Admin;

use App\Day;
use App\Http\Controllers\Controller;
use App\Slot;
use App\Speaker;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SlotController extends Controller
{
    public function index()
    {
        $slots = Slot::with('speaker', 'topic', 'day')->orderBy('created_at', 'desc')->paginate(10);
        $speakers = Speaker::get(['id', 'name']);
        $topics = Topic::get(['id', 'title']);
        $days = Day::get(['id', 'day_of_week', 'date']);
        return view('admin.slot.slots')->with([
            'slots' => $slots,
            'speakers' => $speakers,
            'topics' => $topics,
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
        return view('admin.slot.slot_create');
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
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $slot = new Slot();
        $slot->start_time = $request->start_time;
        $slot->end_time = $request->end_time;
        $slot->save();

        return redirect()->route('admin.slots.index')->with('success', 'Successfully new slot created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function show(Slot $slot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function edit(Slot $slot)
    {
        $speakers = Speaker::get(['id', 'name']);
        $topics = Topic::get(['id', 'title']);
        $days = Day::get(['id', 'day_of_week', 'date']);

        return view('admin.slot.slot_edit')->with([
            'speakers' => $speakers,
            'topics' => $topics,
            'slot' => $slot,
            'days' => $days,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slot $slot)
    {
        $validator = Validator::make($request->all(), [
            'speaker' => 'required|numeric|min:0',
            'topic' => 'required| numeric|min:0',
            'day' => 'required| numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        if (!$this->isAvailable($request->day, $slot)) {
            return back()->with('error', 'Slot Is Not Available For This Day');
        }

        $slot->speaker_id = $request->speaker;
        $slot->topic_id = $request->topic;
        $slot->day_id = $request->day;
        $slot->status = Slot::NOT_AVAILABLE;
        $slot->save();

        return redirect()->route('admin.slots.index')->with('success', 'Successfully Assigned');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slot $slot)
    {
        $slot->delete();
        return redirect()->back()->with('success', 'Successfully Deleted');
    }

    public function free_slots()
    {
        $slots = Slot::where('status', Slot::AVAILABLE)->get();
        return view('backend.slot.slot_available')->with(['slots' => $slots]);
    }

    public function book_slots()
    {
        $slots = Slot::with('speaker', 'topic')->where('status', Slot::NOT_AVAILABLE)->get();
        return view('backend.slot.slot_booked')->with(['slots' => $slots]);
    }

    public function update_modal(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'speaker' => 'required|numeric|min:0',
            'topic' => 'required| numeric|min:0',
            'slot' => 'required| numeric|min:0',
            'day' => 'required| numeric|min:0',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if (!$this->isAvailable($request->day, $slot = null, $request->slot)) {
            return back()->with('error', 'Slot Is Not Available For This Day');
        }

        $slot = Slot::findOrFail($request->slot);
        $slot->speaker_id = $request->speaker;
        $slot->topic_id = $request->topic;
        $slot->day_id = $request->day;
        $slot->status = Slot::NOT_AVAILABLE;
        $slot->save();

        return redirect()->back()->with('success', 'Successfully Assigned. Go slot management');
    }

    public function trashed()
    {
        $trashed_slots = Slot::onlyTrashed()->with('speaker', 'topic')->orderBy('created_at', 'desc')->paginate(10);

        return view('backend.slot.slot_trashed')->with(['slots' => $trashed_slots]);
    }

    public function retrieve($id)
    {
        $speaker = Slot::withTrashed()->find($id);
        $speaker->restore();

        return redirect()->route('admin.slots.index')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $speaker = Slot::withTrashed()->find($id);
        $speaker->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }


    protected function isAvailable($day = null, $slot = null, $id = null)
    {
        if ($slot != null) {
            $date_times = Day::where('id', $day)->with('slots')->first()->slots;

            $new_start_time = Slot::where('id', $slot->id)->first()->start_time;
            $new_end_time = Slot::where('id', $slot->id)->first()->end_time;


            $new_start_time = intval(date("H", strtotime($new_start_time)));
            $new_end_time = intval(date("H", strtotime($new_end_time)));

            foreach ($date_times as $time) {
                $exist_start_time = intval(date("H", strtotime($time->start_time)));
                $exist_end_time = intval(date("H", strtotime($time->end_time)));

                if ($new_start_time >= $exist_start_time && $new_start_time <= $exist_end_time) {
                    return false;
                } elseif ($new_end_time >= $exist_start_time && $new_end_time <= $exist_end_time) {
                    return false;
                }
            }

            return true;
        }

        $date_times = Day::where('id', $day)->with('slots')->first()->slots;

        $new_start_time = Slot::where('id', $id)->first()->start_time;
        $new_end_time = Slot::where('id', $id)->first()->end_time;


        $new_start_time = intval(date("H", strtotime($new_start_time)));
        $new_end_time = intval(date("H", strtotime($new_end_time)));

        foreach ($date_times as $time) {
            $exist_start_time = intval(date("H", strtotime($time->start_time)));
            $exist_end_time = intval(date("H", strtotime($time->end_time)));

            if ($new_start_time >= $exist_start_time && $new_start_time < $exist_end_time) {
                return false;
            } elseif ($new_end_time > $exist_start_time && $new_end_time <= $exist_end_time) {
                return false;
            }
        }

        return true;
    }
}
