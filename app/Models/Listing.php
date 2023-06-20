<?php
namespace App\Models;
// namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $table = 'listings';

    protected $fillable = [
        'name',
        'location',
        'price',
        'rating',
        'reviews',
        'image',
        'modelId',
        'details',
    ];
}
