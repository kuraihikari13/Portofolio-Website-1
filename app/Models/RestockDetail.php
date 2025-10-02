<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class RestockDetail extends Model
{
    use HasFactory;

    protected $table = 'restock_details';

    protected $primaryKey = 'id';

    protected $fillable = [
        'req_id', 'item_id', 'req_stock', 'created_at', 'updated_at',
    ];

}
