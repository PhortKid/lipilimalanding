<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineBooking extends Model
{
    use HasFactory;

    protected $table='online_booking';
    public $primarykey='id';
    public $timestamp =true;
}
