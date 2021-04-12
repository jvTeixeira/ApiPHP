<?php


namespace App\Models\Cozinha;


use Illuminate\Database\Eloquent\Model;

class Cozinha extends Model
{
    protected $table = "Cozinha";
    protected $fillable = [
        'id',
        'horaFechamento',
        'horaAbertura'
        ];
}
