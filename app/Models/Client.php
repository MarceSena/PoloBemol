<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
   protected $table = 'clients';
   protected $fillable = [
       'name', 'email', 'phone'
   ];



   public function  relAdresses(){
    //return $this->hasOne(Clients::class);
    return $this->hasOne(related:'App\Models\ClientAdresse', foreignKey:'client_id');
   
    
}
}