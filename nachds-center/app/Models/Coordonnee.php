<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Coordonnee extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'logo','email','telephone1','telephone2','adresse','fax','facebook','linkedin', 'geolocalisation','presentation','footer_logo','short_presentation',
    ];

}

