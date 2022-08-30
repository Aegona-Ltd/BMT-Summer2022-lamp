<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Savecontact extends Model
{
    use HasFactory;
    protected $table ='savecontacts';
    protected $fillable =['name','email','subject','content'];
}
