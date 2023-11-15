<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    public function role()
    {
        // Define your logic for retrieving the user's role here.
        // For example, if the user has a 'role' column in the users table:
        return $this->attributes['role'];
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
