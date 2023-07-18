<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $fillable=[
        //'status',
        //'user_Id',
        'name',
        'secondname',
        'phone',
        'email',
        'address',
        'menu_Id',
        'quantity',
    ];

    //creation de la relation avec la table user
    /*public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }*/
    public function menu()
    {
        return $this->belongsTo(Menu::class,'menu_Id');
    }
}
