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
        'contribute',
        'active',
        'important',
        'send_mail',
        'category_id',
        'description'
    ];

    public function getImage(){
        if($this->image){
            return asset($this->image);
        }
        return "";
    }
}
