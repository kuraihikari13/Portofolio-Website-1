<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class EmployeeAttendanceCheck extends Model
{
    use HasFactory;

    protected $table = 'shop_employee_attendance_check';

    protected $primaryKey = 'id';

    protected $fillable = [
        'shop_id', 'employee_id', 'created_at', 'updated_at'
    ];
}
