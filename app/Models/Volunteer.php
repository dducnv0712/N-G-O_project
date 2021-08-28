<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $table = "volunteers";
    protected $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "birthday",
        "occupation",
        "messages",
    ];
}
