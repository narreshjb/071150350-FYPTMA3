<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmdinBarber extends Model
{
    protected $fillable = [
        'name',
        'b_id',
        's_time',
        'e_time',
        'duration',
        'date',
        'barber',
        'slot',
    ];


    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
