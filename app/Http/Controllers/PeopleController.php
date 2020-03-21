<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\Category;
use ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $people = People::all();
        $category = DB::table('people')
                ->join('categories', 'people.category_id', '=', 'categories.id')
                ->select('name')
                ->get();

        return view('system_info.elder.index', compact('people', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('system_info.elder.create', compact('category'));
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
            'id'=>'required',
            'prefix'=>'required',
            'name'=>'required',
            'surname'=>'required',
            'gender'=>'required',
            'birthday'=>'required',
            'status'=>'required',
            'address'=>'required',
            'weight'=>'required',
            'height'=>'required',
            'age'=>'required',
            'category_id'=>'required',
        ]);
        $people = new People([
            'id'=> $request->get('id'),
            'prefix_people'=> $request->get('prefix'),
            'name_people'=> $request->get('name'),
            'surname_people'=> $request->get('surname'),
            'gender_people'=> $request->get('gender'),
            'birthday_people'=> $request->get('birthday'),
            'status_people'=> $request->get('status'),
            'address_people'=> $request->get('address'),
            'weight_people'=> $request->get('weight'),
            'height_people'=> $request->get('height'),
            'age_people'=> $request->get('age'),
            'category_id'=> $request->get('category_id'),
          ]);
        $people->save();
        return redirect('/elder')->with('success', 'เรียบร้อย');
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
        $people = People::find($id);
        $category = Category::all();
        return view('system_info.elder.edit', compact('people', 'category'));
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
        $people = People::find($id);
        $people->name = $request->get('name');
        $people->detail = $request->get('detail');
        $people->save();
        return redirect('/elder')->with('success', 'เรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $people = People::find($id);
        $people->delete();

        return redirect('/elder')->with('success', 'เรียบร้อย');
    }
}
