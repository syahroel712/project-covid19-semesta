<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = "tb_user";
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_nama', 
        'user_email', 
        'user_notelp', 
        'user_alamat', 
        'user_tempat_vaksin', 
        'user_status', 
    ];
}
