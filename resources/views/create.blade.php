@extends('templates.template')
@section('content')
    <h1 class="text-center">@if(isset($clients))EDITAR @else Cadastrar @endif</h1>
    <div class="col-8 m-auto">
    

    @if(isset($clients))
    @php
            $adresses = $clients->find($clients->id)->relAdresses;
    @endphp
    <form name="formEdit" id="formEdit" method="post" action="{{url("clients/$clients->id")}}">
    @method('PUT')
    @else 
    
    <form name="formClient" id="formClient" method="post" action="{{url('clients')}}">
    
    @endif
            
            @csrf 
            <input class="form-control" type="text" name="name" id="name" placeholder="nome completo" required value="{{$clients->name ?? ''}}"></imput>
            <input class="form-control" type="email" name="email" id="email" placeholder="email" required value="{{$clients->email ?? ''}}"></imput>
            <input class="form-control" type="phone" name="phone" id="phone" placeholder="phone" required value="{{$clients->phone ?? ''}}"></imput>
        
            <!-- Inicio do formulario -->
            <input class="form-control" name="cep" type="text" id="cep" value="" size="10" maxlength="9"  placeholder="000000-00" required value="{{$clients->cep ?? ''}}" ></imput>
            <input class="form-control" name="street" type="text" id="street" size="60"  placeholder="rua beija flor" required value="{{$adresses->street  ?? ''}}" ></imput>
            <input class="form-control"name="district" type="text" id="district" size="40"  placeholder="bairro bentivi" required value="{{$adresses->district  ?? ''}}" ></imput>
            <input class="form-control" name="city" type="text" id="city" size="40" placeholder="cidae Andorinha" required value="{{$adresses->city ?? ''}}" ></imput>
            <input class="form-control" name="number" type="number" id="number" size="40" placeholder="42" required value="{{$adresses->number ?? ''}}" ></imput>
            <input class="form-control" name="state" type="text" id="state" size="2" placeholder="Amazonas" required value="{{$adresses->state ?? ''}}"></label></imput>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary" value="">@if(isset($clients))EDITAR @else Cadastrar @endif</button>
            </div>
            </form>

    </div>
   
   
@endsection
