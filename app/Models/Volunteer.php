<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;
    protected $table = "volunteers";
    protected $fillable = [
        "image",
        "name",
        "email",
        "phone",
        "address",
        "office",
        "education",
        "introduce",
        "birthday",
        "occupation",
        "messages",
        "approval",
        "important"
    ];
}
