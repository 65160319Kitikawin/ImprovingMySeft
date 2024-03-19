<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custormers extends Model
{
    use HasFactory;

    protected $table = 'custormers';
    protected $primarykey = "cus_id";
    public $incrementing = true;
    public $timestamps = false;
}
