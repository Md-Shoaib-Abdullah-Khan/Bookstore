@extends('layout')

@section('page-content')
<h1>Bookstore</h1>
    <table class="table table-striped table-bordered">
    <tr>
        <td>ID</td>
        <td>{{$book->id}}</td>
    </tr>
    <tr>
        <td>Title</td>
        <td>{{$book->title}}</td>
    </tr>
    <tr>
        <td>Author</td>
        <td>{{$book->author}}</td>
    </tr>
    <tr>
        <td>Price</td>
        <td>{{$book->price}}</td>
    </tr>
    <tr>
        <td>ISBN</td>
        <td>{{$book->isbn}}</td>
    </tr>    
    <tr>
        <td>Stock</td>
        <td>{{$book->stock}}</td>
    </tr>
</table>
<p>
    <a class="btn btn-success" href="{{route('books.index')}}"><i class="bi bi-arrow-left-circle"></i> Go Back</a>
    <a class="btn btn-danger" href="{{route('books.edit', $book->id)}}"><i class="bi bi-pencil-square"></i></i> Edit</a>
</p>
@endsection
