<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'shop_employee';

    protected $primaryKey = 'id';

    protected $fillable = [
        'shop_id', 'name', 'phone', 'address',
    ];
}
