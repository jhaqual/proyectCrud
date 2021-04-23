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
                <div class="col-sm-6 mx-auto my-2" >
                    <form action="" style= "display: flex;">
                        <tr>
                            <td class="form-row ">
                                <input type="text" class="form-control" name= "text">
                            </td>

                            <td class="col-sm-2 mx-auto my-3">
                                <input type="submit" class="btn btn-primary" value="Buscar" style="margin-left: 10px;">
                            </td>
                        </tr>
                    </form>
                </div>
                <!-- Ver la tabla de resultados -->
                    <div class="col-lx-8 mx-auto">


                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Fecha creación</th>
                                <th>Última actualización</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>

                    </table>
                </div>

            </div>

        </div>

    </body>
</html>
