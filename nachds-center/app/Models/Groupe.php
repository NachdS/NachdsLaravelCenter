<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Groupe extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'designation', 'capacite', 'formation_id', 'session_id', 'niv_id', 'enseignant_id', 'slug', 'from', 'salle', 'ecole', 'duree_seance'
    ];
}
