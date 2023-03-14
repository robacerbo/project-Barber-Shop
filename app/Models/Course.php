<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'stylist',
        'level',
        'price',
        'startdate',
        'certificate',
        'coverimg',
        'user_id',
    ];

    //UNA CONSOLE PUO' ESSERE RELAZIONATA AD UN SOLO UTENTE
    public function user(){
        return $this->belongsTo(User::class);
    }

}
