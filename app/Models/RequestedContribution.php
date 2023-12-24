<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestedContribution extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function contributions(){
        return $this->hasMany(Contribution::class, 'requested_contribution_id');
    }

    //! I'm not sure if this relationship is right

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
  
}
