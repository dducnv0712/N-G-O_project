<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $fillable = [
        'title',
        'image',
        'author',
        'approval',
        'contribute',
        'active',
        'important',
        'send_mail',
        'category_id',
        'description',
        'content'
    ];

    public function getImage(){
        if($this->image){
            return asset($this->image);
        }
        return "";
    }
    public function Category(){
        return $this->belongsTo(Category::class);
    }
    public function Post(){
        return $this->hasMany(Contribution::class);
    }
    public function scopeSearch($query,$search){
        if($search == "" || $search == null){
            return $query;
        }
        return $query->where("title","LIKE","%$search%");
    }
    public function scopeCategory($query,$categoryId){
        if($categoryId==0 || $categoryId == null){
            return $query;
        }
        return $query->where("category_id",$categoryId);
    }


}
