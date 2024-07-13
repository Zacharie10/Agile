<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'start_date', 'end_date' ];

    // public function sprints()
    // {
    //     return $this->hasMany(Sprint::class);
    // }

    // public function userStories()
    // {
    //     return $this->hasMany(UserStory::class);
    // }
    public function members()
{
    return $this->belongsToMany(User::class, 'project_user', 'project_id', 'user_id');
}
public function isAdmin(User $user)
    {
        // Implémentez la logique pour vérifier si l'utilisateur est un administrateur du projet
        return $this->admin_id === $user->id;
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'project_user')->withPivot('role');
    }
}

