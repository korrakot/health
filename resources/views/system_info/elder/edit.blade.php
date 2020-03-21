@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8 align-self-center">
        <h5 style="margin-bottom: -5 ">
        แก้ไขรายชื่อผู้สูงอายุ
        </h5>
      </div>
    </div>
  </div>
</div>
</br>
<form method="post" action="{{ route('elder.store'), $people->id }}">
  @method('PATCH')  
  @csrf
  <div class="row">
    <div class="form-group col-sm-12">
      <label for="id" class="col-form-label">รหัสบัตรประจำตัวประชาชน :</label>
      <div>
      <input type="number" value="{{$people->id}}" class="form-control" id="id" name="id" placeholder="เลขบัตรประจำตัวประชาชน 13 หลัก">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="name" class=" col-form-label">คำนำหน้า :</label>
      <div>
      <select class="form-control" name="prefix">
        <option value="นาย">นาย</option>
        <option value="นาง">นาง</option>
        <option value="นางสาว">นางสาว</option>
        </select>
      </div>
    </div>
    <div class="form-group col-sm-5 ">
      <label for="name" class="col-form-label">ชื่อ :</label>
      <div>
      <input type="text" value="{{$people->name_people}}" class="form-control" id="name" name="name" placeholder="ชื่อ">
      </div>
    </div>
    <div class="form-group col-sm-5">
      <label for="surname" class="col-form-label">นามสกุล :</label>
      <div>
      <input type="text" value="{{$people->surname_people}}" class="form-control" id="surname" name="surname" placeholder="นามสกุล">
      </div>
    </div>
  </div>
  <div class="row">
  <div class="form-group col-4">
      <label for="name" class="col-form-label">สถานะภาพ :</label>
      <div>
      <select class="form-control" name="status">
        <option value="โสด">โสด</option>
        <option value="สมรส">สมรส</option>
        <option value="หย่าร้าง">หย่าร้าง</option>
        <option value="ม่าย">ม่าย</option>
        </select>
      </div>
    </div>
    <div class="form-group col-4">
      <label for="age" class="col-form-label">อายุ :</label>
      <div>
      <input type="number" value="{{$people->age_people}}" class="form-control" id="age" name="age" placeholder="อายุ">
      </div>
    </div>
    <div class="form-group col-4">
      <label for="birthday" class="col-form-label">วันเกิด :</label>
      <div>
      <input type="date" value="{{$people->birthday_people}}" class="form-control" id="birthday" name="birthday">
      </div>
    </div>    
  </div>
  <div class="row">    
    <div class="form-group col-4">
      <label for="name" class="col-form-label">เพศ :</label>
      <div>
      <select class="form-control" name="gender" value="{{$people->gender_people}}">
        <option value="หญิง">หญิง</option>
        <option value="ชาย">ชาย</option>
        </select>
      </div>
    </div>
    <div class="form-group col-4">
      <label for="weight" class="col-form-label">น้ำหนัก :</label>
      <div>
      <input type="number" value="{{$people->weight_people}}" class="form-control" id="weight" name="weight" placeholder="น้ำหนัก">
      </div>
    </div>
    <div class="form-group col-4">
      <label for="height" class="col-form-label">ส่วนสูง :</label>
      <div>
      <input type="number" value="{{$people->height_people}}" class="form-control" id="height" name="height" placeholder="ส่วนสูง">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-12">
      <label for="address" class="col-form-label">ที่อยู่ :</label>
      <div>
        <textarea class="form-control" id="address" name="address" placeholder="รายละเอียด"s="3">{{$people->address_people}}</textarea>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-12">
      <label for="name" class="col-form-label">ประเภทผู้สูงอายุ :</label>
      <div>
        <select class="form-control" name="category_id">
        @foreach ($category as $value)
          <option value="{{ $value->id }}" {{ $value->id == $people->category_id ? 'selected' : '' }}> 
              {{ $value->name }} 
          </option>
        @endforeach   
        </select>
      </div>
    </div>
  </div>
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary">บันทึก</button>
  </div>
</form>
</div>
@endsection