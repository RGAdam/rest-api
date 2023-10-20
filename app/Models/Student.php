<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function addresses()
    {
        return $this->hasOne(Address::class);
    }

    protected $guarded = [];

    protected $fillable = [
        'first_name',
        'last_name',
        'sign',
        'group',
        'age',
    ];
}
