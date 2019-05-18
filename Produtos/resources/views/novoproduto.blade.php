@extends('layout.app', ["current"=>"produtos"])
@section('body')
<div class="card border">
    <div class="card-body">
        <form action="/produtos" method="POST">
           @csrf
            <div class="form-group">
                <label for="nomeProduto">Nome do Produto</label>
                <input type="text" class="form-control" name="nomeProduto" 
                    id="nomeProduto" placeholder="Informe o Produto">
            </div>
            <div class="form-group">
                <label for="quantidadeEstoque">Quantidade em Estoque</label>
                <input type="number" class="form-control" name="quantidadeEstoque" 
                    id="quantidadeEstoque" placeholder="Informe a Quantidade em Estoque">
            </div>
            <div class="form-group">
                <label for="preco">Preço</label>
                <input type="number" class="form-control" name="preco" 
                    id="preco" placeholder="Informe o Preço do Produto">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label><br/>
                <select name="categoria" class="custom-select mr-sm-2">
                    @foreach ($categorias as $item)
                        <option value="{{$item->id}}">{{$item->nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='/produtos';" type="button" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
    
@endsection