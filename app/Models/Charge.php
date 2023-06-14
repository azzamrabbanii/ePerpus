<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Charge extends Model
{
    use HasFactory;
    protected $table = 'denda';
    protected $guarded = [];

    public function customer() {
        return $this->belongsTo(Customer::class, 'id_customers', 'id');
    }
}
