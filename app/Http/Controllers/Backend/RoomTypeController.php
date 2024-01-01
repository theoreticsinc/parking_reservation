<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\BookArea;
use Carbon\Carbon;

class RoomTypeController extends Controller
{
    public function RoomTypeList(){

        $allData = RoomType::orderBy('id','desc')->get();
        return view('backend.allroom.roomtype.view_roomtype',compact('allData'));

    }
    
    
    public function AddRoomType(){
        return view('backend.allroom.roomtype.add_roomtype');
    }// End Method 

    public function EditRoomType($id){

        $roomtype = RoomType::findOrFail($id);
        return view('backend.allroom.roomtype.edit_roomtype',compact('roomtype'));

    }// End Method 

    public function RoomTypeStore(Request $request){

        RoomType::insert([
            'name' => $request->name,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'RoomType Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('room.type.list')->with($notification);

    }// End Method 

    public function RoomTypeUpdate(Request $request){

        $book_id = $request->id;

        if($request->file('image')){

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1000,1000)->save('upload/bookarea/'.$name_gen);
            $save_url = 'upload/bookarea/'.$name_gen;
    
            BookArea::findOrFail($book_id)->update([
    
                'short_title' => $request->short_title,
                'main_title' => $request->main_title,
                'short_desc' => $request->short_desc,
                'link_url' => $request->link_url,
                'image' => $save_url, 
            ]);
    
            $notification = array(
                'message' => 'Book Area Updated With Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);


        } else {

            RoomType::findOrFail($book_id)->update([
    
                'name' => $request->short_title,
                'main_title' => $request->main_title,
                'short_desc' => $request->short_desc,
                'link_url' => $request->link_url, 
            ]);
    
            $notification = array(
                'message' => 'Book Area Updated Without Image Successfully',
                'alert-type' => 'success'
            );
    
            return redirect()->back()->with($notification);

        } 
    } // End Method 


}