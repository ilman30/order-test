<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XUsers extends Model
{
    use HasFactory;
    protected $primaryKey = 'user_id';

    public $incrementing = false;
    public $timestamps = false;
    protected $table    = "x_users";
    protected $fillable = [
        'user_id',
        'username',
        'full_name',
        'email',
        'phone_number',
        'password',
        'token',
        'is_login',
        'created_at',
        'updated_at'
    ];

}
