<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Sponsor;
use App\SponsorCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::all();
        $count = Sponsor::count();

        return view('admin.sponsor.sponsors')->with([
            'sponsors' => $sponsors,
            'count' => $count,
        ]);
    }

    public function create()
    {
        $categories = SponsorCategory::all();
        return view('admin.sponsor.sponsor_create')->with([
            'categories' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|integer|min:1',
            'name' => 'required|string',
            'logo' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $sponsor = new Sponsor();
        $sponsor->sponsor_category_id = $request->category;
        $sponsor->name = $request->name;

        if ($request->has('logo')) {

            $file = $request->file('logo');
            $dateTime = date('Ymd_His');
            $filename = $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/img/uploads/sponsor/';

            $data['img'] = $filename;
            $sponsor->logo = $data['img'];
            $sponsor->save();
            $file->move($savePath, $filename);
        }

        $sponsor->save();

        return redirect()->route('admin.sponsor.index')->with('success', 'Created Successfully');
    }

    public function edit(Sponsor $sponsor)
    {
        $categories = SponsorCategory::all();
        return view('admin.sponsor.sponsor_edit')->with([
            'sponsor' => $sponsor,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request, Sponsor $sponsor)
    {
        $validator = Validator::make($request->all(), [
            'category' => 'required|integer|min:1',
            'name' => 'required|string',
            'logo' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $sponsor->sponsor_category_id = $request->category;
        $sponsor->name = $request->name;

        if ($request->has('logo')) {

            $file = $request->file('logo');
            $dateTime = date('Ymd_His');
            $filename = $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/img/uploads/sponsor/';

            $data['img'] = $filename;
            $sponsor->logo = $data['img'];
            $sponsor->save();
            $file->move($savePath, $filename);
        }

        $sponsor->save();

        return redirect()->route('admin.sponsor.index')->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $sponsor = Sponsor::findOrFail($id);
        $sponsor->delete();

        return redirect()->back()->with('success', 'Trahsed Successfully');
    }

    public function trashed()
    {
        $trashed_sponsors = Sponsor::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.sponsor.sponsor_trashed')->with(['sponsors' => $trashed_sponsors]);
    }

    public function retrieve($id)
    {
        $sponsor = Sponsor::withTrashed()->find($id);
        $sponsor->restore();

        return redirect()->route('admin.sponsor.index')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $sponsor = Sponsor::withTrashed()->find($id);
        $sponsor->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }

    public function category_index()
    {
        $categories = SponsorCategory::all();
        $count = SponsorCategory::count();
        return view('admin.sponsor.categories')->with([
            'categories' => $categories,
            'count' => $count,
        ]);
    }

    public function category_create()
    {
        return view('admin.sponsor.category_create');
    }

    public function category_store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $sponsor = new SponsorCategory();
        $sponsor->title = $request->title;
        $sponsor->save();

        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function category_destroy($id)
    {
        $category = SponsorCategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }
}
