<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LDAP\Result;

class Application extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function applicant()
    {
        return $this->belongsToMany(User::class);
    }

    public function receiver()
    {
        return $this->belongsToMany(User::class);
    }
}
