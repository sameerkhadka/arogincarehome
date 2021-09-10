<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;

class FaqController extends Controller
{
    public function index($slug)
    {
        $id = request('id');
        $items = Faq::where('type',$slug)->when($id,function($query) use ($id){
            return $query->where('type_id',$id);
        })->orderBy('order')->get();
        return view('admin.faq', compact('items'));
    }

    public function add(Request $request)
    {
            if(count($request->toBeDeleted)>0){
                Faq::destroy($request->toBeDeleted);
            }
             $id = $request->id ?? 0;
            foreach($request->info as $key => $item){
                $item['type'] = $request->type;
                $item['type_id'] = $request->id ?? null;
                if(isset($item['id'])){
                    //update
                    $item['order'] = $key;
                    Faq::find($item['id'])->update($item);
                }
                else{
                    //store
                    $item['order'] = $key;
                    Faq::create($item);
                }
             }
            return response(['faqs'=>Faq::where('type',$request->type)->when($request->id,function($query) use ($id){
                return $query->where('type_id',$id);
            })->orderBy('order')->get()],200);
        }
    }
