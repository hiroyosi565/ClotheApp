<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clothe extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'brand',
        'cost',
        'body',
        'favorite',
        'bought_at',
        'category_id',
        'image_path',
        'user_id',
    ];

    public function getPaginateByLimit(int $limit_count = 9)
    {
        return $this::with('category','user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
