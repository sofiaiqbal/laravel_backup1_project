<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormUser extends Model
{
    use HasFactory;
    protected $table = 'form_users';
    protected $fillable =[
        'firstname',
        'lastname',
        'email',
        'phonenumber',
        'zipcode'
    ];
}
