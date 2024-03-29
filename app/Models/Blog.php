<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $primaryKey = 'id';
    protected $fillable =['title','image', 'description','created_at','updated_at'];
    public $timestamps = true;
}
