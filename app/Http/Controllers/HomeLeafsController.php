<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeLeafsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Home::first();
        return view('leafs.home', compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
        ]);

        $data = Home::first();
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;

        if($request->file('bc_photo')){
            $img_file = $request->file('bc_photo');
            $img_file->storeAs('public/img/','bc_photo.' .$img_file->getClientOriginalExtension());
            $data->bc_photo = 'storage/img/bc_photo. ' . $img_file->getClientOriginalExtension();
        }

        if($request->file('sketch')){
            $pdf_file = $request->file('sketch');
            $pdf_file->storeAs('public/pdf/','sketch.' .$pdf_file->getClientOriginalExtension());
            $data->sketch = 'storage/pdf/sketch. ' . $pdf_file->getClientOriginalExtension();
        }

        $data->save();
        return redirect()->route('admin.home')->with('success', 'data has been updated successfully');
    }

}
