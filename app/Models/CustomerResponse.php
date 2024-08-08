<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerResponse extends Model
{
    use HasFactory;

    protected $table = 'customer_response';
    protected $fillable = ['will_come', 'name', 'email', 'number_of_guest', 'guestOf', 'message'];


}
