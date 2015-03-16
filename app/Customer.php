<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model {

	use SoftDeletes;
    protected $table = 'customer';
    protected $fillable = ['name', 'type', 'address', 'phonenumber', 'email'];
    protected $dates = ['deleted_at'];

    public function scopeCustomer($query){
        $query->where('type', '=', 'customer');
    }

    public function scopeSupplier($query){
        $query->where('type', '=', 'supplier');
    }

}
