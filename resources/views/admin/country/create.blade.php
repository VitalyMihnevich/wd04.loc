@extends('layouts.admin')

@section('content')
    <div class="grid-form1">
        <h3 id="forms-example" class="">Добавление страны</h3>
        <form action="{{route('country.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Страна</label>
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
                <label for="exampleInputPassword1">Код страны</label>
                <input type="text" name="code" class="form-control" >
            </div>
            @if($errors->has('code'))
                @foreach($errors->get('code') as $errorsMessage)
                <div class="alert alert-danger" role="alert">
                    {{$errorsMessage}}
                </div>
                @endforeach
            @endif
            <div class="form-group">
                <label for="exampleInputPassword1">Флаг</label>
                <input type="file" name="imgFlag" class="form-control" >
            </div>

            <button type="submit" class="btn btn-default">Добавить</button>
        </form>
    </div>
@endsection
