<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Disease;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $disease = Disease::all();
        return view('system_info.disease.index', compact('disease'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system_info.disease.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $disease = DB::table('diseases')
        ->where('name', 'like', '%' .$search. '%')
        ->get();
        return view('system_info.disease.index', ['disease' => $disease]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'detail'=> 'required',
        ]);
        $disease = new Disease([
            'name' => $request->get('name'),
            'detail'=> $request->get('detail'),
          ]);
        $disease->save();
        return redirect('/disease')->with('success', 'เรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $disease = Disease::find($id);

        return view('system_info.disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'detail'=> 'required',
        ]);
        $disease = Disease::find($id);
        $disease->name = $request->get('name');
        $disease->detail = $request->get('detail');
        $disease->save();
        return redirect('/disease')->with('success', 'เรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disease = Disease::find($id);
        $disease->delete();

        return redirect('/disease')->with('success', 'เรียบร้อย');
    }
}
