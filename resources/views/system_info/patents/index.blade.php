@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-8 align-self-center">
        <h5 style="margin-bottom: -5 ">
        ข้อมูลสิทธิ์การรักษา
        </h5>
        </div>
        <div class="col-4">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="คำที่ต้องการค้นหา" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">ค้นหา</button>
            </div>           
          </div>
        </div>
      </div>
    </div>
  </div>
  </br>
  <div class="row mb-3">
    <div class="col-10"></div>
    <div class="col-2">
      <a type="button" href="/patent/create" class="btn btn-outline-secondary w-100" type="button">เพิ่ม</a>
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
  @foreach($patents as $key=>$patent)
    <tr>
      <th scope="row"> {{++$key}} </th>
      <td>{{$patent->name}}</td>
      <td>{{$patent->detail}}</td>
      <td>
        <div class="row" style="justify-content: center">
          <a type="button" href="{{ route('patent.edit',$patent->id)}}" class="mr-2 btn btn-warning">แก้ไข</a>
          <form action="{{ route('patent.destroy',$patent->id)}}" method="post">
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