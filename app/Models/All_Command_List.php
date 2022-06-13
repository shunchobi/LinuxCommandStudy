<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class All_Command_List extends Model
{
    // use HasFactory;
    protected $fillable=['id','iscommand', 'command', 'howtouse', 'process'];
}