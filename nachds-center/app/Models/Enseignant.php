<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Enseignant extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'name', 'phone', 'adresse', 'email', 'cin', 'specialite', 'created_at', 'updated_at', 'deleted_at', 'type', 'genre', 'cin_delivre','image',
    ];

}
