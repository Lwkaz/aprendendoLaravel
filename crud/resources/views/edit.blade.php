@extends('layout')

@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Editar Livro
    </div>
    <div class="card-body">
        @if(@errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
        @endif
        <form method="post" action="{{ route('books.update', $book->id) }}">
            <div class="form-group">
                @csrf
                @method('PATCH')
                <label for="name">Nome do Livro:</label>
                <input type="text" class="form-control" name="book_name" value="{{ $book->book_name }}"/>
            </div>
            <div class="form-group">
                <label for="price">Código ISBN:</label>
                <input type="text" class="form-control" name="isbn_no" value="{{ $book->isbn_no }}"/>
            </div>
            <div class="form-group">
                <label for="quantity">Preço:</label>
                <input type="text" class="form-control" name="book_price" value="{{ $book->book_price }}"/>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection