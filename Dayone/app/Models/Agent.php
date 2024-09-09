<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'agency_name',
        'phone',
        'kra_pin',
        'license_path',
        'reg_certificate_path',
        'contact_person_name',
        'contact_person_email',
        'contact_person_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
