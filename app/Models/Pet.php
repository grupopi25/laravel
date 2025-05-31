<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User; 
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
  public function cliente()
{
    return $this->belongsTo(User::class, 'user_id');
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
