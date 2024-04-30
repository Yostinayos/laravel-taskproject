<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        
        'category_id',
        'project_id',
       
       'starting_date',
       'ending_date'];
        
        public function category(){
            return $this->belongsTo(Category::class);
        }
        public function project(){
            return $this->belongsTo(Project::class);
        }
}
