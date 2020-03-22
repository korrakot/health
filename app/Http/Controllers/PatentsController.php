<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Patent;

class PatentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patents = Patent::all();
        return view('system_info.patents.index', compact('patents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('system_info.patents.create');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $patents = DB::table('patents')
        ->where('name', 'like', '%' .$search. '%')
        ->get();
        return view('system_info.patents.index', ['patents' => $patents]);
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
        $patents = new Patent([
            'name' => $request->get('name'),
            'detail'=> $request->get('detail'),
          ]);
        $patents->save();
        return redirect('/patent')->with('success', 'เรียบร้อย');
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
        $patents = Patent::find($id);

        return view('system_info.patents.edit', compact('patents'));
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
        $patents = Patent::find($id);
        $patents->name = $request->get('name');
        $patents->detail = $request->get('detail');
        $patents->save();
        return redirect('/patent')->with('success', 'เรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patents = Patent::find($id);
        $patents->delete();

        return redirect('/patent')->with('success', 'เรียบร้อย');
    }
}
