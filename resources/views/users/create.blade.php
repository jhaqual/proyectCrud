<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insertar registros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


    </head>
<body>
    <div class="container">
        <h2 style= "text-align: center;">Ingreso de nuevo cliente</h2>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('user.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required maxlength="80" >
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" required maxlength="50" >
                    </div>
                    <div class="form-group">
                        <label for="created_at">Fecha creación</label>
                        <input type="text" class="form-control" name="created-at" required maxlength="50" >
                    </div>
                    <div class="form-group">
                        <label for="updated_at">Última actualización</label>
                        <input type="text" class="form-control" name="updated_at" required maxlength="50" >
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