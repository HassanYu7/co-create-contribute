<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function requested_contributions(){
        return $this->hasMany(RequestedContribution::class, 'role_id');
    }
}
