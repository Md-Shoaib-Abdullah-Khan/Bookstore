@extends('layout')

@section('page-content')
<h1>Bookstore</h1>

<div class="row">
<div class="col-lg-10">
    
    <form method="get" action="{{route('books.index')}}">
    <div class="form-row">
        <div class="col-8">
    <input type="text" class="form-control" id="search" name="search" value="{{request('search')}}" placeholder="">
        </div>
        <div class="col-2">
             <button type="submit" class="btn btn-default">Search</button>
        </div>
            </div>
            </form>
    
    </div>
    <div class="col-lg-2">
       <p class="text-right"><a class="btn btn-primary" href="{{route('books.create')}}">New Book</a></p>
    </div>
    
    
</div>

    <table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th colspan = "3">Action</th>
    </tr>
    @foreach($books as $book)
        <tr>
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td><a href="{{route('books.show', $book->id)}}">View</a></td>
            <td><a href="{{route('books.edit', $book->id)}}">Edit</a></td>
            <td>
            <form method="post" action="{{route('books.destroy')}}" onsubmit="return confirm('Sure?')">
            @csrf
            <input type="hidden" name="id" value="{{$book->id}}">
             <button type="submit" class="btn btn-link text-danger">Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
    </table>
    {{$books->links()}}
@endsection