<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use App\Models\Orders;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrdersLines extends Model
{
    use HasFactory;
    protected $table = 'orders_line';
    protected $primaryKey = 'ID';
    protected $fillable = ['order_id', 'qty', 'product_id'];
    
    static public function calcularCosteTotal() {
        $result = DB::table('orders_lines')
        ->join('orders', 'orders_lines.order_id', '=', 'orders.ID')
        ->join('products', 'orders_lines.product_id', '=', 'products.ID')
        ->select(DB::raw('orders_lines.ID, orders.order_ref, orders.customer_name, orders_lines.qty, (orders_lines.qty * products.cost) as total'))
        ->get();

        return $result;
    }
}
