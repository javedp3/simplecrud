<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //$product = Product::paginate(15);
    protected $table = 'product';
    protected $guarded = [];
    protected $fillable = ['name','qty','prize','description'];

	/**
	 * @return mixed
	 */
	public function getGuarded() {
		return $this->guarded;
	}
}
