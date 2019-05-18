@extends('layout.app', ["current" => "categorias"])
@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            @if(count($categorias) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome da Categoria</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nome }}</td>
                            <td>
                                <a href="/categorias/editar/{{$item->id}}" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <a href="/categorias/apagar/{{$item->id}}" class="btn btn-danger">Apagar</a>
                            </td>
                        </tr>  
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-primary btn-sm" role="button">Nova Categoria</a>
        </div>
    </div>
@endsection