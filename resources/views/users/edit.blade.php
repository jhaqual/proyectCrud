<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actualizar registros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    </head>
<body>
    <div class="container">
        <h2 style= "text-align: center;">Editar cliente</h2>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('user.update',$user->id) }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="name" required required maxlength="80" value="{{ $user->name }}" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" required maxlength="50" value="{{ $user->email }}" >
                    </div>
                    <div class="form-group">
                        <label for="profession">Profesión</label>
                        <input type="text" class="form-control" name="profession" required maxlength="50" value="{{ $user->profession }}" >
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefono</label>
                        <input type="text" class="form-control" name="phone" required maxlength="50" value="{{ $user->phone }}" >
                    </div>
                    <td class="col-sm-1 mx-auto my-3">
                        <input type="submit" class="btn btn-primary" value="Guardar" style="margin: 10px;">
                    </td>
                    <td class="col-sm-1 mx-auto my-3">
                        <input type="reset" class="btn btn-warning" value="Cancelar" style="margin: 10px;">
                    </td>
                    <td class="col-sm-1 mx-auto my-3">
                        <a href="javascript:history.back()" class="btn btn-link" style="margin: 10px;"> Ir a listado </a>
                    </td>
                </form>

            </div>

        </div>
</body>
</html>