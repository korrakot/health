@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-8 align-self-center">
        <h5 style="margin-bottom: -5 ">
        ข้อมูลยา
        </h5>
        </div>
        <div class="col-4">
          <form action="/searchmedicine">
            <div class="input-group ">
              <input type="search" class="form-control" placeholder="คำที่ต้องการค้นหา" name="search">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">ค้นหา</button>
              </div>           
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </br>
  <div class="row mb-3">
    <div class="col-10"></div>
    <div class="col-2">
      <a type="button" href="/medicine/create" class="btn btn-outline-secondary w-100" type="button">เพิ่ม</a>
    </div>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col" width="10%">ลำดับ</th>
      <th scope="col" width="20%">ชื่อ</th>
      <th scope="col" width="50%">คำอธิบาย</th>
      <th scope="col" width="20%">ดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
  @foreach($medicines as $key=>$medicine)
    <tr>
      <th scope="row"> {{++$key}} </th>
      <td>{{$medicine->name}}</td>
      <td>{{$medicine->detail}}</td>
      <td>
        <div class="row" style="justify-content: center">
          <a type="button" href="{{ route('medicine.edit',$medicine->id)}}" class="mr-2 btn btn-warning">แก้ไข</a>
          <form action="{{ route('medicine.destroy',$medicine->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit"class="btn btn-danger">ลบ</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection