@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10">
            <div style="text-align: center; padding-top: 30px">
                <div>
                    <h5>บันทึกล่าสุด วันที่ 1 เมษายน พ.ศ. 2561</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ผู้สูงอายุ</th>
                                <th scope="col">จำนวน (คน)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>เพศชาย</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <td>เพศหญิง</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>รวมทั้งหมด</td>
                                <td>85</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection