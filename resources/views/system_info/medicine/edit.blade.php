@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-8 align-self-center">
        <h5 style="margin-bottom: -5 ">
        เพิ่มข้อมูลยา
        </h5>
      </div>
    </div>
  </div>
</div>
</br>
<form method="post" action="{{ route('medicine.update', $medicines->id) }}">
@method('PATCH')  
  @csrf
  <div class="form-group row">
    <label for="name" class="col-sm-4 col-form-label text-right">ชื่อยา :</label>
    <div class="col-sm-6">
    <input type="text" class="form-control" id="name" name="name" placeholder="ระบุสิทธิ์" value="{{ $medicines->name }}" >
    </div>
  </div>
  <div class="form-group row">
    <label for="detail" class="col-sm-4 col-form-label text-right">รายละเอียด :</label>
    <div class="col-sm-6">
      <textarea class="form-control" id="detail" name="detail" placeholder="รายละเอียด" rows="3">{{ $medicines->detail }}</textarea>
    </div>
  </div>
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary text-right">แก้ไข</button>
  </div>
</form>
</div>
@endsection