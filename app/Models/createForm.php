<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createForm extends Model
{
    use HasFactory;
    protected $table= "quesdata";
    public $timestamps= false;
    
    //protected $fillable= ['form_id', 'name'];
}
