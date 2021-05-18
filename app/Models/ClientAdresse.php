<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAdresse extends Model
{
    protected $table = 'client_adresses';

    public function  relClient(){
        return $this->hasOne(ClientAdresse::class);
}
}
