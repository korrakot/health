@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-8 align-self-center">
        <h5 style="margin-bottom: -5 ">
        การติดตามจากบันทึกสุขภาพ
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
</div>
@endsection