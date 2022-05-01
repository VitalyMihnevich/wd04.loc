@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Изменение категории</h3>
        <form action="{{route('category.update', compact('category'))}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}">
            </div>
            @if($errors->has('name'))
                @foreach($errors->get('name') as $errorsMessage)
                    <div class="alert alert-danger" role="alert">
                        {{$errorsMessage}}
                    </div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="exampleInputPassword1">Родительская категория</label>
                <select type="text" name="parent_id" class="form-control" >

                    <option value="0" selected>Нет родителя</option>
                    @foreach($categories as $parentCategory)
                        <option value="{{$parentCategory->id}}">{{$parentCategory->id == $categories->parent_id ? 'selected':'0'}}>{{$parentCategory->name}}</option>
                    @endforeach
                </select>
            </div>
            @if($errors->has('parent_id'))
                @foreach($errors->get('parent_id') as $errorsMessage)
                <div class="alert alert-danger" role="alert">
                    {{$errorsMessage}}
                </div>
                @endforeach
            @endif
            @if($category->img)
                <img src="{{asset($category->img)}}" alt="">
            @endif
            <div class="form-group">
                <label for="exampleInputPassword1">Изображение</label>
                <input type="file" name="image" class="form-control" >
            </div>

            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
@endsection
