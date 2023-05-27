<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    
    public function customer(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    { 
        return $this->belongsTo(Customer::class);
    }
}
