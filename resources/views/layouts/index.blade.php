<div class="box-header">
    @if(session()->has('notif'))
        <div class="alert alert-success" role="alert">
            {{session()->get('notif')}}
        </div>
    @endif
    <h3 class="box-title">Gerenciar Módulos</h3>
    <div class="row">
        <div class="col-md-12">
            <a href="{{route('module.new')}}" class="btn btn-primary pull-right">
                Adicionar Módulo
            </a>
        </div>
        <br><br>
    </div>
</div>
