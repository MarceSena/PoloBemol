@extends('templates.template')
@section('content')
    
    <div class="text-center mt-3 mb-4">
    <a href="{{url('clients/create')}}">
                <button class="btn btn-success">create</button>
                </a>
    </div>
    
    <div class = "col-8 m-auto">
    @csrf 
   <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">City</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($client as $clients)
        @php
          $adresses = $clients->find($clients->id)->relAdresses;
        @endphp
        <tr>
            <th scope="row">{{$clients->id}}</th>
            <td>{{$clients->name}}</td>
            <td>{{$clients->email}}</td>
            <td>{{$adresses->city}}</td>
            <td>
                <a href="{{url("clients/$clients->id")}}" class="">
                <button class="btn btn-dark">Read</button>
                </a>
                <a href="{{url("clients/$clients->id/edit")}}" class="">
                <button class="btn btn-primary">Updade</button>
                </a>
                <a href="{{url("clients/$clients->id")}}" class="js-del">
                <button class="btn btn-danger">Deletar</button>
                </a>
            </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
   
@endsection
