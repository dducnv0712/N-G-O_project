<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailNews extends Model
{
    use HasFactory;
    protected $table = "mails_news";
    protected $fillable = [
        "name",
        "email"
    ];
}
