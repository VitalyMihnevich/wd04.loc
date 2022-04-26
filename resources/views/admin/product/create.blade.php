@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление товара</h3>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Товар</label>
                <input type="text" name="name" class="form-control">
            </div>
            @if($errors->has('name'))
                @foreach($errors->get('name') as $errorsMessage)
                    <div class="alert alert-danger" role="alert">
                        {{$errorsMessage}}
                    </div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="exampleInputPassword1">Описание</label>
                <input type="text" name="description" class="form-control" >
            </div>
            @error('description')
            @foreach($errors->get('description') as $errorsMessage)
                <div class="alert alert-danger" role="alert">
                    {{$errorsMessage}}
                </div>
            @endforeach
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">Цена</label>
                <input type="number" name="price" class="form-control" >
            </div>
            @error('price')
            @foreach($errors->get('price') as $errorsMessage)
                <div class="alert alert-danger" role="alert">
                    {{$errorsMessage}}
                </div>
            @endforeach
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">Категория</label>
                <input type="text" name="category_id" class="form-control" >
            </div>
            @error('category_id')
            @foreach($errors->get('category_id') as $errorsMessage)
                <div class="alert alert-danger" role="alert">
                    {{$errorsMessage}}
                </div>
            @endforeach
            @enderror

            <div class="form-group">
                <label for="exampleInputPassword1">Изображение</label>
                <input type="file" name="img" class="form-control" >
            </div>

            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
@endsection
