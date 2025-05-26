<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'species',
        'breed',
        'color',
        'gender',
        'birth_date',
        'weight',
        'client_id',
        'user_id',
    ];

    // Relação com o dono (cliente)
    public function client()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relação com o usuário (quem cadastrou ou atende)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pets()
{
    return $this->hasMany(Pet::class);
}

}
