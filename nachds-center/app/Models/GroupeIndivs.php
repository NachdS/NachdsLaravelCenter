<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class GroupeIndivs extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'designation', 'candidat_id', 'matiere_id', 'niveau_id', 'date_debut', 'duree', 'prix_total', 'observation', 'prix_acompte', 'etat_paiement', 'created_at', 'updated_at', 'prix_heure'
    ];
}
