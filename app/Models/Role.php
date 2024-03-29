<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class Account extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table="role";
    protected $primarykey="id";
    protected $fillable = ["name", "slug"];
    
    public $timestamps = false;

    public function users(){
        return $this->hasMany(Account::class);
    }
}