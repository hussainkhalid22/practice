<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    // use HasFactory;
   
    // protected $table = 'logins'; // Specify the table name if it's not the default 'logins'
    // protected $primaryKey = 'id'; // Specify the primary key if it's not 'id'

    use HasUuids;

    protected $fillable = ['email', 'password'];
  
}
$login = Login::create([
   'email' => 'Paxha@gmail.com',
   'password' => 'P@ssowrd123'
]);
$login->id; // "8f8e8478-9035-4d23-b9a7-62f4d2612ce5"