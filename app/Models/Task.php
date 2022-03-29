<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Models\User;
class Task extends Model
{    
    protected $fillable = ['id','description'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

	  
}
