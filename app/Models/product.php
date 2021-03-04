<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{    
    use HasFactory;
    protected $primaryKey = 'Product_ID';
    public $incrementing = false;
    protected $keyType = 'string';
}
