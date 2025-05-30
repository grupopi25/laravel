<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class cliente extends Model
{
    use HasFactory;
    protected $fillable =[
        'nome',
        'email',
        'telefone',
    ];
    public function users() {
        return $this->hasMany(User::class,'cliente_id');
    }
}
