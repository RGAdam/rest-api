<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    protected $guarded = [];

    protected $fillable = [
        'student_id',
        'street_name',
        'street_number',
        'zip',
        'city',
        'sibling_num',
    ];
}
