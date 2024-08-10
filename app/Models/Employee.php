<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'dni',
        'first_name',
        'last_name',
    ];

    public function payrolls()
    {
        return $this->belongsToMany(Payroll::class);
    }

}
