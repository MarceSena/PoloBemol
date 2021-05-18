@extends('templates.template')
@section('content')
    
    <div class="text-center mt-3 mb-4">
    <a href="" >
                <button class="btn btn-success">crete</b>
                </a>
    </div>
    
    <div class = "col-8 m-auto">
   <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">CEP</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($client as $Clients)
        @php
            $adresse = $client->find($adresse->cep)-relUsers;
        @endphp
        <tr>
            <th scope="row">{{$client ->id}}</th>
            <td>{{$client->name}}</td>
            <td>{{$client->email}}</td>
            <td>@{{$adresse->cep}}</td>
            <td>
                <a href="" class="">
                <button class="btn btn-dark">Read</b>
                </a>
                <a href="" class="">
                <button class="btn btn-primary">Updade</b>
                </a>
                <a href="" class="">
                <button class="btn btn-danger">deletar</b>
                </a>
            </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
   
@endsection
