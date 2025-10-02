<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Models\ItemModel;

class ItemController extends Controller
{
    public function insertItem(Request $request)
    {
        $insert_item = ItemModel::create([
            'item_name' => $request->item_name,
            'item_base_price' => $request->item_base_price,
            'item_sale_price' => $request->item_sale_price,
        ]);

        return redirect('item-table');
    }

    public function deleteItem($id)
    {
        $delete_item = ItemModel::find($id);

        $delete_item->delete();

        return redirect('item-table');
    }

    public function updateItem(Request $request, $id)
    {
        $item = ItemModel::findOrFail($id);

        $item->update([
            'item_name' => $request->item_name,
            'item_base_price' => $request->item_base_price,
            'item_sale_price' => $request->item_sale_price,
        ]);

        return redirect('item-table');
    }

}
