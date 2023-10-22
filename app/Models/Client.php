<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;


    public static function boot()
    {
        parent::boot();

        static::creating(function ($client) {
            $client->datecreated = date('Y-m-d');
            $client->password = Hash::make($client->password);
        });
    }
}
