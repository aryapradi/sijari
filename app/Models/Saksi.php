<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saksi extends Model
{
    protected $fillable = ['nama_saksi', 'koordinator_id'];

    public function koordinator()
    {
        return $this->belongsTo(Koordinator::class);
    }
}
