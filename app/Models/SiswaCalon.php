<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaCalon extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function hasil()
    {
        return $this->hasOne(Hasilspk::class);
    }
}
