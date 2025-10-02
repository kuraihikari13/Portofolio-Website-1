<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class ItemModel extends Model
{
    use HasFactory;

    protected $table = 'item_details';

    protected $primaryKey = 'item_id';

    protected $fillable = [
        'item_name', 'item_base_price', 'item_sale_price'
    ];
}
