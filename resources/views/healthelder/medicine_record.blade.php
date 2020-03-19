@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8 align-self-center">
      <h5 style="margin-bottom: -5 ">
      บันทึกการใช้ยา
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
<p>name</p>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">ลำดับ</th>
      <th scope="col">ชื่อยา</th>
      <th scope="col">รายละเอียด</th>
      <th scope="col">วันที่บันทึก</th>
      <th scope="col">ดำเนินการ</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning">Warning</button> <button type="button" class="btn btn-danger">Danger</button></td>
    </tr>
  </tbody>
</table>

<h4>เพิ่มการใช้ยา</h4>
<form>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-4 col-form-label text-right">เลือกยา :</label>
    <div class="col-sm-6">
      <select class="form-control">
      <option>Default select</option>
      <option>Default select1</option>
      <option>Default select2</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword" class="col-sm-4 col-form-label text-right">รายละเอียด :</label>
    <div class="col-sm-6">
      <!-- <input type="password" class="form-control" id="inputPassword" placeholder="Password"> -->
      <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="รายละเอียด" rows="3"></textarea>
    </div>
  </div>
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary text-right">บันทึก</button>
  </div>
</form>
</div>
@endsection