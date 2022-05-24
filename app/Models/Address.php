<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public $table = 'addresses';
    protected $fillable = ['address'];
    //protected $primaryKey = 'address_id';
    use HasFactory;
}