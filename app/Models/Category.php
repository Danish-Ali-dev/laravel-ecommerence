<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function sub_categories(){
        return $this->hasMany(SubCategory::class)->where('status', 1)->where('showHome', 'Yes');
    }
}
