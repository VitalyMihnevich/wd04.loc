@extends('layouts.admin')

@section('content')
    <div class="grid_3 grid_5">
        <h3 class="head-top">Статьи</h3>
        <div class="but_list">
            <div class="col-md-12 page_1">
                <p>Редактирование списка статей</p>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Наименование</th>
                            <th>Статья</th>
                            <th>Редактировать</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{$article->name}}</td>
                                <td>{{$article->content}}</td>
                                <td>
                                    <a href="{{route('article.edit', ['article'=>$article])}}" class="btn btn-sm btn-info">Редактировать</a>
                                    <form method="POST" action="{{route('article.destroy', ['article'=>$article])}}">
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
