<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{

    protected $table = 'tenants';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'address', 'mobile', 'total_paid'];


    use HasFactory;
}
