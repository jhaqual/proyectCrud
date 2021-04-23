<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    </head>
    <body>
        <div class="container">
            <h4 style= "text-align: center;">Gestión de Clientes</h4>
            <div class="row">
                <div class="col-sm-5 mx-auto my-2" >
                    <form action="{{ route('user.index') }}" method="GET" style= "display: flex;">
                        <tr>
                            <td class="form-row ">
                                <input type="text" class="form-control" name= "text" value="{{ $text }}">
                            </td>

                            <td class="col-sm-1 mx-auto my-3">
                                <input type="submit" class="btn btn-danger" value="Buscar" style="margin-left: 10px;">
                            </td>
                            <td class="col-sm-1 mx-auto my-3">
                                <a href="{{ route('user.create') }}" class="btn btn-primary" style="margin-left: 10px;">Nuevo</a>
                            </td>

                        </tr>
                    </form>
                </div>
                <!-- Ver la tabla de resultados -->
                    <div class="col-xl-12 mx-auto">


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Profesión</th>
                                <th>Telefono</th>
                                <th colspan="2" style="text-align: center">Opciones de registro</th>

                            </tr>
                        </thead>
                        <tbody>
                        @if(count($users)<=0)
                            <tr>
                                <td colspan="7" style="text-align: center"><h2>No hay resultados</h2></td>
                            </tr>
                        @else

                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->profession}}</td>
                                <td>{{ $user->phone}}</td>
                                <td>editar</td>
                                <td>eliminar</td>
                            </tr>
                        @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$users->links()}}
                </div>

            </div>

        </div>

    </body>
</html>
