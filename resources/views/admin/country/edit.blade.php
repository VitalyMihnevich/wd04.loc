@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление страны</h3>
        <form action="{{route('admin.country_update', ['id'=>$country->id])}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Страна</label>
                <input type="text" name="name" class="form-control" value="{{$country->name}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Код Alpha2</label>
                <input type="text" name="code" class="form-control" value="{{$country->code}}">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Флаг</label>
                <input type="file" name="imgFlag" class="form-control" value="{{$country->imgFlag}}" >
            </div>

            <button type="Добавить" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
