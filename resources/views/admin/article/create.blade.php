@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление статьи</h3>
        <form action="{{route('article.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Статья</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Содержание</label>
                <input type="text" name="code" class="form-control" >
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Картинка</label>
                <input type="file" name="imgFlag" class="form-control" >
            </div>

            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
@endsection
