<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];
        
  

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function requested_contributions(){
        return $this->hasMany(RequestedContribution::class, 'project_id');
    }

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'project_technology');
    }
}
