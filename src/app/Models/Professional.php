<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Professional extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $hidden = [
        'crm'
    ];

    public function address()
    {
        $this->belongsTo(Address::class);
    }
}
