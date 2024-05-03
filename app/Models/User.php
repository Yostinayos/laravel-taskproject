<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    // protected $append=['tasks'];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'phone2'
    ];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    public function  projects()
    {
        return $this->hasMany(Project::class);
    }
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class, 'role', 'role');
    }

    public function members(){
        return $this->hasMany(Member::class);
    }
    public function taskMembers(){
        return $this->hasMany(TaskMember::class);
    }
    
}
