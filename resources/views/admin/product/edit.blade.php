@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Редактирование товара</h3>
        <form action="{{route('product.update', ['product'=>$product])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Товар</label>
                <input type="text" name="name" class="form-control" value="{{$product->name}}">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Описание</label>
                <input type="text" name="description" class="form-control" value="{{$product->description}}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Изображение</label>
                <input type="file" name="img" class="form-control" value="{{$product->img}}" >
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Цена</label>
                <input type="number" name="price" class="form-control" value="{{$product->price}}">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Категория</label>
                <input type="text" name="category_id" class="form-control" value="{{$product->category_id}}">
            </div>



            <button type="submit" class="btn btn-default">Изменить</button>
        </form>
    </div>
@endsection
