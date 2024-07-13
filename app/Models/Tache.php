<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'projet_id', 'intitule', 'description', 'responsable_id', 'date_debut', 'date_fin', 'statut', 'type'
    ];

    public function projet()
    {
        return $this->belongsTo(Project::class, 'projet_id');
    }

    public function responsable()
    {
        return $this->belongsTo(User::class, 'responsable_id');
    }
}
