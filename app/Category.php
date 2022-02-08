<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    public function clothes()   
    {
        return $this->hasMany('App\Clothe');
    }
    
    public function getByCategory(int $limit_count = 9){
        return $this->clothes()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
}