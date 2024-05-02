<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'customer_id',
        'starting_date',
        'ending_date',
        'category_id'
       
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function members(){
        return $this->hasMany(Member::class);
    }
      
}
