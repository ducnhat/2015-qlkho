<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model {

	use SoftDeletes;
    protected $table = 'products';
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];

    public function scopeAllProduct($query){
        $query->select('products.id', 'products.product_name', 'products.name', 'products.price', 'tb.name as brand', 'tt.name as type')
            ->leftJoin('taxonomy as tb', 'products.brand', '=', 'tb.id')
            ->leftJoin('taxonomy as tt', 'products.type', '=', 'tt.id');
    }
}
