<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_user',
        'name',
        'desc',
        'category',
        'image_file',
        'status'
    ];
}
