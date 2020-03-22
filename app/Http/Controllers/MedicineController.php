<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Medicine;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::all();
        return view('system_info.medicine.index', compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system_info.medicine.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $medicines = DB::table('medicines')
        ->where('name', 'like', '%' .$search. '%')
        ->get();
        return view('system_info.medicine.index', ['medicines' => $medicines]);

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
        $medicines = new Medicine([
            'name' => $request->get('name'),
            'detail'=> $request->get('detail'),
          ]);
        $medicines->save();
        return redirect('/medicine')->with('success', 'เรียบร้อย');
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
        $medicines = Medicine::find($id);

        return view('system_info.medicine.edit', compact('medicines'));
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
        $medicines = Medicine::find($id);
        $medicines->name = $request->get('name');
        $medicines->detail = $request->get('detail');
        $medicines->save();
        return redirect('/medicine')->with('success', 'เรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicines = Medicine::find($id);
        $medicines->delete();

        return redirect('/medicine')->with('success', 'เรียบร้อย');
    }
}
