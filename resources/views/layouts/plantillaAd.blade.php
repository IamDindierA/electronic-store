<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'ElectronicStore') }}</title>
    <style>
        .contenedor{
            display: flex;
            flex-direction: column;
        }
        .contenedor-header{
            background-color: #7a04eb;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contenedor-header ul{
            display: flex;
            align-self: flex-end;
        }
        .contenedor-main{
            background-color:cadetblue;
        }
    </style>
</head>
<body>
    <div class="contenedor">
            <div class="contenedor-header">
                <h1>Electronic store</h1>
                <!--<nav>-->
                        <ul>
                            <li>
                                <a href="#" role="button" >
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            
                        </ul>
                <!--</nav>-->
            </div>
            <div class="contenedor-main">
                @yield("main")
            </div>
            <div class="contenedor-footer">
                @yield("footer")
            </div>
    </div>
</body>
</html>