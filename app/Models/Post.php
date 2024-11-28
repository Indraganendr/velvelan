<?php

// Namespace ini berfungsi untuk menyimpan kelas ke dalam folder yang spesifik agar tidak bentrok dengan file yang namanya sama 
namespace App\Models; 

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'author', 'slug', 'body'];
}