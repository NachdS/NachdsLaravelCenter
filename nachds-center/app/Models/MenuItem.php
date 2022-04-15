<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MenuItem extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'menu_id', 'title', 'url', 'target', 'icon_class', 'color', 'parent_id', 'order', 'created_at', 'updated_at', 'route', 'parameters'
    ];

    public function menus(){
        return $this->belongsTo(Menu::class);
    }
}
