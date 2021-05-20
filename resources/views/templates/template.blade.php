<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    

   <link  rel="stylesheet" href="{{url("assets/css/dashboard.css")}}">
  
    
   <title>Polo Bemol</title>
</head>
<body>
<header>
        <div class="user">
            <h3 class="name">Polo Bemol</h3>
            <p class="post">sistema de gerenciamento de comunicação com clientes </p>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="{{url('clients')}}">Clientes</a></li>
                <li><a href="{{url('clients/create')}}">Cadastrar Clientes</a></li>
                <li><a href="{{url('email')}}">Enviar Emails</a></li>
                
            </ul>
            <div class="footer">
                <p class="name"> POLO SERIA O DEUS DOS VENTOS : MENSAGEIRO DE TUPÃ</p>
            </div> 
        </nav>     
    </div>
</header>
    

    <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4 mt-5">
      @yield('content')
    
   
    
    <script src="{{url("assets/js/delete.js")}}"></script>
    <script src="{{url("assets/js/cep.js")}}"></script>
    <script src="{{url("assets/js/fill.js")}}"></script>

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>