@extends('layouts.admin')

@section('content')
    <div class="grid_3 grid_5">
        <h3 class="head-top">Страны</h3>
        <div class="but_list">
            <div class="col-md-12 page_1">
                <p>Редактирование списка стран</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Страна</th>
                            <th>Код Alpha2</th>
                            <th>Редактировать</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($countries as $country)
                            <tr>
                                <td>{{$country->name}}</td>
                                <td>{{$country->code}}</td>
                                <td>
                                    <a href="{{route('admin.country_edit', ['id'=>$country->id])}}" class="btn btn-sm btn-info">Редактировать</a>
                                    <form method="POST" action="{{route('admin.country_delete', ['id'=>$country->id])}}">
                                        @method("DELETE")
                                        @csrf
                                        <button type="submit" class="btn btn-sm btn-danger">Удалить</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@endsection
