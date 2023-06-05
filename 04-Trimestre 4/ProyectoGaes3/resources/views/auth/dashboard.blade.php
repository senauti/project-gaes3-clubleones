{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


<link rel="stylesheet" href="{{ asset('css/Style.css') }}">

<title>Club Leones</title>
</head>
<body>
<header class="barranavegacion">
  <div class="circulo"></div>
    <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{url('/Dashboard')}}">Club Leones</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
           
            </ul>
          </div>
        </div>
      </nav>    
    </div>
</header>

<div class="todo">
    <div class="dashboard"><!-- Aquí empieza el codigo del menu lateral -->
        <div class="lateral">
        <div class="accordion " id="accordionExample">
    
    
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Campeonatos
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/CrearCampe')}}" class="list-group-item list-group-item-action">Crear campeonato</a>
                    <a href="{{url('/CrearProgra')}}" class="list-group-item list-group-item-action">Crear programación</a>
                    <a href="{{url('/AgregarEqui')}}" class="list-group-item list-group-item-action">Agregar equipos</a>
                    <a href="{{url('/Partidos')}}" class="list-group-item list-group-item-action">Partidos</a>
                    
                  </div>    
                        </div>
              </div>
            </div>
    
    
    
    
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Acondicionamiento físico
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/VerPerfiles')}}" class="list-group-item list-group-item-action">Revisar perfiles</a>
                    <a href="{{url('/RegistrarTest')}}" class="list-group-item list-group-item-action">Registrar test</a>
                    <a href="{{url('/RegistrarPlan')}}" class="list-group-item list-group-item-action">Registrar plan</a>
                    
                  </div>           </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Entrenamientos
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/RegistrarEntre')}}" class="list-group-item list-group-item-action">Registrar entrenamientos</a>
                    <a href="{{url('/VerEntre')}}" class="list-group-item list-group-item-action">Ver entrenamientos</a>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="contenido1">
        

    <div class="contenido">
        <h1>Bienvenido [nombre y apellido]</h1>
        <h3>En esta sección podrás encontrar toda la información respecto
           a los próximos entrenamientos a realizar y demás cosas </h3>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>


<link rel="stylesheet" href="{{ asset('css/Style.css') }}">

<title>Club Leones</title>
</head>
<body>
<header class="barranavegacion">
  <div class="circulo"></div>
    <div>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand" href="{{url('/dashboard')}}">Club Leones</a>
{{-- boton de log out --}}
          <a class="navbar-link" href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           Logout
        </a>
        
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>


          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
           
            </ul>
          </div>
        </div>
      </nav>    
    </div>
</header>

<div class="todo">
    <div class="dashboard"><!-- Aquí empieza el codigo del menu lateral -->
        <div class="lateral">
        <div class="accordion " id="accordionExample">
    
    
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Campeonatos
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/CrearCampe')}}" class="list-group-item list-group-item-action">Crear campeonato</a>
                    <a href="{{url('/CrearProgra')}}" class="list-group-item list-group-item-action">Crear programación</a>
                    <a href="{{url('/AgregarEqui')}}" class="list-group-item list-group-item-action">Agregar equipos</a>
                    <a href="{{url('/Partidos')}}" class="list-group-item list-group-item-action">Partidos</a>
                    
                  </div>    
                        </div>
              </div>
            </div>
    
    
    
    
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Acondicionamiento físico
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/VerPerfiles')}}" class="list-group-item list-group-item-action">Revisar perfiles</a>
                    <a href="{{url('/RegistrarTest')}}" class="list-group-item list-group-item-action">Registrar test</a>
                    <a href="{{url('/RegistrarPlan')}}" class="list-group-item list-group-item-action">Registrar plan</a>
                    
                  </div>           </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Entrenamientos
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <div class="list-group">
                    <a href="{{url('/RegistrarEntre')}}" class="list-group-item list-group-item-action">Registrar entrenamientos</a>
                    <a href="{{url('/VerEntre')}}" class="list-group-item list-group-item-action">Ver entrenamientos</a>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    
      <div class="contenido1">
        

    <div class="contenido">
        <h1>Bienvenido [nombre y apellido]</h1>
        <h3>En esta sección podrás encontrar toda la información respecto
           a los próximos entrenamientos a realizar y demás cosas </h3>
           
        
    </div>
</body>
</html>