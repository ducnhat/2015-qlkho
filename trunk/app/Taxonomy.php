<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxonomy extends Model {

    use SoftDeletes;

	protected $table = 'taxonomy';
    protected $fillable = ['name', 'type'];
    protected $dates = ['deleted_at'];

    public function scopeBrand($query){
        $query->where('type', '=', 'brand');
    }

    public function scopeType($query){
        $query->where('type', '=', 'type');
    }
}
