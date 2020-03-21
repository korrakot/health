<?php

namespace ระบบฐานข้อมูลติดตามสุขภาพผู้สูงอายุในชุมชน;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'prefix_people',
        'name_people',
        'surname_people',
        'gender_people',
        'birthday_people',
        'status_people',
        'address_people',
        'weight_people',
        'height_people',
        'age_people',
        'category_id',
      ];
}
