<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Symptom;

class SymptomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms = Symptom::all();
        return view('system_info.symptom.index', compact('symptoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system_info.symptom.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $symptoms = DB::table('symptoms')
        ->where('name', 'like', '%' .$search. '%')
        ->get();
        return view('system_info.symptom.index', ['symptoms' => $symptoms]);

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
        $symptoms = new Symptom([
            'name' => $request->get('name'),
            'detail'=> $request->get('detail'),
          ]);
        $symptoms->save();
        return redirect('/symptom')->with('success', 'เรียบร้อย');
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
        $symptoms = Symptom::find($id);

        return view('system_info.symptom.edit', compact('symptoms'));
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
        $symptoms = Symptom::find($id);
        $symptoms->name = $request->get('name');
        $symptoms->detail = $request->get('detail');
        $symptoms->save();
        return redirect('/symptom')->with('success', 'เรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $symptoms = Symptom::find($id);
        $symptoms->delete();

        return redirect('/symptom')->with('success', 'เรียบร้อย');
    }
}
