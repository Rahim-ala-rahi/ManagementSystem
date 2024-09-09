<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'phone', 'kra_pin', 'id_no'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
