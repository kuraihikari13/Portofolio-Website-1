<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class ShopModel extends Model
{
    use HasFactory;

    protected $table = 'shop_details';

    protected $primaryKey = 'shop_id';

    protected $fillable = [
        'name', 'phone', 'email', 'luas', 'modal', 'listrik', 'staff', 'lokasi', 'address', 'tier'
    ];

    /*protected function setKeysForSaveQuery(Builder $query)
    {
        return $query->where('shop_id', $this->getAttribute('shop_id'));
    }
*/

}
