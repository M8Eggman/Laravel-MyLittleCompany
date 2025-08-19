<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'numero_telephone', 'email', 'poste', 'role', 'salaire', 'photo'];
}
