@extends('layout')

@section('content') 
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="uper">
    @if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div><br/>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Nome do Livro</td>
                <td>Código ISBN</td>
                <td>Preço</td>
                <td colspan="2">Ação</td>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->isbn_no }}</td>
                <td>{{ $book->book_price }}</td>
                <td><a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Editar</td>
                <td>
                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="flex-center position-ref full-height">
    <div class="top-right links">
        <a href="{{ route('books.create') }}" class="btn btn-primary">Cadastrar</a>
    </div>
</div>
@endsection