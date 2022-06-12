<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function coa(){
        return $this->belongsTo(Coa::class, 'coa_id', 'id');
    }
}
