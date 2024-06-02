<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrderModel extends Model
{
    use HasFactory;
    protected $table = 'data_order';
    protected $guarded = ['id'];
    public $timestamps = false;
}
