# MyHuerto

My Huerto es una plataforma web la cual se enfoca en ofrecer productos para que cualquier persona con o sin conocimientos pueda crear su propio huerto en casa.

# Integrantes
Luis Armando Sihuinta Perez
Brian Emanuel Silva Corrales

# Software
Laragon Full 4.0.16


# Arquitectura
El proyecto MyHuerto funciona con la arquitectura MVC

1-. Vista: Estas fueron creadas con HTML, CSS, JAVASCRIPT. Hay 3 vistas principales
  - Pagina principal
  - Login 
  - Registro de productos

2-. Controlador: Este funciona con PHP respondiendo a las peticiones de las vistas.

3-. Modelo: Estos son creados en PHP con la ayuda del ORM Eloquent
  - Producto
  - Usario
  - Proveedor

# Estilos de programación
1-. Things: Con la ayuda de Eloquent tratando nuestra bd como objetos usamos este estilo POO.
    ```php
        <?php

        namespace App\Http\Controllers;

        use App\Producto

        use Illuminate\Http\Request;

        class AddController extends Controller
        {
            //Eloquent trata al modelo en minusculas y  lo pluraliza
            //protected $table = 'productos';

            public function index()
            {
                return view('productos.index',
                    ['productos' => Producto::latest()->paginate()]);
            }

            public function show(Producto $productos)
            {
                return view('productos.show',
                    ['producto' => $producto]);
            }

            public function crear()
            {
                return view('productos.create');
            }

            public function guardar()
            {
                Producto::crear
                ([
                    'idproducto' => request('idproducto'),
                    'idproveedor' => request('idproveedor'),
                    'nombre' => request('nombre'),
                    'precio' => request('precio'),
                    'stock' => request('stock'),
                    'descripcion' => request('descripcion'), 
                ]);
            }
        }
    ```
2-. Trinity: La arquitectura del proyecto es un MVC nos apoyamos en laragon el ORM eloquent y controladores para tener ordenado nuestro MVC


# Principios SOLID

Single Responsability Principle (SRP)
- El principio de responsabilidad única se basa en que cada clase o método sólo debe hacer una cosa, sencilla y concreta. Si un objeto tiene un sólo cometido, éste será más fácil de mantener.
```php
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;
    
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

```

```php
<?php

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = '/myhuerto';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
```
```php
        <?php

        namespace App\Http\Controllers;

        use App\Producto

        use Illuminate\Http\Request;

        class AddController extends Controller
        {
            //Eloquent trata al modelo en minusculas y  lo pluraliza
            //protected $table = 'productos';

            public function index()
            {
                return view('productos.index',
                    ['productos' => Producto::latest()->paginate()]);
            }

            public function show(Producto $productos)
            {
                return view('productos.show',
                    ['producto' => $producto]);
            }

            public function crear()
            {
                return view('productos.create');
            }

            public function guardar()
            {
                Producto::crear
                ([
                    'idproducto' => request('idproducto'),
                    'idproveedor' => request('idproveedor'),
                    'nombre' => request('nombre'),
                    'precio' => request('precio'),
                    'stock' => request('stock'),
                    'descripcion' => request('descripcion'), 
                ]);
            }
        }
```
Open Closed
Software entities (classes, modules, functions, etc…) should be open for extension but closed for modification

```php
        <?php

        namespace App\Http\Controllers;

        use App\Producto

        use Illuminate\Http\Request;

        class AddController extends Controller
        {
            //Eloquent trata al modelo en minusculas y  lo pluraliza
            //protected $table = 'productos';

            public function index()
            {
                return view('productos.index',
                    ['productos' => Producto::latest()->paginate()]);
            }

            public function show(Producto $productos)
            {
                return view('productos.show',
                    ['producto' => $producto]);
            }

            public function crear()
            {
                return view('productos.create');
            }

            public function guardar()
            {
                Producto::crear
                ([
                    'idproducto' => request('idproducto'),
                    'idproveedor' => request('idproveedor'),
                    'nombre' => request('nombre'),
                    'precio' => request('precio'),
                    'stock' => request('stock'),
                    'descripcion' => request('descripcion'), 
                ]);
            }
        }
 ```
    
Interface Segregation Principle

Cada interface tendrá una única responsabilidad. Es preferible tener muchas interfaces que contengan pocos métodos que tener un interface con muchos métodos.

```html
    <!DOCTYPE html>
<html lang="es">
<head>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>@yield('title', 'MyHuerto')</title>
    <link rel="stylesheet" href="/css/CssHuerto.css">
    <script src="/js/javascr.js"></script>
</head>
<body>
    <header class="principal">
        <span id="titulo">MyHuerto</span>
        @section('view')
            
        @show
    </header>
    <div class="slider" id="main-slider">
    <div class="slider-wrapper">
        <img src="/img/slide1.png" alt="First" class="slide" />
        <img src="/img/slide2.png" alt="Second" class="slide" />
        <img src="/img/slide3.png" alt="Third" class="slide" />
    </div>
    </div>  
    <div id="containerp">
        <div id="subtitle"><a> Nuestros Productos</a></div>

        <div class="container">
            <img src="/img/girasol.jpg"  class="image">
            <div class="overlay">

                <div class="text"><a>Girasoles</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/rosasRojas.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Rosas Rojas</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/azada.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Azada</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/manguera.jpg"  class="image" >
            <div class="overlay">
                <div class="text"><a>Manguera</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/regadera.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Regadera</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/serrucho.jpg"  class="image" >
            <div class="overlay">
                <div class="text"><a>Serrucho de Poda</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/tijera.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Tijera de poda</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/fresa.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Semilla de fresa</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/bonsai.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Bonsai</a></div>
            </div>
        </div>
        <div class="container">
            <img src="/img/guantes.jpg"  class="image" >
            <div class="overlay">
                
                <div class="text"><a>Guantes</a></div>
            </div>
        </div>
    </div>
    <div><footer id="pie"><small>Derechos reservados © 2018-2018</footer>
</body>
</html>
```

```html
@extends('layout')

@section('title', 'MyHuerto')

@section('view')
	    <li><a href={{route('login')}}>Login</a></li>
@endsection
```
