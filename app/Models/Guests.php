<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guests extends Model
{
    protected $table = 'guests';
    protected $fillable = ['id_invitation','name','link','status','phone'];
    use HasFactory;
}
