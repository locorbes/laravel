<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $fillable = [
        'full_name',
        'dni',
        'business_name',
        'cuit',
        'email',
        'occupation',
        'currently_working',
        'apply_for_motorbike',
        'address',
        'city',
        'postal_code',
        'neighborhood',
        'between_streets',
        'coordinates',
        'previous_address',
    ];
}
