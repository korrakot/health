@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-8 align-self-center">
        <h5 style="margin-bottom: -5 ">
          ผู้สูงอายุ
        </h5>
        </div>
        <div class="col-4">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="เลขบัตรประชาชน" aria-label="Recipient's username" aria-describedby="basic-addon2">
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
    <div class="col-10">
    </div>
    <div class="col-2">
      <a type="button" href="/elder/create" class="btn btn-outline-secondary w-100" type="button">เพิ่ม</a>
    </div>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">เลขบัตรประชาชน</th>
      <th scope="col">ชื่อ - สกุล</th>
      <th scope="col">วันเกิด</th>
      <th scope="col">อายุ</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">สถานภาพ</th>
      <th scope="col">บันทึกล่าสุด</th>
      <th scope="col">ดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
    @foreach($people as $key=>$personal)
    <tr>
      <th scope="row"> {{++$key}} </th>
      <td> {{$personal->id}} </td>
      <td>{{$personal->prefix_people}} {{$personal->name_people}} {{$personal->surname_people}}</td>
      <td>{{$personal->birthday_people}}</td>
      <td>{{$personal->age_people}}</td>
      <td>{{$personal->address_people}}</td>
      <td>{{$personal->$category}}</td>
      <td>{{$personal->updated_at}}</td>
      <td>
        <div class="row" style="justify-content: center">
          <a type="button" href="{{ route('elder.edit',$personal->id)}}" class="mr-2 btn btn-warning">แก้ไข</a>
          <form action="{{ route('elder.destroy',$personal->id)}}" method="post">
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