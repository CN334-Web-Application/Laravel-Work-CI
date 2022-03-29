<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Models\User;
class Task extends Model
{    
    protected $fillable = ['id', 'description', 'goal_date'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

	  
}
