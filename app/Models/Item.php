<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'item';
    use HasFactory;
    public function satuan()
    {
        return $this->hasOne(Satuan::class, 'id', 'satuan_id');
        return $this->hasMany(Satuan::class);
    }
}
