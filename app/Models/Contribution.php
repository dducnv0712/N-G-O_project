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
        "given_name",
        "surname",
        "email",
        "contribute_amount",
        "country",
        "id_post",
        "status"
    ];
}
