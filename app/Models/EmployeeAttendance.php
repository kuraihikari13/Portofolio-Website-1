<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class EmployeeAttendance extends Model
{
    use HasFactory;

    protected $table = 'shop_employee_attendance';

    protected $primaryKey = 'id';

    protected $fillable = [
        'shop_id', 'date_clock_in', 'created_at', 'updated_at',
    ];

}
