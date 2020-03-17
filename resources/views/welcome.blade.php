<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Sarabun&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <style>
    html,
    body {
      background-color: #fff;
      color: #636b6f;
      font-family: 'Sarabun', sans-serif;
      font-weight: 200;
      height: 100vh;
      margin: 0;
    }

    .full-height {
      height: 100vh;
    }

    .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
    }

    .position-ref {
      position: relative;
    }

    .top-right {
      position: absolute;
      right: 10px;
      top: 18px;
    }

    .content {
      text-align: center;
    }

    .title {
      font-size: 34px;
    }

    .links>a {
      color: #636b6f;
      padding: 0 25px;
      font-size: 13px;
      font-weight: 600;
      letter-spacing: .1rem;
      text-decoration: none;
      text-transform: uppercase;
    }

    .m-b-md {
      margin-bottom: 16px;
    }
  </style>
</head>

<body>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
    <div class="top-right links">
      @auth
      <a href="{{ url('/home') }}">Home</a>
      @else
      <a href="{{ route('login') }}">Login</a>

      @if (Route::has('register'))
      <a href="{{ route('register') }}">Register</a>
      @endif
      @endauth
    </div>
    @endif

    <div class="content">
      <div class="title m-b-md">
        ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน
      </div>
      <div>
        <h4 class="m-b-md">เทศบาลตำบลป่าเซ่า อำเภอเมือง จังหวัดอุตรดิตถ์</h4>
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
</body>

</html>