<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = "gallery";
    protected $fillable = [
        'title',
        'image',
        'active',
        'author',
        'approval',
        "category_id"
    ];
    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
