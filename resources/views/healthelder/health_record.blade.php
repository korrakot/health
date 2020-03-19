@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8 align-self-center">
      <h5 style="margin-bottom: -5 ">
        การบันทึกสุขภาพ
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
      <th scope="col">วันที่บันทึก</th>
      <th scope="col">น้ำหนัก</th>
      <th scope="col">ส่วนสูง</th>
      <th scope="col">ความดัน</th>
      <th scope="col">สถานภาพ</th>
      <th scope="col">นัดครั้งต่อไป</th>
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
      <td><button type="button" class="btn btn-warning">Warning</button> <button type="button" class="btn btn-danger">Danger</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning">Warning</button> <button type="button" class="btn btn-danger">Danger</button></td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning">Warning</button> <button type="button" class="btn btn-danger">Danger</button></td>
    </tr>
  </tbody>
</table>
</div>
@endsection