<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipeRumah extends Model
{
    protected $table = 'msTipeRumah';
    protected $fillable = ['nama', 'harga_sewa', 'terbilang', 'created_at', 'updated_at'];
}
