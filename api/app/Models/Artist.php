<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Domains\Traits\FilterableBuilder;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'artist_name',
        'fee',
        'event_date',
        'address',
    ];
}
