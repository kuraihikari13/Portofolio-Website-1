<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Restock extends Model
{
    use HasFactory;

    protected $table = 'restock_request';

    protected $primaryKey = 'req_id';

    protected $fillable = [
        'shop_id', 'approved', 'created_at', 'updated_at',
    ];

}
