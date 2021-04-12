<?php


namespace App\Models\Ingredientes;


class Ingredientes
{
    protected $table = "Ingredientes";
    protected $fillable = [
        'id',
        'nome',
        'dataValidade'
    ];
}
