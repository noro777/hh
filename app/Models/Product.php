<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * @param $query
     */
    public function scopeAvailable($query)
    {
        $query->where('status', 'available');
    }

    /**
     * @var array
     */
    protected $fillable = [
        "name", "article"
    ];

    protected $casts = [
        'data' => 'array'
    ];

}
