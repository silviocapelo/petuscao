@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')



@section('content')
    <div class="row">
        <section class="content">
            <div class="col-md-8 col-md-offset-2">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Error!</strong> Revise los campos obligatorios.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('success'))
                    <div class="alert alert-info">
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Cadastro de Clientes</h1>
                    </div>
                    <div class="panel-body">
                        <div class="table-container">
                            <form method="POST" action="" role="form">{{ csrf_field() }}
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="nome" id="Nome" class="form-control input-sm"
                                                   placeholder="Nome">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="sobrenome" id="sobrenome"
                                                   class="form-control input-sm" placeholder="Sobrenome">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="rua" id="rua" class="form-control input-sm"
                                                   placeholder="Rua">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="numero" id="numero" class="form-control input-sm"
                                                   placeholder="Numero">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="bairro" id="bairro" class="form-control input-sm"
                                                   placeholder="Bairro">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="cidade" id="cidade" class="form-control input-sm"
                                                   placeholder="Cidade">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="estado" id="estado" class="form-control input-sm"
                                                   placeholder="Estado">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" id="email" class="form-control input-sm"
                                                   placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="telefone" id="telefone"
                                                   class="form-control input-sm" placeholder="Telefone Fixo">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="celular" id="celular" class="form-control input-sm"
                                                   placeholder="Celular">
                                        </div>
                                    </div>
                                </div>
                                {{-- ****************** Animal de Estimação ************************************</div>--}}
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h1 class="panel-title">Animal de Estimação </h1>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-container">{{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="nome" id="Nome"
                                                               class="form-control input-sm" placeholder="Nome">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="raca" id="raca"
                                                               class="form-control input-sm" placeholder="Raça">
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="idade" id="idade"
                                                               class="form-control input-sm"
                                                               placeholder="Idade">
                                                    </div>
                                                    <div class="form-group">
                                                <textarea name="Info" class="form-control"
                                                          placeholder="Informações Adicionais"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" name="cor" id="cor"
                                                               class="form-control input-sm"
                                                               placeholder="cor">
                                                    </div>
                                                </div>
                                            </div>
                                              <input type="submit" value="Guardar" class="btn btn-success btn-block">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection
@stop
@section('content')

@stop
