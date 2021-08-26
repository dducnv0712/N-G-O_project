<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;
    protected $table = "contributions";
    protected $fillable = [
        "id_cus",
        "contribute_id",
        "full_name",
        "messages",
        "email",
        "contribute_amount",
        "country",
        "id_post",
        "status"
    ];
    public function Post(){
        return $this->belongsTo(Post::class ,'id_post');
    }

}
