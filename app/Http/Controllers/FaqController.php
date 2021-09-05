<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HomepageFaq;

class FaqController extends Controller
{
    public function homepage()
    {
        $items = HomepageFaq::orderBy('order')->get();
        return view('admin.faq', compact('items'));
    }

    public function add(Request $request)
    {
            if(count($request->toBeDeleted)>0){
                HomepageFaq::destroy($request->toBeDeleted);
            }
            foreach($request->info as $key => $item){
                if(isset($item['id'])){
                    //update
                    $item['order'] = $key;
                    HomepageFaq::find($item['id'])->update($item);
                }
                else{
                    //store
                    $item['order'] = $key;
                    HomepageFaq::create($item);
                }
             }       
        }
    }
