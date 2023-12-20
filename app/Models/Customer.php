<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_customer';

    protected $fillable = [
        'customer_name',
        'customer_phone',
        'customer_address',
        'customer_username',
        'customer_password',
    ];
    public $timestamps = false;
}
