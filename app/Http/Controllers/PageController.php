<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class PageController extends Controller
{
    public function update(Request $request, $id)
    {
     $item = Page::find($id);

     if($request->hasFile('image'))
        {
            if (file_exists(public_path('storage/pages/September2021/' . $item->image)))
            {
                unlink(public_path().'/storage'.'/pages'.'/September2021'.'/'.$item->image);
            }

             $file = $request->file('image');

             $name = 'event_banner.'.$file->getClientOriginalExtension();

             $file->storeAs('public/pages/September2021', $name);

             $item->image = $name;
        }

     $item->meta_key = $request->meta_key;

     $item->meta_description = $request->meta_description;

     $item->title = $request->title;

     $item->content_title = $request->content_title;

     $item->content_heading = $request->content_heading;

     $item->content_description = $request->content_description;

     $item->save();

     return back();
    }

    public function page()
    {
        $item = Page::where('id','3')->first();
        return view('admin.team', compact('item'));
    }

    public function updateStatus(Request $request){
        $model = '\\App\\Popup';
        $popup = $model::find($request->id);
        $popup->status = $request->val;
        $popup->update();
        $msg = $request->val ? 'checked' : 'unchecked';
        return response([
            "msg" => "Successfully {$msg}"
        ],200);
    }
}
