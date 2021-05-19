@extends('templates.template')
@section('content')
    
    <div class="text-center mt-3 mb-4">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            @php
            $adresses = $client->find($client->id)->relAdresses;
            @endphp

                <h2>nome:  {{ $client->name}}</h2>
                <h2>email:  {{ $client->email}}</h2>
                <h2>phone:  {{ $client->phone}}</h2>
                <h2>cep:  {{ $adresses->cep}}</h2>
                <h2>estado:  {{ $adresses->state}}</h2>
                <h2>cidade:  {{ $adresses->city}}</h2>
                <h2>rua:  {{ $adresses->street}}</h2>
                <h2>bairro:  {{ $adresses->district}}</h2>
                <h2>numero:  {{ $adresses->number}}</h2>
                        
                   
                          
                                      
                         
                     
            </div>
  </tbody>
</table>
   
@endsection
