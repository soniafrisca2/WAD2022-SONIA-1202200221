<?php

namespace App\Http\Controllers;

use App\Models\user;

class showController extends Controller
{
    public function create()
    {
        return view('ListCar','AddCar');
    }

    public function showroom(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'user_id_type' =>'required',
            'name' =>'required',
            'owner' =>'required',
            'brand' =>'required',
            'purchase_data' =>'required',
            'description' =>'required',
            'image' =>'required|image|mimes:jpeg,png,jpg',
            'status' =>'required',
        ]);

        $image = $request->file('image');
        $image = showroomAs('public/image',$image->hashName());

        showrooms::create([
            'id' => $request->id,
            'user_id_id' =>$request->userid,
            'name' =>$request->name,
            'owner' =>$request->owner,
            'brand' =>$request->brand,
            'purchase_data' =>$request->purchasedata,
            'description' =>$request->description,
            'image' =>$image->hashName(),
            'status' =>$request->status,
        ]);

        return redirect()->route('ListCar.index');
    }

    public function index(){
        $ListCar = showrooms::all();
        
        return view('ListCar.ListCar', compact('ListCar'));
    }
}
