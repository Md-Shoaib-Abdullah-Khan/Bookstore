@extends('layout')

@section('page-content')

<form method="post" action='{{route('books.update')}}'>
@csrf
<input type="hidden" name="id" value="{{$book->id}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" name="title" value="{{old('title',$book->title)}}" placeholder="Enter title">
    <div>{{$errors->first('title')}}</div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Author</label>
    <input type="text" class="form-control" name="author" value="{{old('author',$book->author)}}" placeholder="Enter author">
    <div>{{$errors->first('author')}}</div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ISBN</label>
    <input type="text" class="form-control" name="isbn" value="{{old('isbn',$book->isbn)}}" placeholder="Enter ISBN">
    <div>{{$errors->first('isbn')}}</div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Stock</label>
    <input type="text" class="form-control" name="stock" value="{{old('stock',$book->stock)}}" placeholder="Enter stock">
    <div>{{$errors->first('stock')}}</div>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" name="price" value="{{old('stock',$book->price)}}" placeholder="Enter price">
    <div>{{$errors->first('price')}}</div>
  </div>
 
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-danger" href="{{route('books.index')}}">Back</a>
</form>

@endsection