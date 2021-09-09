<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Faq;

class FaqController extends Controller
{
    public function homepage()
    {
        $items = Faq::where('type','homepage')->orderBy('order')->get();
        return view('admin.faq', compact('items'));
    }

    public function add(Request $request)
    {
            if(count($request->toBeDeleted)>0){
                Faq::destroy($request->toBeDeleted);
            }
            foreach($request->info as $key => $item){
                $item['type'] = $request->type;
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
            return response(['faqs'=>Faq::where('type','homepage')->orderBy('order')->get()],200);
        }
    }
