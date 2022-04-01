<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Inscription extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'candidat_id', 'formation_id',	'session_id', 'niv_id', 'groupe_id', 'prix_total',	'prix_acompte',	'etat_payement', 'gratuite', 'num_bon_formation', 'slug', 'note', 'ordre'
    ];
}


