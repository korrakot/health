<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน;

use Illuminate\Database\Eloquent\Model;

class Patent extends Model
{
    protected $fillable = [
        'name',
        'detail',
      ];
}
