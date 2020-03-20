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
      <p>name</p>
    </div>
    <div class="col-2">
      <button class="btn btn-outline-secondary w-100" type="button">เพิ่ม</button>
    </div>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">เลขบัตรประชาชน</th>
      <th scope="col">คำนำหน้า</th>
      <th scope="col">ชื่อ</th>
      <th scope="col">สกุล</th>
      <th scope="col">วันเกิด</th>
      <th scope="col">อายุ</th>
      <th scope="col">ที่อยู่</th>
      <th scope="col">สถานภาพ</th>
      <th scope="col">บันทึกล่าสุด</th>
      <th scope="col">ดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning">แก้ไข</button> <button type="button" class="btn btn-danger">ลบ</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning">แก้ไข</button> <button type="button" class="btn btn-danger">ลบ</button></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning">แก้ไข</button> <button type="button" class="btn btn-danger">ลบ</button></td>
    </tr>
  </tbody>
</table>
</div>
@endsection