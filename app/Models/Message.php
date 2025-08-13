<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
     protected $fillable = ["nom", "prenom", "tel", "mail", "sujet", "message"];
}
