<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dmphucap extends Model
{
    protected $table = 'dmphucap';
    protected $fillable = [
        'id',
        'stt',
        'mapc',
        'tenpc',
        'baohiem',
        'thaisan',
        'nghiom',
        'dieudong',
        'thuetn',
        'tapsu',
        'form', //tiêu đề trên Form
        'report', //tiêu đề trên Report
        'phanloai',
        'congthuc',
        'tonghop',
        'dutoan',
        'pccoso',
        'ghichu'
    ];
}
/*các modul tính toán phụ cấp*/
/*chú ý các loại phụ cấp có tính bảo hiểm, ko tính bảo hiểm, và lên dự toán*/
