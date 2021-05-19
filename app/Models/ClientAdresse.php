<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAdresse extends Model
{
    protected $table = 'client_adresses';

    protected $fillable = [
            'cep',
            'state',
            'city',
            'street',
            'district',
            'number',
            'client_id'
           
    ];

    public function  relClients(){
        //return $this->hasOne(Clients::class);
        return $this->hasOne(related:'App\Models\Client', foreignKey:'id',localKey:'client_id' );
      
}
}
