<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $fillable = [
        "name",
        "active"
    ];
    public function Project(){
        return $this->hasMany(Project::class);
    }
    public function Gallery(){
        return $this->hasMany(Gallery::class);
    }
}

