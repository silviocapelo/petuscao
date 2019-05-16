<!DOCTYPE html>
<html lang="es"><head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, user-scalable=yes">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid" style="margin-top: 100px">

    @yield('content')
</div>
<style type="text/css">
    .table {
        border-top: 2px solid #ccc;

    }
</style>
</body>
</html>

@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="pull-left"><h3>Lista Libros</h3></div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <a href="" class="btn btn-info" >Añadir Libro</a>
                            </div>
                        </div>
                        <div class="table-container">
                            <table id="mytable" class="table table-bordred table-striped">
                                <thead>
                                <th>Nombre</th>
                                <th>Resumen</th>
                                <th>No. Páginas</th>
                                <th>Edicion</th>
                                <th>Autor</th>
                                <th>Precio</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                                </thead>
                                <tbody>
                                @if($libros->count())
                                    @foreach($libros as $libro)
                                        <tr>
                                            <td>{{$libro->nombre}}</td>
                                            <td>{{$libro->resumen}}</td>
                                            <td>{{$libro->npagina}}</td>
                                            <td>{{$libro->edicion}}</td>
                                            <td>{{$libro->autor}}</td>
                                            <td>{{$libro->precio}}</td>
                                            <td><a class="btn btn-primary btn-xs" href="" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                                            <td>
                                                <form action="" method="post">

                                                    <input name="_method" type="hidden" value="DELETE">

                                                    <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="8">No hay registro !!</td>
                                    </tr>
                                @endif
                                </tbody>

                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
