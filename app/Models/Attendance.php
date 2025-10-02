<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Attendance extends Model
{
    use HasFactory;

    protected $table = 'attendance_log';

    protected $primaryKey = 'id';

    protected $fillable = [
        'employee_id', 'attendance_id', 'created_at', 'updated_at',
    ];

}
