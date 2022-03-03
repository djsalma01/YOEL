<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=['title','description','start','end','allday','color','textColor'];

   // use HasFactory;
}
