<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'price',
        'description',
        //'status',
    ];

    //creation de la relation avec la table Command
    public function command()
    {
        return $this->hasMany(Command::class,'menu_id');
    }
}
