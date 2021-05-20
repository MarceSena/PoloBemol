@extends('templates.template')

@section('content')
<div class="create">
    <div class="container">
      <div class="col-md-6 jumbotrin mx-auto">
        <form action="{{url('email')}}" method='POST'class="action">
            {{ csrf_field()}}
            <div class="form-group">
              <h1>Envie uma mensagem ao Cliente</h1>
            </div>
            @if(count($errors) > 0)
            <div class="alert alert-danger" role="alert">
                  <strong>Preencha todos os dados!</strong>
                  <ul>
                    @foreach($errors -> all() as $error)
                  <li>{{$error}}</li>
                    @endforeach
                  </ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </button>
                </div>
            @endif
           
            @if($message = Session::get('sucess'))
            <div class="alert alert-success" role="alert">
                  <strong>Mensagem enviada com sucesso!</strong>{{$message}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            
            @endif()
            @if($message = Session::get('error'))
           
            <div class="alert alert-danger" role="alert">
                  <strong>OOOPS!</strong> {{$message}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
            </div>

            @endif()
            <label for="email" class="form-label">Nome do Cliente</label>
            <select class="form-select" aria-label="Default select example" name="select" id="select">
                @foreach($client as $clients)
                    <option value="name" data-email="{{$clients->email}}" class="form-label">{{$clients->name}}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name ="sendEmail" class="form-control" id="sendEmail" placeholder="name@example.com">
                
              </div>

  
              <div class="mb-3">
                <label for="message" class="form-label">Mensagem</label>
                <textarea class="form-control" name ="message" id="message" rows="3"></textarea>
              </div>
            
            <button type="submit" class="btn btn-primary btn-lg"  >ENVIAR</button>
        </form>

      </div>
    </div>
  </div>
 
@endsection
