<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Payement extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'inscription_id', 'num', 'montant', 'created_at', 'updated_at', 'deleted_at', 'carnet_id', 'observation', 'slug', 'date_paiement', 'periode', 'approuve','	justification'
    ];
}
