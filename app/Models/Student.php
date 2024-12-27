<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //protected $table = 'students';//table
    // why is this one commented
    // why is this one commented

    //protected $primaryKey = 'id';//cle primaire
    //protected $fillable = ['name', 'address', 'mobile'];//other champs
    use HasFactory;

}
