<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'no_hp' , 'email' , 'password'];

    public function showrooms()
    {
        return $this->hasMany('App\Models\showrooms', 'id');
    }
}