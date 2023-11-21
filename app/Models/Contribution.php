<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribution extends Model
{
    use HasFactory;


    public function requestedContribution(){
        return $this->belongsTo(RequestedContribution::class, 'requested_contribution_id');
    }

    public function contributor(){
        return $this->belongsTo(User::class, 'contributor_id');
    }
}
