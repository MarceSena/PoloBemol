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
                <li><a href="#sobre">Sobre</a></li>
            </ul>
        </nav>

        
    </div>
    </header>
    <main class="col-md-8 ms-sm-auto col-lg-9 px-md-4 mt-5">
      @yield('content')
    
   
    
    <script src="{{url("assets/js/delete.js")}}"></script>
    <script src="{{url("assets/js/cep.js")}}"></script>
    <!-- jquery cdn link  -->

<!-- custom js file link  -->
</body>
</html>