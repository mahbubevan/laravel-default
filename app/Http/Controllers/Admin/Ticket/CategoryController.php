<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Ticket;
use App\TicketCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = TicketCategory::all();
        // $categories = TicketCategory::first();
        // dd();
        return view('admin.ticket.categories')->with([
            'categories' => $categories,
        ]);
    }

    public function create()
    {
        return view('admin.ticket.category_create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|max:10',
            'price' => 'required|numeric|min:0',
            'limit' => 'required|integer|min:0|max:100',
            'details' => 'required|string|min:10|max:2000',
            'img' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $category = new TicketCategory();
        $category->title = $request->title;
        $category->price = $request->price;
        $category->limit = $request->limit;
        $category->details = $request->details;
        $category->features = json_encode($request->features, JSON_FORCE_OBJECT);

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/uploads/ticket/';
            $data['img'] = $filename;
            $category->img = $data['img'];
            $file->move($savePath, $filename);
        }

        $category->save();

        return redirect()->back()->with('success', 'Created');
    }

    public function edit(Request $request, $id)
    {
        $category = TicketCategory::findOrFail($id);
        return view('admin.ticket.category_edit')->with([
            'category' => $category,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:3|max:10',
            'price' => 'required|numeric|min:0',
            'limit' => 'required|integer|min:0|max:100',
            'details' => 'required|string|min:10|max:2000',
            'img' => 'image:jpeg,png|max:1000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $category = TicketCategory::findOrFail($id);
        $category->title = $request->title;
        $category->price = $request->price;
        $category->limit = $request->limit;
        $category->details = $request->details;
        $category->features = json_encode($request->features, JSON_FORCE_OBJECT);

        if ($request->has('img')) {

            $file = $request->file('img');
            $dateTime = date('Ymd_His');
            $filename = $dateTime . '-' . $file->getClientOriginalName();
            $savePath = 'assets/uploads/ticket/';
            $data['img'] = $filename;
            $category->img = $data['img'];
            $file->move($savePath, $filename);
        }

        $category->save();

        return redirect()->back()->with('success', 'Updated');
    }

    public function destroy($id)
    {
        $category = TicketCategory::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    public function trashed()
    {
        $categories = TicketCategory::onlyTrashed()->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.ticket.category_trashed')->with(['categories' => $categories]);
    }

    public function retrieve($id)
    {
        $speaker = TicketCategory::withTrashed()->find($id);
        $speaker->restore();

        return redirect()->route('admin.ticket.category.index')->with('success', 'Successfully Restored');
    }

    public function permanent_delete($id)
    {
        $speaker = TicketCategory::withTrashed()->find($id);
        $speaker->forceDelete();

        return redirect()->back()->with('success', 'Parmanently Deleted');
    }
}
