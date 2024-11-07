<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','telephone','fonction'];
    public function employe(){
        return $this->belongsTo(Employe::class);
    }
}

