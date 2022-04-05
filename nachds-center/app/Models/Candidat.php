<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Candidat extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'slug', 'birthday', 'etude', 'classe', 'diplome', 'etat_payement', 'profession', 'phone2', 'parent_id', 'observation', 'nationalite', 'lieu_naissance', 'passeport', 'cin_delivre', 'passeport_delivre', 'ecole', 'genre', 'age', 'prenom', 'nom',
    ];

}




 