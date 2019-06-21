<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    protected $table = 'student';
    protected $fillable = ['username','password','branch','address','email','ca','tch','perc'];
    protected $PrimaryKey = 'usn';
}
