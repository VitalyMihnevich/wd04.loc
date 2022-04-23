@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Редактировать статью</h3>
        <form action="{{route('article.update', ['article'=>$article->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Название</label>
                <input type="text" name="name" class="form-control" value="{{$article->name}}">
            </div>
            @error('name')
            @foreach($errors->get('name') as $errorsMessage)
                <div class="alert alert-danger" role="alert">
                    {{$errorsMessage}}
                </div>
            @endforeach
            @enderror
            <div class="form-group">
                <label for="exampleInputPassword1">Статья</label>
                <<div class="form-group">
                    <label for="exampleInputPassword1">Содержание</label>
                    <textarea name="content" cols="30" rows="10" class="form-control "></textarea>
                </div>
                @error('content')
                    @foreach($errors->get('content') as $errorsMessage)
                        <div class="alert alert-danger" role="alert">
                            {{$errorsMessage}}
                        </div>
                    @endforeach
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Картинка</label>
                <input type="file" name="image" class="form-control" value="{{$article->image}}" >
            </div>

            <button type="submit" class="btn btn-default">Изменить</button>
        </form>
    </div>
@endsection
