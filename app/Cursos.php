<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model 
{
    protected $fillable = ['name', 'description', 'body', 'price'];
}