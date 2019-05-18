@extends('layout.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Produtos</h5>
            @if(count($produtos) > 0)
                <table class="table table-ordered table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome do Produto</th>
                            <th>Estoque</th>
                            <th>Preço</th>
                            <th>Categoria</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nome }}</td>
                            <td>{{ $item->estoque }}</td>
                            <td>{{ $item->preco }}</td>    
                            @foreach($categorias as $categoria)
                                @if($categoria->id == $item->categoria_id)
                                    <td>{{ $categoria->nome }}</td>
                                @endif
                            @endforeach
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
            <a href="/produtos/novo" class="btn btn-primary btn-sm" role="button">Novo Produto</a>
        </div>
    </div>
@endsection