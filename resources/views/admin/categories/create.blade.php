@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Создание категорий</h3>
        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label >Название</label>
                <input type="text" name="name" class="form-control"  value="{{old('name')}}">
            </div>
            @if($errors->has('name'))
                @foreach($errors->get('name') as $errorsMessage)
                    <div class="alert alert-danger" role="alert">
                        {{$errorsMessage}}
                    </div>
                @endforeach
            @endif
            <div class="form-group">
                <label >Родительская категория </label>
                <select name="parent_id" class="form-control">
                    <option value="0"> Нет родителя</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
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
            <div class="form-group">
                <label for="exampleInputPassword1">Картинка</label>
                <input type="file" name="imgFlag" class="form-control" >
            </div>

            <button type="submit" class="btn btn-default">Сщздать</button>
        </form>
    </div>
@endsection
