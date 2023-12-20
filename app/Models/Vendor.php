<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_vendor';

    protected $fillable = [
        'vendor_name',
        'vendor_type',
        'vendor_admin',
        'vendor_phone',
    ];
    public $timestamps = false;
}
